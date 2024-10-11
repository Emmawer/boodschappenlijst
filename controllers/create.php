<?php
$title = "create";
$errors = [];

require "Validator.php";
$config = require "config.php";
require "Database.php";

$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = ucfirst(htmlspecialchars($_POST["name"]));
    $number = htmlspecialchars($_POST["number"]);
    $price = htmlspecialchars($_POST["price"]);
    
    if (!Validator::string($name,1,12)){
        $errors["error_name"]="voer een geldige naam in!";
    }

    if (!Validator::integer($number,1)){
        $errors["error_number"]="voer een geldige hoeveelheid in!";
    }

    if (!Validator::decimal($price)){
        $errors["error_price"]="voer een geldige prijs in!";
    }
    
    if (empty($errors)){
        $db->query("INSERT INTO `groceries_exercise`.`groceries` (name, number, price) VALUES (:name, :number, :price);", [
          "name"=>$name,
            "number"=>$number,
            "price"=>$price
        ]);
        header("Location: /");
        exit();
    }

}

require "functions.php";
require "views/create.view.php";