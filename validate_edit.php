<?php
/*echo '<pre>';
echo 'POST array';
print_r($_POST);
echo '</pre>';
echo '<pre>';
print_r($_FILES);
echo '</pre>';*/

$errors = array();
$formdata = array();

//-------------------------------------------------------------------------------------------------
// sanitize 'id'
//-------------------------------------------------------------------------------------------------

$formdata['id'] = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    


//-------------------------------------------------------------------------------------------------
// sanitize and validate 'brand'
//-------------------------------------------------------------------------------------------------
$formdata['brand'] = filter_input(INPUT_POST, 
                                        'brand', 
                                        FILTER_SANITIZE_STRING
                                       );

if ($formdata['brand'] === FALSE) {
    $errors['brand'] = "Illegal brand.";
}
else if ($formdata['brand'] === NULL ) {
    $errors['brand'] = "Brand is a required field.";   
}
else {
    $brand_options = array("BMW", "Mercedes", "Volkswagen", "Porsche", "Audi");
    if (!in_array($formdata['brand'], $brand_options)) {
        $errors['brand'] = "Invalid  brand.";
    }
}


//-------------------------------------------------------------------------------------------------
// sanitize and validate 'model'
//-------------------------------------------------------------------------------------------------
$formdata['model'] = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
if ($formdata['model'] === FALSE || $formdata['model'] === NULL) {
    $errors['model'] = "Illegal modle name.";
}
else {
    if ($formdata['model'] === "") {
        $errors['model'] = "Model is a required field.";
    }
    else if (strlen($formdata['model']) < 3) {
        $errors['model'] = "Model needs to be at least 3 characters long";
    }
}


//-------------------------------------------------------------------------------------------------
// sanitize and validate 'seat'
//-------------------------------------------------------------------------------------------------
$formdata['seat'] = filter_input(INPUT_POST, 
                                        'seat', 
                                        FILTER_SANITIZE_STRING
                                       );

if ($formdata['seat'] === FALSE) {
    $errors['seat'] = "Illegal seat option.";
}
else if ($formdata['seat'] === NULL) {
    $errors['seat'] = "Seat is a required field.";
}
else {
    $seat_options = array("2 seats", "4 seats", "6 seats", "7 seats" , "8 seats");
    if (!in_array($formdata['seat'], $seat_options)) {
        $errors['seat'] = "Invalid seat option.";
    }
}



//-------------------------------------------------------------------------------------------------
// sanitize and validate 'equip'
//-------------------------------------------------------------------------------------------------
$formdata['equip'] = filter_input(INPUT_POST, 
                                        'equip', 
                                        FILTER_SANITIZE_STRING,
                                        FILTER_REQUIRE_ARRAY
                                       );

if ($formdata['equip'] === FALSE) {
    $errors['equip'] = "Illegal equipment type.";
}
else {
    $equip_options = array("climate control", "cruise control", "automatic drive", "roof box");
    foreach ($formdata['equip'] as $equip ){
        if (!in_array($equip, $equip_options)) {
        $errors['equip'] = "Invalid equipment type.";
        }
      
    }
}



//-------------------------------------------------------------------------------------------------
// sanitize and validate 'date_1'
//-------------------------------------------------------------------------------------------------
$formdata['date_1'] = filter_input(INPUT_POST, 
                                        'date_1', 
                                        FILTER_SANITIZE_STRING
                                       );

if ($formdata['date_1'] === FALSE || $formdata['date_1'] === NULL) {
    $errors['date_1'] = "Illegal date.";
}
else {
    if ($formdata['date_1'] === "") {
        $errors['date_1'] = "Available date is a required field.";
    }
    else {
        $date_regexp = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";
        $options = array(
            "regexp" => $date_regexp
        );
        
        $valid_date = filter_var($formdata['date_1'], 
                                 FILTER_VALIDATE_REGEXP, 
                                 array(
                                     "options" => $options
                                 )
                                );
        if ($valid_date === FALSE) {
            $errors['date_1'] = "Available date is not valid.";
        }
    }
}

//-------------------------------------------------------------------------------------------------
// sanitize and validate 'time_1'
//-------------------------------------------------------------------------------------------------
$formdata['time_1'] = filter_input(INPUT_POST, 
                                        'time_1', 
                                        FILTER_SANITIZE_STRING
                                       );

if ($formdata['time_1'] === FALSE || $formdata['time_1'] === NULL) {
    $errors['time_1'] = "Illegal time.";
}
else {
    if ($formdata['time_1'] === "") {
        $errors['time_1'] = "Available time is a required field.";
    }
    else {
        $time_regexp = "/^[0-9]{2}:[0-9]{2}$/";
        $options = array(
            "regexp" => $time_regexp
        );
        
        $valid_time = filter_var($formdata['time_1'], 
                                 FILTER_VALIDATE_REGEXP, 
                                 array(
                                     "options" => $options
                                 )
                                );
        if ($valid_time === FALSE) {
            $errors['time_1'] = "Available time is not valid. It must have the format hh:mm.";
        }
    }
}




//-------------------------------------------------------------------------------------------------
// sanitize and validate 'date_2'
//-------------------------------------------------------------------------------------------------
$formdata['date_2'] = filter_input(INPUT_POST, 
                                        'date_2', 
                                        FILTER_SANITIZE_STRING
                                       );

