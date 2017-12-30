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
    <link rel="stylesheet" href="css/mycss.css">
    

    
</head>
<body>

<div class="container">
  <h2>Company Cars Available </h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
 
    <table class="table table-condensed">
      <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php $i=0;
          foreach ($cars as $c) { $i= $i+1; ?>
            <tr data-toggle="collapse" data-target=".demo<?= $i; ?>" >
                <td><?= $c->brand; ?></td>
                <td><?= $c->brand; ?></td>
                <td><?= $c->model; ?></td>
                <td><?= $c->first_name; ?></td>
                <td><?= $c->last_name; ?></td>
                <td><?= $c->email; ?></td>
                <td>
                    <a href="view.php?id=<?= $c->id; ?>" class="btn btn-info">View</a>
                    <a href="edit.php?id=<?= $c->id; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?= $c->id; ?>" class="btn btn-danger">Delete</a>
                </td>
             </tr>
                <tr class="hiddenRow">
                    
                <td colspan="1">
                    <div  class="collapse demo<?= $i ?> ">
                        <?= $c->last_name; ?></div>
                    <div class="collapse demo<?= $i ?>">
                        <?= $c->email; ?></div>
                    </td>
                <td><div  class="collapse demo<?= $i ?>">
                    <?= $c->email
              ; ?></div></td> 
                  <td><div  class="collapse demo<?= $i ?>">
                    <?= $c->last_name; ?></div></td> 
            </tr>
            <?php } ?>
       
       
      </tbody>
    </table>
    <a href="create.php" class="btn btn-primary">Add</a>
    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>    

$('.collapse').on('show.bs.collapse', function () {
    $('.collapse.in').collapse('hide');
});
    
</script>  
    
</body>
</html>
