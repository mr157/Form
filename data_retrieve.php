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


 
    $formdata['id'] = $car->id;
    $formdata['brand'] = $car->brand;
    $formdata['model'] = $car->model;
    $formdata['seat'] =$car->seat;
    $formdata['equip'] = explode(", ",$car->equip);
    $formdata['date_1'] = $car->date_1;
    $formdata['time_1'] = $car->time_1 ;
    $formdata['date_2'] = $car->date_2;
    $formdata['time_2'] = $car->time_2 ;
    $formdata['first_name'] = $car->first_name;
    $formdata['last_name'] = $car->last_name ;
    $formdata['email'] = $car->email;
    $formdata['image'] = $car->image;
    $formdata['comment'] = $car->comment;
    

    /*echo"<pre>";
    echo 'Loaded data';
    print_r($formdata);
    echo"</pre>";*/

?>