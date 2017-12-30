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

                <form method="POST" action="store.php" class="card card-block bg-faded">
                    
                    <!-- ---- Brand of the car ------ -->
                    <div class="form-row">
                        <label for="inlineRadioOptionss">What car do you like to insert?</label>

                    </div>
                    <div class="form-group input-group">

                        <span class="has-float-label">
                        <select class="form-control" 
                                id="brand" 
                                name="brand" >
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
                                 class="form-control " 
                                 type="text" 
                                 placeholder="Passat / 5er / Panamera / etc."/ 
                                 value="">
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
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat2" 
                                       value="option1"> 2 seats 
                                    </label>

                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat4" 
                                       value="option2"> 4 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat6" 
                                       value="option3" > 6 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat7" 
                                       value="option3" > 7 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <label class="form-check-label">
                                <input class="form-check-input" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat8" 
                                       value="option4" > 8 seats
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
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="equip"
                                   id="equip1" 
                                   value="option1"> climate control
                          </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="equip"
                                   id="equip2"
                                   value="option2"> cruise control
                          </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="equip"
                                   id="equip3" 
                                   value="option3" > automatic drive
                          </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="equip"
                                   id="equip4" 
                                   value="option4" > roof box
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
                        <label for="inlineRadioOptionss">When is the car available</label>

                    </div>

                    <div class="row">
                             
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input class="form-control"
                                       type="date" 
                                       name="date_1"
                                       id="date_1">
                                <label for="inputDate">Available day </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <label for="inputTime">Available time</label>
                                <input type="time" 
                                       class="form-control" 
                                       name="time_1"
                                       id="time_1"
                                       placeholder="hh:mm">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="date" 
                                       class="form-control"
                                       name="date_2"
                                       id="date_2">
                                <label for="inputDate2">Return day</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <label for="inputTime2">Return time</label>
                                <input type="time" 
                                       class="form-control" 
                                       name="time_2"
                                       id="time_2"
                                       placeholder="hh:mm">
                            </div>
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
                                 value="">
                            
                          <label for="first">First name</label>
                        </span>
                        <label class="has-float-label">
                          <input id="last_name"
                                 name="last_name"
                                 class="form-control" 
                                 type="text" 
                                 placeholder="Surname"
                                 value="">
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
                                 value="">
                          <span>Email</span>
                        </label>
                    </div>

                    <br>
                    
                    <!-- ---- file upload ------ -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="exampleInputFile">Image Upload</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <div class="col-12  col-md-6">
                             <img src="images/secretary-2199013_1920-1080x675.jpg" class="img-fluid rounded"  >
                        </div> 
                        
                    </div>
                    <br>
                    <!-- ---- Comments ------ -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comments:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Place Comment Here ..."></textarea>
                    </div>



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
