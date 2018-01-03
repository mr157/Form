<?php
require_once 'Connect.php';
require_once 'Car.php';

try {
     $car = new Car();

    $car->brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
    $car->model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
    $car->seat = filter_input(INPUT_POST, 'seat', FILTER_VALIDATE_STRING);
    $car->equip = filter_input(INPUT_POST, 'equip', FILTER_VALIDATE_STRINGs);
    $car->date_1 = filter_input(INPUT_POST, 'date_1', FILTER_SANITIZE_STRING);
    $car->time_1 = filter_input(INPUT_POST, 'time_1', FILTER_SANITIZE_STRING);
    $car->date_2 = filter_input(INPUT_POST, 'date_2', FILTER_SANITIZE_STRING);
    $car->time_2 = filter_input(INPUT_POST, 'time_2', FILTER_SANITIZE_STRING);
    $car->first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $car->last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $car->email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $car->image = filter_input(INPUT_POST, '$imageURL');
    $car->comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

    $car->save();

    header("Location: index.php");
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>
