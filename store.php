<?php
require_once 'Connect.php';
require_once 'Car.php';

try {
     $car = new Car();

    $car->brand = $formdata['brand'];
    $car->model = $formdata['model'];
    $car->seat = $formdata['seat'];
    $car->equip = implode(", ",$formdata['equip']);
    $car->date_1 =$formdata['date_1'];
    $car->time_1 = $formdata['time_1'];
    $car->date_2 = $formdata['date_2'];
    $car->time_2 = $formdata['time_2'];
    $car->first_name = $formdata['first_name'];
    $car->last_name = $formdata['last_name'];
    $car->email = $formdata['email'];
    $car->image = $formdata['image'];
    $car->comment = $formdata['comment'];
    
    print_r($car);
    $car->save();

    header("Location: index.php");
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>
