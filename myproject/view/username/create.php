<?php 
    require_once("/Applications/MAMP/htdocs/myproject/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="text" name="name" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="index.php">Cancel</a>
    </form>


<?php 
    require_once("/Applications/MAMP/htdocs/myproject/view/head/footer.php");
?>