<?php
    require_once("/Applications/MAMP/htdocs/myproject/view/head/head.php");
    require_once("/Applications/MAMP/htdocs/myproject/controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();

?>

<div class="mb-3">
    <a href="/myproject/view/username/create.php" class="btn btn-primary">Add New User</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php  if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0]  ?></th>
                    <th><?= $row[1]  ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Go</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Edit</a>
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
                                        <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Delete</a>
                                        <!--button type="button" >Delete</button-->
                                    </div>
                                    </div>
                                </div>
                                </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No Registers founded</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>





<?php
    require_once("/Applications/MAMP/htdocs/myproject/view/head/footer.php");

?>