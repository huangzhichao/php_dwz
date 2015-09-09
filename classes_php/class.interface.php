<?php
class myInterface{
    public $db; 
        /**
         * test类构造函数
         */
    public function __construct()
    {
        //$this->name = $name;
        $this->db = new DB();
    }
        /**
         * 库存显示
         */
    public function show($keyword)
    {
        $sql = " FROM eage_interface where interface_name like '%".$keyword."%' "; 
        return $sql;
    }
        /**
         * test插入数据库
         */
    public function insert($POST)
    {
        $columns[0] = "interface_name";
        $values[0] = $POST['interfaceName'];
        $columns[1] = "interface_manager";
        $values[1] = $POST['interfaceManager'];
        $row = $this->db->insertData("eage_interface",$columns,$values);
        return $row;
    }
        /**
         * 通过id删除
         */
    public function delete($id){
        $row = $this->db->delete("eage_interface","id",$id);
        return $row;
    }
        /**
         * 通过id获取信息
         */
    public function select($id){
        $this->id = $id;
        
        $row = $this->db->getDataByAtr("eage_interface","id",$id);

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
        $row = $this->db->updateParamById("eage_interface",$columns,$values,"id",$_POST['id']);
        return $row;
    }
       
}
?>