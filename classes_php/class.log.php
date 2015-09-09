<?php
class log{
    public $db; 

    public function __construct(){
        //$this->name = $name;
        $this->db = new DB();
    }

    public function addLog($content,$type){
        $user=$_SESSION['user'];
        $name=$_SESSION['name'];
        $columns[0] = "name";
        $columns[1] = "user";
        $columns[2] = "content";
        $columns[3] = "type";
        $columns[4] = "time";
        $values[0] = $name;
        $values[1] = $user;
        $values[2] = $content;
        $values[3] = $type;
        $values[4] = date("y-m-d h:i:s",time());
        $row = $this->db->insertData("log",$columns,$values);
        return $row;
    }
        /**
         * 库存显示
         */
    public function show($keyword,$pageNum,$numPerPage){
        $row = $this->db->getObjListBySql("select * FROM log where (name like '%".$keyword."%' or username like '%".$keyword."%') limit ".($pageNum-1)*$numPerPage.",".($numPerPage));
        $arr = array();
        if($row)
            $arr = $row;
        return $arr;
    }

    public function getNumByKeyword($keyword){
        $sql1 = "select count(*) from log where (name like '%".$keyword."%' or username like '%".$keyword."%')";
        $row1 = $this->db->getObjListBySql($sql1);   
        if($row1)
            return $row1[0][0];
        else
            return 0;
    }
        /**
         * test插入数据库
         */
    public function insert($POST){
        $columns[0] = "name";
        $values[0] = $POST['name'];
        $columns[1] = "username";
        $values[1] = $POST['uname'];
        $columns[2] = "password";
        $values[2] = md5($POST['password']);
        $row = $this->db->insertData("log",$columns,$values);
        return $row;
    }
        /**
         * 通过id删除
         */
    public function delete($id){
        $row = $this->db->delete("log","id",$id);
        return $row;
    }
        /**
         * 通过id获取信息
         */
    public function select($id){
        $this->id = $id;
        $row = $this->db->getDataByAtr("log","id",$id);
        return $row[0];
    }
}
?>