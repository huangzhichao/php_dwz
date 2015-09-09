<?php
class user{
    public $db; 

    public function __construct(){
        //$this->name = $name;
        $this->db = new DB();
    }
        /**
         * 库存显示
         */
    public function show($keyword,$pageNum,$numPerPage)
    {
        $row = $this->db->getObjListBySql("select * FROM admin where (name like '%".$keyword."%' or username like '%".$keyword."%') limit ".($pageNum-1)*$numPerPage.",".($numPerPage));
        $arr = array();
        if($row)
            $arr = $row;
        return $arr;
    }

    public function getNumByKeyword($keyword){
        $sql1 = "select count(*) from admin where (name like '%".$keyword."%' or username like '%".$keyword."%')";
        
        $row1 = $this->db->getObjListBySql($sql1);
       
        if($row1)
            return $row1[0][0];
        else
            return 0;
    }
        /**
         * test插入数据库
         */
    public function insert($POST)
    {
        $columns[0] = "name";
        $values[0] = $POST['name'];
        $columns[1] = "username";
        $values[1] = $POST['uname'];
        $columns[2] = "password";
        $values[2] = md5($POST['password']);
        $row = $this->db->insertData("admin",$columns,$values);
        return $row;
    }
        /**
         * 通过id删除
         */
    public function delete($id){
        $row = $this->db->delete("admin","id",$id);
        return $row;
    }
        /**
         * 通过id获取信息
         */
    public function select($id){
        $this->id = $id;
        
        $row = $this->db->getDataByAtr("admin","id",$id);

        // $open=fopen("a.txt","a" );
        // fwrite($open,$row['name']);
        // fclose($open);
        return $row[0];
    }
        /**
         * 通过id获取信息
         */
    public function update($_POST)
    {
        $columns[0] = "interface_name";
        $values[0] = $_POST['interfaceName'];
        $columns[1] = "interface_manager";
        $values[1] = $_POST['interfaceManager'];
        $row = $this->db->updateParamById("admin",$columns,$values,"id",$_POST['id']);
        return $row;
    }
       
}
?>