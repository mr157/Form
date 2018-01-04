<?php
require_once 'Connect.php';
require_once 'Car.php';

try {
    $cars = Car::all();
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
  <h2>Company Cars Available </h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
 
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th>#</th>
            <th>Car</th>
            <th>Available From</th>
            <th>Return date</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($cars as $c) { ?>
            <tr>
                <td><?= $c->id; ?></td>
                <td><?= $c->brand; ?> <?= $c->model; ?></td>
                <td><?= $c->date_1; ?></td>
                <td><?= $c->date_2; ?></td>
                <td><?= $c->first_name; ?> <?= $c->last_name; ?></td>
                <td>
                    <a href="view.php?id=<?= $c->id; ?>" class="btn btn-info">View</a>
                    <a href="edit.php?id=<?= $c->id; ?>" class="btn btn-warning">Edit</a>
                    <button type="button" class="open-DeleteDialog btn btn-danger" data-id="<?= $c->id; ?>" data-toggle="modal" data-target="#delete_modal">Delete</button>
                    
                    <div class="modal fade" id="delete_modal">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Delete entry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Caution! You are about to to delete the entry. <br>
                             <strong> Do you really want to continue?</strong> </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No, I want to go back.</button>
                              
                            <button type= "button" href="delete.php?id=<?= $c->id; ?>" class="btn btn-secondary">Yes, delete entry!</button>
                              
                          </div>
                        </div>
                      </div>
                    </div>
                </td>
            </tr>
            <?php } ?>
          
          
       
       
      </tbody>
    </table>
    <a href="create.php" class="btn btn-primary">Add</a>
    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/myJS.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
