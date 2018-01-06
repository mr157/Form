<?php


   /* echo"<pre>";
    echo 'passed to edit';
    print_r($formdata);
    echo"</pre>";*/

function old($index) {
    global $formdata;
    
    if (isset($formdata) && 
        is_array($formdata) && 
        key_exists($index, $formdata)) {
        echo $formdata[$index];
    }
}

function checked($index, $value) {
    global $formdata;
    
    if (isset($formdata) && 
        is_array($formdata) && 
        key_exists($index, $formdata))
        {
            if (!is_array($formdata[$index]) && $formdata[$index] === $value){ // radio buttons
                echo 'checked';
            }
            else if (is_array($formdata[$index]) && in_array($value,$formdata[$index])) { // checkboxes
                echo 'checked';
            }
        }
     
}

function selected($index, $value) {
    global $formdata;
    
    if (isset($formdata) && 
        is_array($formdata) && 
        key_exists($index, $formdata))
    {
            if (!is_array($formdata[$index]) && $formdata[$index] === $value){ // radio buttons
                echo 'selected';
            }
            else if (is_array($formdata[$index]) && in_array($value,$formdata[$index])) { // checkboxes
                echo 'selected';
            }
        }
}

function error($index) {
    global $errors;
    
    if (isset($errors) && is_array($errors) && key_exists($index, $errors)) {
        echo $errors[$index];
    }
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
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css" />
</head>

<body>
    <br>

    <div class="container">

        <div class="row">
            <div class="col-md-8">

                <form method="POST" action="validate_edit.php" class="card card-block bg-faded" enctype="multipart/form-data">
                   
                    <input type="hidden" name="id" value="<?php old("id"); ?>">
                    
                    <?php error('top_massage'); ?>
                    <h2>Company Cars - Create a new entry </h2>
                    <p class="float-right"> * required field</p>
                    


                    <!-- ---- Brand of the car ------ -->
                    <div class="form-row">
                        <label for="inlineRadioOptionss">What car do you like to insert?</label>

                    </div>
                    <div id="brand-error" class="error">
                            <?php error('brand'); ?>
                    </div>
                    <div id="model-error" class="error">
                            <?php error('model'); ?>
                    </div>
                    <div class="form-group input-group">

                        <span class="has-float-label">
                        <select class="form-control" 
                                id="brand" 
                                name="brand" 
                                >
                          <option value="none">Please select ...</option>
                          <option value="BMW" <?php selected('brand','BMW');?>>BMW</option>
                          <option value="Mercedes" <?php selected('brand','Mercedes');?>>Mercedes</option>
                          <option value="Volkswagen" <?php selected('brand','Volkswagen');?>>Volkswagen</option>
                          <option value="Porsche" <?php selected('brand','Porsche');?>>Porsche</option>
                          <option value="Audi" <?php selected('brand','Audi');?>>Audi</option>
                        </select>
                          <label for="brand">Brand*</label>
                        </span>
                        <label class="has-float-label">
                          <input 
                                 id="model" 
                                 name="model"
                                 class="form-control " 
                                 type="text" 
                                 placeholder="Passat / 5er / Panamera / etc."
                                  value="<?php old("model"); ?>">
                          <span>Model*</span>
                        </label>
                    </div>
                    <br>


                    <!-- ---- Number of seats (Radio Button) ------ -->
                    
                    <div class="row">
                        
                        <div class="col-12 col-md-6">
                            
                            <div class="form-row">
                                <label for="inlineRadioOptionss">How many seats does the car have?*</label>
                                <div id="seat-error" class="error">
                                <?php error('seat'); ?>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat2" 
                                       value="2 seats"
                                       <?php checked('seat', '2 seats'); ?>> 2 seats 
                                    </label>

                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control"  
                                       type="radio" 
                                       name="seat" 
                                       id="seat4" 
                                       value="4 seats"
                                       <?php checked('seat', '4 seats'); ?>> 4 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat6" 
                                       value="6 seats" 
                                       <?php checked('seat', '6 seats'); ?>> 6 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                <input class="event-form-control"  
                                       type="radio" 
                                       name="seat" 
                                       id="seat7" 
                                       value="7 seats" 
                                       <?php checked('seat', '7 seats'); ?>> 7 seats
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <label class="form-check-label">
                                <input class="event-form-control" 
                                       type="radio" 
                                       name="seat" 
                                       id="seat8" 
                                       value="8 seats" 
                                       <?php checked('seat', '8 seats'); ?>> 8 seats
                                </label>
                                </div>

                            </div>
                        </div>    

                    <!-- ---- special equipment ------ -->
                            
                    <div class="col-12 col-md-6">        
                        <div class="form-row">
                            <label>Does your car have special equipment? </label>
                             <div id="equip-error" class="error">
                            <?php error('equip'); ?>
                            </div> 

                        </div>
                        <div class="form-row">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                            <input class="event-form-control"  
                                   type="checkbox" 
                                   name="equip[]"
                                   id="climate-control" 
                                   value="climate control"
                                   <?php checked('equip', 'climate control'); ?>> climate control
                          </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                            <input class="event-form-control" 
                                   type="checkbox" 
                                   name="equip[]"
                                   id="cruise-control"
                                   value="cruise control" <?php checked('equip', 'cruise control'); ?>> cruise control
                          </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                            <input class="event-form-control" 
                                   type="checkbox" 
                                   name="equip[]"
                                   id="automatic-drive" 
                                   value="automatic drive" 
                                   <?php checked('equip', 'automatic drive'); ?>> automatic drive
                          </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                            <input class="event-form-control" 
                                   type="checkbox" 
                                   name="equip[]"
                                   id="roof-box" 
                                   value="roof box" 
                                   <?php checked('equip', 'roof box'); ?>> roof box
                          </label>
                            </div>
  
                        </div>
                    </div>
                </div>        
                        
                    <br>


                   
                    
                    <!-- ---- Datepicker ------ -->                    

                     <div class="form-row">
                        <label for="inlineRadioOptionss">When is the car available?*</label>

                    </div>
                      <div class="row">
                        <div class="col-md-6">
                         <div id="date_1-error" class="error">
                                <?php error('date_1'); ?>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div id="time_1-error" class="error">
                                <?php error('time_1'); ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                             
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input class="form-control"
                                       type="date" 
                                       name="date_1"
                                       id="date_1"
                                       placeholder="dd-mm-yyyy"
                                       value="<?php old('date_1'); ?>">
                                <label for="inputDate">Available date* </label>
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
                                     value="<?php old('time_1'); ?>">
                                    <span>Available time*</span>
                            </label>
                            
                        </div>
                    </div>
<br>
                    <div class="row">
                        <div class="col-md-6">
                         <div id="date_2-error" class="error">
                                <?php error('date_2'); ?>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div id="time_2-error" class="error">
                                <?php error('time_2'); ?>
                            </div>
                        </div>

                    </div> 
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="date" 
                                       class="form-control"
                                       name="date_2"
                                       id="date_2"
                                       value="<?php old('date_2'); ?>">
                                <label for="inputDate2">Return day*</label>
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
                                           value="<?php old('time_2'); ?>">
                                    <span>Time return*</span>
                                </label>

                        </div>
                    </div>
                    <br>
                    
                    
                    <!-- ---- Personal details ------ -->
                    <div class="form-row">
                        <label for="Name">How can your college contact you?*</label>
                       <div id="first_name-error" class="error">
                        <?php error("first_name"); ?>
                        </div>
                        <div id="last_name-error" class="error">
                        <?php error("last_name"); ?>
                        </div>

                    </div>

                    <div class="form-group input-group">
                        <span class="has-float-label">
                          <input id="first_name" 
                                 name="first_name"
                                 class="form-control" 
                                 type="text" 
                                 placeholder="First name"
                                 value="<?php old("first_name"); ?>">
                            
                          <label for="first">First name*</label>
                        </span>
                        <label class="has-float-label">
                          <input id="last_name"
                                 name="last_name"
                                 class="form-control" 
                                 type="text" 
                                 placeholder="Surname"
                                 value="<?php old("last_name"); ?>">
                          <span>Surname*</span>
                        </label>
                    </div>
                   

                    <!-- ---- email ------ -->
                    <div id="email-error" class="error">
                                <?php error('email'); ?>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <label class="has-float-label">
                          <input 
                                 class="form-control" 
                                 id="email" 
                                 name="email"
                                 type="email" 
                                 placeholder="email@example.com" 
                                 value="<?php old('email'); ?>">
                          <span>Email*</span>
                        </label>
                    </div>
                    <br>
                    
                    <!-- ---- file upload ------ -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="image">Update the Image of your car.</label>
                        <div id="image-error" class="error"><?php error('image'); ?></div>
                            <input type="file" 
                                   class="event-form-control" 
                                   id="image" 
                                   name="image" />
                            <small id="fileHelp" class="form-text text-muted">Please update the image of you car if necessary.</small>
                        </div>
                        
                        <div class="col-12  col-md-6">
                             <img src="images/secretary-2199013_1920-1080x675.jpg" class="img-fluid rounded"  >
                        </div> 
                        
                    </div>
                    <br>
                    
            
                    
                    <!-- ---- Comments ------ -->
                    <div class="form-group has-float-label">
                     <div id="comment-error" class="error"><?php error('comment'); ?></div>
                        <textarea 
                            class="form-control" 
                            id="comment"
                            name="comment"
                            rows="4" 
                            placeholder="Place Comment Here ..."
                            ><?php old('comment'); ?></textarea>
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
