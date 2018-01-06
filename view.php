<?php
require_once 'Connect.php';
require_once 'Car.php';

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($id === FALSE || $id === NULL) {
        throw new Exception("Invalid car id");
    }

    $car = Car::find($id);
    if ($car === FALSE) {
        throw new Exception("Entry not found");
    }
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Car</title>
           <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
        
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Car details</h1>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Brand:</td>
                                    <td><?= $car->brand; ?></td>
                                </tr>
                                <tr>
                                    <td>Model:</td>
                                    <td><?= $car->model; ?></td>
                                </tr>
                                <tr>
                                    <td>Number of seats:</td>
                                    <td><?= $car->seat; ?></td>
                                </tr>
                                <tr>
                                    <td>Additional equipment:</td>
                                    <td><?= $car->equip; ?></td>
                                </tr>                                
                                <tr>
                                    <td>Date available:</td>
                                    <td><?= $car->date_1; ?></td>
                                </tr>
                                <tr>
                                    <td>Time available</td>
                                    <td><?= $car->time_1; ?></td>
                                </tr>
                                <tr>
                                    <td>Return date:</td>
                                    <td><?= $car->date_2; ?></td>
                                </tr>
                                <tr>
                                    <td>Return time:</td>
                                    <td><?= $car->time_2; ?></td>
                                </tr>
                                <tr>
                                    <td>Contact Person:</td>
                                    <td><?= $car->first_name; ?> <?= $car->last_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?= $car->email; ?></td>
                                </tr>
                                <tr>
                                    <td>Image of the car</td>
                                    <td><?= $car->image; ?></td>
                                </tr>
                                <tr>
                                    <td>Comments:</td>
                                    <td><?= $car->comment; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                        <a href="edit.php?id=<?= $car->id; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $car->id; ?>" class="btn btn-danger">Delete</a>
                  
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
