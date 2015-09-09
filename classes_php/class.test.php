<?php
class test{
    public $id;            //服务器
    public $name;        //数据库用户名
    public $db; 

    public function __construct(){
        $this->db = new DB();
    }

    public function show($keyword,$pageNum,$numPerPage){
        $row = $this->db->getObjListBySql("select * from test where (field1 like '%".$keyword."%' or field2 like '%".$keyword."%') limit ".($pageNum-1)*$numPerPage.",".($numPerPage));
        $arr = array();
        if($row)
            $arr = $row;
        return $arr;
    }

    public function getNumByKeyword($keyword){
        $sql1 = "select count(*) from test where (field1 like '%".$keyword."%' or field2 like '%".$keyword."%')";
        $row1 = $this->db->getObjListBySql($sql1);
        if($row1)
            return $row1[0][0];
        else
            return 0;
    }
        /**
         * test插入数据库
         */
    public function insert($post)
    {
        $columns[0] = "field1";
        $values[0] = $post['field1'];
        $columns[1] = "field2";
        $values[1] = $post['field2'];
        $row = $this->db->insertData("test",$columns,$values);
        return $row;
    }
        /**
         * 通过id删除
         */
    public function delete($id){
        $this->id = $id;
        $row = $this->db->delete("test","id",$id);
        return $row;
    }
        /**
         * 通过id获取信息
         */
    public function select($id){
        $this->id = $id;
        $row = $this->db->getDataByAtr("test","id",$id);
        return $row[0];
    }
        /**
         * 通过id获取信息
         */
    public function update($_POST)
    {
        $log = new log();
        $log->addLog("update test",1);
        $columns[0] = "field1";
        $values[0] = $_POST['field1'];
        $columns[1] = "field2";
        $values[1] = $_POST['field2'];
        $row = $this->db->updateParamById("test",$columns,$values,"id",$_POST['id']);
        return $row;
    }
    public function excel(){
        $xls = new Excel_XML();
        // create a simple 2-dimensional array      
        $table = array(1=>array("字段1","字段2"));
        $sql = "select field1,field2 from test order by id desc";
        $data = $this->db->getObjListBySql($sql);
        if(!empty($data)){
           // $prize = array("谢谢参与","电影票","报卡");
            foreach($data as $row){
                array_push($table,array($row["field1"],$row["field2"]));
            }
        }
        $xls = new Excel_XML('UTF-8', false, 'excel测试');
        $xls->addArray($table);
        $xls->generateXML("excel");
    }
}
?>