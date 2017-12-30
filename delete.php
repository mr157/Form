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

    $car->delete();

    header("Location: index.php");
}
catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?>
