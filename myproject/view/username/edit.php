<?php 
    require_once("/Applications/MAMP/htdocs/myproject/view/head/head.php");

    require_once("/Applications/MAMP/htdocs/myproject/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
    
?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Editing Register</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input name="id" type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">New Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Update">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancel</a>
    </div>
</form>


<?php 
    require_once("/Applications/MAMP/htdocs/myproject/view/head/footer.php");
?>