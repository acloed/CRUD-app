<?php

    class usernameController {
        private $model;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/myproject/model/usernameModel.php");
            $this->model = new usernameModel();

        }
        public function save($name){
            $id = $this->model->insert($name);
            return ($id!=false) ? header("Location:show.php?id=".$id): header("Location:create.php") ;
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model-> index()) ? $this->model->index() : false;
        }
        public function update($id, $name){
            return ($this->model->update($id,$name) != false) ? header("Location:show.php?id=" . $id) : header("Location:index.php")  ;

        }
        public function delete ($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=.$id") ;
        }
    }
?>