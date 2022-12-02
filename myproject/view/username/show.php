<?php 
    require_once("/Applications/MAMP/htdocs/myproject/view/head/head.php");

    require_once("/Applications/MAMP/htdocs/myproject/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>

<h2 class="text-center">Record Details</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Back</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Update</a>

        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to delete it?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Once deleted, the record can't be recovered !!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Delete</a>
            <!--button type="button" >Delete</button-->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["name"]?></td>
        </tr>
    </tbody>
</table>


<?php 
    require_once("/Applications/MAMP/htdocs/myproject/view/head/footer.php");
?>