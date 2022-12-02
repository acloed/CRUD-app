<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/myproject/config/db.php");
            $con = new db();
            $this->PDO = $con->connection();
        }
        public function insert($name){
            $statement = $this-> PDO-> prepare("INSERT INTO username VALUES(null, :name)");
            $statement-> bindParam(":name",$name);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;

        }
        public function show($id){
            $statement = $this-> PDO-> prepare("SELECT * FROM username where id = :id limit 1");
            $statement->bindParam(":id" , $id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function index(){
            $statement = $this->PDO->prepare("SELECT * FROM username");
            return ($statement-> execute()) ? $statement->fetchAll() : false ;
        }
        public function update($id, $name){
            $statement = $this->PDO->prepare("UPDATE username SET name = :name WHERE id = :id");
            $statement->bindParam(":name" ,$name);
            $statement->bindParam(":id" ,$id);
            return($statement->execute()) ? $id : false;

        }
        public function delete($id){
            $statement = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? true : false;
        }
    }

?>