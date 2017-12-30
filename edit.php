<?php
require_once 'Connect.php';
require_once 'Car.php';

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($id === FALSE || $id === NULL) {
        throw new Exception("Invalid entry id");
    }
    
    $car = Car::find($id);
    if ($car === FALSE) {
        throw new Exception("Car not found");
    }
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css" />
</head>

<body>
    <br>

    <div class="container">

        <div class="row">
            <div class="col-md-8">

                <form method="POST" action="update.php" class="card card-block bg-faded">
                    
                     <!-- ---- Hidden ID ------ -->
                    
                    <input type="hidden" name="id" value="<?= $car->id ?>">

                    <!-- ---- Brand of the car ------ -->
                    
                    <div class="form-row">
                        <label for="inlineRadioOptionss">What car do you like to insert?</label>

                    </div>
                    <div class="form-group input-group">

                        <span class="has-float-label">
                        <select class="form-control" id="brand" name="brand" >
                          <option value="BMW">BMW</option>
                          <option value="Mercedes">Mercedes</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                          <label for="brand">Brand</label>
                        </span>
                        <label class="has-float-label">
                          <input 
                                 id="model"
                                 name="model"
                                 class="form-control border border-top-0 border border-right-0 border border-left-0" 
                                 type="text" 
                                 placeholder="Passat / 5er / Panamera / etc."/ 
                                 value="<?= $car->model ?>">
                          <span>Model</span>
                        </label>
                    </div>



                    <!-- ---- Personal details ------ -->
                    <div class="form-row">
                        <label for="Name">How can your college contact you?</label>

                    </div>

                    <div class="form-group input-group">
                        <span class="has-float-label">
                          <input id="first_name" 
                                 name="first_name"
                                 class="form-control" 
                                 type="text" 
                                 placeholder="First name"
                                 value="<?= $car->first_name ?>">
                            
                          <label for="first">First name</label>
                        </span>
                        <label class="has-float-label">
                          <input id="last_name" 
                                 name="last_name"
                                 class="form-control" 
                                 type="text" 
                                 placeholder="Surname"
                                 value="<?= $car->last_name ?>">
                          <span>Surname</span>
                        </label>
                    </div>


                    <!-- ---- email ------ -->
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <label class="has-float-label">
                          <input 
                                 class="form-control" 
                                 id="email" 
                                 name="email"
                                 type="email" 
                                 placeholder="email@example.com" 
                                 value="<?= $car->email ?>">
                          <span>Email</span>
                        </label>
                    </div>

                    <br>



                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
    <br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
