<?php
    require_once("/Applications/MAMP/htdocs/myproject/controller/usernameController.php");
    $obj =new usernameController();
    $obj-> save($_POST['name']);

?>