if ($formdata['date_2'] === FALSE || $formdata['date_2'] === NULL) {
    $errors['date_2'] = "Illegal date.";
}
else {
    if ($formdata['date_2'] === "") {
        $errors['date_2'] = "Return date is a required field.";
    }
    else {
        $date_regexp = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";
        $options = array(
            "regexp" => $date_regexp
        );
        
        $valid_date = filter_var($formdata['date_2'], 
                                 FILTER_VALIDATE_REGEXP, 
                                 array(
                                     "options" => $options
                                 )
                                );
        if ($valid_date === FALSE) {
            $errors['date_2'] = "Return date is not valid.";
        }
    }
}

//-------------------------------------------------------------------------------------------------
// sanitize and validate 'time_2'
//-------------------------------------------------------------------------------------------------
$formdata['time_2'] = filter_input(INPUT_POST, 
                                        'time_2', 
                                        FILTER_SANITIZE_STRING
                                       );

if ($formdata['time_2'] === FALSE || $formdata['time_2'] === NULL) {
    $errors['time_2'] = "Illegal time.";
}
else {
    if ($formdata['time_2'] === "") {
        $errors['time_2'] = "Return time is a required field.";
    }
    else {
        $time_regexp = "/^[0-9]{2}:[0-9]{2}$/";
        $options = array(
            "regexp" => $time_regexp
        );
        
        $valid_time = filter_var($formdata['time_2'], 
                                 FILTER_VALIDATE_REGEXP, 
                                 array(
                                     "options" => $options
                                 )
                                );
        if ($valid_time === FALSE) {
            $errors['time_2'] = "Return time is not valid. It must have the format hh:mm.";
        }
    }
}



//-------------------------------------------------------------------------------------------------
// sanitize and validate 'first_name'
//-------------------------------------------------------------------------------------------------
$formdata['first_name'] = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
if ($formdata['first_name'] === FALSE || $formdata['first_name'] === NULL) {
    $errors['first_name'] = "Illegal name.";
}
else {
    if ($formdata['first_name'] === "") {
        $errors['first_name'] = "First name is a required field.";
    
    }
}

//-------------------------------------------------------------------------------------------------
// sanitize and validate 'last_name'
//-------------------------------------------------------------------------------------------------
$formdata['last_name'] = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
if ($formdata['last_name'] === FALSE || $formdata['last_name'] === NULL) {
    $errors['last_name'] = "Illegal name.";
}
else {
    if ($formdata['last_name'] === "") {
        $errors['last_name'] = "Surname is a required field.";
    
    }
}


//-------------------------------------------------------------------------------------------------
// sanitize and validate 'email'
//-------------------------------------------------------------------------------------------------
$formdata['email'] = filter_input(INPUT_POST, 
                                        'email', 
                                        FILTER_SANITIZE_EMAIL
                                       );

if ($formdata['email'] === FALSE || $formdata['email'] === NULL) {
    $errors['email'] = "Illegal email.";
}
else if ($formdata['email'] === "") {
        $errors['email'] = "Email is a required field.";
}
else {
    if ($formdata['email'] !== "") {
        $valid_email = filter_var($formdata['email'], FILTER_VALIDATE_EMAIL);
        if ($valid_email === FALSE) {
            $errors['email'] = "Email address is not valid.";
        }
    }
}


//-------------------------------------------------------------------------------------------------
// validate 'image'
//-------------------------------------------------------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    $errors['image'] = 'Invalid request.';
}

else if ($_FILES['image']['error'] !== 0) {
    $errors['image'] = 'File upload error';
}
else if (!is_uploaded_file($_FILES["image"]["tmp_name"])) {
    $errors['image'] = "Image filename is not an uploaded file.";
}
else {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    
    if (file_exists($target_file)) {
        $errors['image'] = "Sorry, file already exists.";
    }
    else if ($_FILES["image"]["size"] > 10000000) {
        $errors['image'] = "Sorry, your file is too large.";
    }
    else if ($imageFileType != "jpg" &&
            $imageFileType != "png" &&
            $imageFileType != "jpeg" &&
            $imageFileType != "gif")
    {
        $errors['image'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
    else if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $errors['image'] = "Sorry, there was an error moving your uploaded file.";
    }
    else {
        //$new_path = $target_file.'.'.$imageFileType;
        
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        $formdata['image'] = $target_file;
    }
}


//-------------------------------------------------------------------------------------------------
// sanitize and validate 'comment'
//-------------------------------------------------------------------------------------------------


$formdata['comment'] = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
if ($formdata['comment'] === FALSE)  {
    $errors['comment'] = "Illegal comment.";
}



//-------------------------------------------------------------------------------------------------
// Error handling
//-------------------------------------------------------------------------------------------------

if (empty($errors)) {
    
   require 'update.php';
    //echo '<img src="' . $formdata['image'] . '" />';
    /*echo"<pre>";
    echo 'after validate';
    print_r($formdata);
    echo"</pre>";*/
        
    
}
else 
    
    $errors['top_massage'] = '<div class="alert alert-danger" role="alert">
                      <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>';
    
    {
    if(key_exists('image',$formdata) && 
    file_exists($formdata['image'])){
    unlink($formdata['image']);
    }
    require 'edit_2.php';

}
?>