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

                <form method="POST" action="update.php" class="card card-block bg-faded" enctype="multipart/form-data">
                     <!-- ---- Hidden ID ------ -->
                    
                    <input type="hidden" name="id" value="<?= $car->id ?>">
                    
                    <!-- ---- Brand of the car ------ -->
                    <div class="form-row">
                        <label for="inlineRadioOptionss">What car do you like to insert?</label>

                    </div>
                    <div class="form-group input-group">

                        <span class="has-float-label">
                        <select class="form-control" 
                                id="brand" 
                                name="brand" 
                                value="<?= $car->brand ?>">
                          <option value="none">Please select ...</option>
                          <option value="BMW">BMW</option>
                          <option value="Mercedes">Mercedes</option>
                          <option value="Volkswagen">Volkswagen</option>
                          <option value="Porsche">Porsche</option>
                          <option value="Audi">Audi</option>
                          
                        </select>
                          <label for="brand">Brand</label>
                        </span>
                        <label class="has-float-label">
                          <input 
                                 id="model" 
                                 name="model"
                                 class="form-control " 
                                 type="text" 
                                 placeholder="Passat / 5er / Panamera / etc."
                                 value="<?= $car->model ?>">
                          <span>Model</span>
                        </label>
                    </div>


                    <!-- ---- Number of seats (Radio Button) ------ -->
                    
                    <div class="row">
                        
                        <div class="col-12 col-md-6">

                            <div class="form-row">
                                <label for="inlineRadioOptionss">How many seats does the car have?</label>

                            </div>
                            <div class="form-row">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat2" 
                                       value="2 seats"> 2 seats 
                                    </label>

                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control"  
                                       type="radio" 
                                       name="seat" 
                                       id="seat4" 
                                       value="4 seats"> 4 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat6" 
                                       value="6 seats" > 6 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control"  
                                       type="radio" 
                                       name="seat" 
                                       id="seat7" 
                                       value="7 seats" > 7 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <label class="form-check-label">
                                <input class="event-form-control" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat8" 
                                       value="8 seats" > 8 seats
                                </label>
                                </div>
                            </div>
                        </div>    

                    <!-- ---- special equipment ------ -->
                            
                    <div class="col-12 col-md-6">        
                        <div class="form-row">
                            <label>Does your car have special equipment? </label>

                        </div>
                        <div class="form-row">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                            <input class="event-form-control"  
                                   type="checkbox" 
                                   name="equip[]"
                                   id="climate-control" 
                                   value="climate control"> climate control
                          </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                            <input class="event-form-control" 
                                   type="checkbox" 
                                   name="equip[]"
                                   id="cruise-control"
                                   value="cuise control"> cruise control
                          </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                            <input class="event-form-control" 
                                   type="checkbox" 
                                   name="equip[]"
                                   id="automatic-drive" 
                                   value="automatic drive" > automatic drive
                          </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                            <input class="event-form-control" 
                                   type="checkbox" 
                                   name="equip[]"
                                   id="roof-box" 
                                   value="roof box" > roof box
                          </label>
                            </div>
                        </div>
                    </div>
                </div>        
                        
                    <br>

<!--  

                    <div class="container">
                        <div class='col-md-5'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker6'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-5'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker7'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker6').datetimepicker();
                            $('#datetimepicker7').datetimepicker({
                                useCurrent: false //Important! See issue #1075
                            });
                            $("#datetimepicker6").on("dp.change", function (e) {
                                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                            });
                            $("#datetimepicker7").on("dp.change", function (e) {
                                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                            });
                        });
                    </script>
--> 
                   
                    
                    <!-- ---- Datepicker ------ -->                    

                     <div class="form-row">
                        <label for="inlineRadioOptionss">When is the car available?</label>

                    </div>

                    <div class="row">
                             
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input class="form-control"
                                       type="date" 
                                       name="date_1"
                                       id="date_1"
                                       placeholder="dd-mm-yyyy"
                                       value="<?= $car->date_1 ?>">
                                <label for="inputDate">from date </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                              <label class="has-float-label">
                              <input 
                                     id="time_1" 
                                     name="time_1"
                                     class="form-control " 
                                     type="text" 
                                     placeholder="hh:mm"
                                     value="<?= $car->time_1 ?>">
                                    <span>Time available</span>
                            </label>
                        </div>
                    </div>
<br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="date" 
                                       class="form-control"
                                       name="date_2"
                                       id="date_2"
                                       value="<?= $car->date_2 ?>">
                                <label for="inputDate2">Return day</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                           
                                <label class="has-float-label">
                                    <input 
                                     id="time_2" 
                                     name="time_2"
                                     class="form-control " 
                                     type="text" 
                                     placeholder="hh:mm"
                                     value="<?= $car->time_2 ?>">
                                    <span>Time return</span>
                                </label>
                        
                        </div>
                    </div>
                    <br>
                    
                    
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
                    
                    <!-- ---- file upload ------ -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="image">Image Upload</label>
                            <input type="file" 
                                   class="form-control-file" 
                                   id="image"
                                   name="image"
                                   aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <div class="col-12  col-md-6">
                             <img src="images/secretary-2199013_1920-1080x675.jpg" class="img-fluid rounded"  >
                        </div> 
                        
                    </div>
                    <br>
                    <!-- ---- Comments ------ -->
                    <div class="form-group has-float-label">
                        <textarea 
                            class="form-control" 
                            id="comment"
                            name="comment"
                            rows="4" 
                            placeholder="Place Comment Here ..."
                            ><?= $car->comment ?></textarea>
                        <label for="comment">Comments</label>
                    </div>



                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>

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
