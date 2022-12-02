<?php 
    require_once("/Applications/MAMP/htdocs/myproject/controller/usernameController.php");
    $obj =new usernameController();
    $obj->update($_POST['id'],$_POST['name']);

?>