<?php
class Control
    {
        public $db;            //服务器 
        public $smarty;


        /*****************************
         * DB类构造函数
        /*****************************/
        public function __construct($smarty)
        {
            $this->smarty = $smarty;
            $this->db = new DB();
        }


        /**************************
         * 页面显示数据
        ***************************/
        public function show($GET,$POST){
            $param = array();
            $param['thepage'] = $GET['p'];
            $param['page'] = isset($POST['pageNum'])?$POST['pageNum']:1;
            $param['PerPage'] = isset($POST['numPerPage'])?$POST['numPerPage']:20;
            
            if(!isset($GET['type']))
                $GET['type'] = 0;
            if(!isset($POST['keyword']))
                $POST['keyword'] = "";
            $param['keyword'] = $POST['keyword'];
            $arr = array();
            $param['rc'] = 0;
            switch ($GET['p']) {
                case 'test':
                    $test = new test();
                    $arr = $test->show($param['keyword'],$param['page'],$param['PerPage']);
                    $param['rc'] = $test->getNumByKeyword($param['keyword']);
                    break;
                case 'user':
                    $user = new user();
                    $arr = $user->show($param['keyword'],$param['page'],$param['PerPage']);
                    $param['rc'] = $user->getNumByKeyword($param['keyword']);
                    break;
                default:
                    $this->common($GET['p'],$param,$param['keyword'],$param['page'],$param['PerPage']);
                    break;
            }
            $this->smarty->assign("arr",$arr);
            $this->smarty->assign("param",$param);
            $this->smarty->display("view_html/".$GET['p'].".html");
        }


        /*****************************
         * 按id查询信息
        ******************************/
        public function selectById($thepage,$id){
            switch ($thepage) {
                case 'test':
                    $test = new test();
                    $result = $test->select($_GET['id']);
                    break;
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }
            if($result)
                return $result;
            else
                return NULL;
        }

        /*****************************
         * 数据库插入数据
        *****************************/
        public function add($GET,$POST){
            $result = 0;
            switch ($GET['p']) {
                case 'user':
                    $user = new user();
                    $result = $user->insert($POST);
                    break;
                case 'test':
                    $test = new test();
                    $result = $test->insert($POST);
                    break;
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }
            if ($result){
                $arr = array ('statusCode'=>200,'message'=>"添加成功",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
                
            } else {
                $arr = array ('statusCode'=>300,'message'=>"操作失败",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
            }
            return $arr;
        }




        /*****************************
         * 通过id删除
        *****************************/
        public function delete($thepage,$id){
            $result = 0;
            
            switch ($thepage) {
                case 'user':
                    $user = new user();
                    $result = $user->delete($id);
                    break;
                case 'test':
                    $test = new test();
                    $result = $test->delete($id);
                    break;
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }
            if(!$id)
                $arr = array ('statusCode'=>300,'message'=>"请选中后删除",'navTabId'=>"",'rel'=>"",'callbackType'=>"forward","forwardUrl"=>"");

            else if ($result){
                $arr = array ('statusCode'=>200,'message'=>"删除成功",'navTabId'=>"",'rel'=>"",'callbackType'=>"forward","forwardUrl"=>"");
                
            } else {
                $arr = array ('statusCode'=>300,'message'=>"操作失败",'navTabId'=>"",'rel'=>"",'callbackType'=>"forward","forwardUrl"=>"");
            }
            return $arr;
        }




        /*****************************
         * 更新数据
        *****************************/
        public function update($_POST,$thepage){
            $result = 0;
            
            switch ($thepage) {
                case 'test':
                    $test = new test();
                    $result = $test->update($_POST);
                    break;
                
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }

            if(!$_POST['id'])
                $arr = array ('statusCode'=>300,'message'=>"请选中后修改",'navTabId'=>"",'rel'=>"",'callbackType'=>"forward","forwardUrl"=>"");
            else if ($result){
                $arr = array ('statusCode'=>200,'message'=>"修改成功",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
                
            } else {
                $arr = array ('statusCode'=>300,'message'=>"操作失败",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
            }
            return $arr;
        }


        /*****************************
         * 小数据显示
        *****************************/
        public function detail($thepage,$id,$type){
            switch ($thepage) {
               
                case 'test':
                    $test = new test();
                    $result = $test->select($_GET['id']);
                    break;
                
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }
            if($result)
                return $result;
            else
                return NULL;
        }


        /*****************************
         * 小数据更新
        *****************************/
        public function detailact($_POST,$thepage,$type){
            $result = 0;
            switch ($thepage) {
                case 'test':
                    $test = new test();
                    $result = $test->update($_POST);
                    break;
                
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }

             if(!$_POST['id'])
                $arr = array ('statusCode'=>310,'message'=>"请选中后修改",'navTabId'=>"",'rel'=>"",'callbackType'=>"forward","forwardUrl"=>"");


            else if ($result){
                $arr = array ('statusCode'=>200,'message'=>"修改成功",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
                
            } else {
                $arr = array ('statusCode'=>300,'message'=>"操作失败",'navTabId'=>"",'rel'=>"",'callbackType'=>"closeCurrent","forwardUrl"=>"");
            }
            return $arr;
        }



        /*****************************
         * 页面多表信息获取函数
        *****************************/
        public function goods($thepage,& $param,& $arr,$page,$perpage){
            $sql = "select * FROM  olo_".$thepage." limit ".($page-1)*$perpage.",".($perpage);
            $row = $this->db->getObjListBySql($sql);
            if($row)
               $arr = $row;
            $sql1 = "select count(*) FROM  olo_".$thepage;
            $row1 = $this->db->getObjListBySql($sql1);
            if($row1)
               $param['rc'] = $row1[0][0];
            $this->smarty->assign("arr",$arr);
            $this->smarty->assign("param",$param);
            $this->smarty->display("view_html/".$thepage.".html");
        }



        /*****************************
         * 页面单表信息获取函数
        /*****************************/
        public function common($thepage,& $param,& $arr,$page,$perpage){
            $sql = "select * FROM  t_".$thepage." limit ".($page-1)*$perpage.",".($perpage);
            $row = $this->db->getObjListBySql($sql);
            if($row)
               $arr = $row;
            $sql1 = "select count(*) FROM  t_".$thepage;
            $row1 = $this->db->getObjListBySql($sql1);
            if($row1)
               $param['rc'] = $row1[0][0];
            $this->smarty->assign("arr",$arr);
            $this->smarty->assign("param",$param);
            $this->smarty->display("view_html/".$thepage.".html");
        }

        public function excel($thepage){
            switch ($thepage) {
                case 'test':
                    $test = new test();
                    $result = $test->excel();
                    break;
                
                default:
                    //$this->common_add($_POST,$thepage);
                    break;
            }

        }
    }
?>