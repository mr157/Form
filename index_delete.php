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
  <h2>Company Cars - delete page </h2>
  <p>This page is for authorized employees only. Please note that every entry will be delete immediately after pressing the delete button. Deleted entries can not be restored!</p>            
 
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
                    <a href="delete.php?id=<?= $c->id; ?>" class="btn btn-danger">Delete</a> 
                    
                </td>
            </tr>
            <?php } ?>
          
          
       
       
      </tbody>
    </table>
    <a href="index.php" class="btn btn-primary">Go Back</a>
    
    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
