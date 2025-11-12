<?php
require_once(__DIR__ . "/../models/Car.php");
require_once(__DIR__ . "/../connection/connection.php");
require_once(__DIR__ . "/../services/ResponseService.php");



  function getCarByID(){
    global $connection;

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $car = Car::find($connection, $_GET["id"]);
    echo ResponseService::response(200, $car->toArray());
    return;
    }
      function getCarByID(){
    global $connection;
    echo ResponseService::response(200, $car->toArray());
    return;
    }
}
// getCars();
function createcar(){
    global $connection;
    Car::create($connection, [

    'name' => 'mami',
    'color' => 'black',
    'year' => '1'
]);
}
createcar();
function updatecar(){
       global $connection;
car::update($connection, 6, [
    'name' => 'Mercedes',
    'color' => 'Black',
    'year' => '2021115'
]);}
// updatecar();
function deletecar(){
       global $connection;
Car::delete($connection, 7);
}
// deletecar();

?>