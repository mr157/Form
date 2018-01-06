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
  <h2>Company Cars Availability </h2>
  <p>Please find the list of available cars below. To view more details or edit the entry use the buttons next to the entry. To add a car, please use the add button. For any help, please see the Office Management.</p>            
 
    <table class="table table-hover table-striped">
      <thead>
        <tr>
            <th>Car</th>
            <th>Number of seats</th>
            <th>Available From</th>
            <th>Return date</th>
            <th>Contact Person</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($cars as $c) { ?>
            <tr>
                <td><?= $c->brand; ?> <?= $c->model; ?></td>
                <td><?= $c->seat; ?></td>
                <td><?= $c->date_1; ?></td>
                <td><?= $c->date_2; ?></td>
                <td><?= $c->first_name; ?> <?= $c->last_name; ?></td>
                <td>
                    <a href="view.php?id=<?= $c->id; ?>" class="btn btn-info">View</a>
                    <a href="edit.php?id=<?= $c->id; ?>" class="btn btn-warning">Edit</a>
                
                    
                </td>
            </tr>
            <?php } ?>
          
          
       
       
      </tbody>
    </table>
    <a href="create.php" class="btn btn-primary">Add a new car</a>
    <button type="button" class="open-DeleteDialog btn btn-secondary float-right" data-toggle="modal" data-target="#delete_modal">Delete entries</button>
    
    <div class="modal fade" id="delete_modal">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header alert alert-danger">
                <h5 class="modal-title">Delete page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Caution! You are about to enter the delete page. This page is for authorized employees only. <br>
                 <strong> Deleted entries can not be restored!</strong> </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">No, I want to go back.</button>
                  <a href="index_delete.php" class="btn btn-secondary" >Yes, go to delete page.</a>


              </div>
            </div>
          </div>
        </div>
    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
