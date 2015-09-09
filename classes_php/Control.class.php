<?php
class Control
    {
        public $db;
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
        public function show($_GET,$_POST){
            $param = array();
            $param['thepage'] = $_GET['p'];
            $param['page'] = isset($_POST['pageNum'])?$_POST['pageNum']:1;
            $param['PerPage'] = isset($_POST['numPerPage'])?$_POST['numPerPage']:20;
            
            if(!isset($_GET['type']))
                $_GET['type'] = 0;
            if(!isset($_POST['keyword']))
                $_POST['keyword'] = "";
            $param['keyword'] = $_POST['keyword'];
            $arr = array();
            $param['rc'] = 0;
            switch ($_GET['p']) {
                case 'user':
                    $user = new user();
                    $arr = $user->show($param['keyword'],$param['page'],$param['PerPage']);
                    $param['rc'] = $user->getNumByKeyword($param['keyword']);
                    break;
                default:
                    $obj = new $_GET['p']();
                    $arr = $obj->show($param['keyword'],$param['page'],$param['PerPage']);
                    $param['rc'] = $obj->getNumByKeyword($param['keyword']);
                    break;
            }
            $this->smarty->assign("arr",$arr);
            $this->smarty->assign("param",$param);
            $this->smarty->display("view_html/".$_GET['p'].".html");
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
        public function add($_GET,$_POST){
            $result = 0;
            switch ($_GET['p']) {
                case 'user':
                    $user = new user();
                    $result = $user->insert($_POST);
                    break;
                default:
                    $obj = new $_GET['p']();
                    $result = $obj->insert($_POST);
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
                default:
                    $obj = new $thepage;
                    $result = $obj->delete($id);
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
                default:
                    $obj = new $thepage();
                    $result = $obj->update($_POST);
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
         * 小数据查询
        *****************************/
        public function detail($thepage,$id,$type){
            switch ($thepage) {
                default:
                    $obj = new $thepage();
                    $result = $obj->select($_GET['id']);
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
                default:
                    $obj = new $thepage();
                    $result = $obj->update($_POST);
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
         * 导出excel
        *****************************/
        public function excel($thepage){
            switch ($thepage) {
                default:
                    $obj = new $thepage();
                    $result = $obj->excel();
                    break;
            }

        }
    }
?>