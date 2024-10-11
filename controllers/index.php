<?php
$title = "grocery list";
require "functions.php";
/*$grocery_list = [
    ["name"=> "Brood", "number"=> 1, "price"=> "1.00"],
    ["name"=> "Brocoli", "number"=> 2, "price"=>"0.99"],
    ["name"=> "Krentebollen", "number"=> 4, "price"=> "1.20"],
    ["name"=> "Noten", "number"=> 0, "price"=>"2.99"]
];*/

$config = require "config.php";
require "Database.php";
$db = new Database($config);

$grocery_list = $db->query("SELECT `name`, `number`, `price` FROM `groceries_exercise`.`groceries`;");

function addPrice($carry, $item){
    $carry += $item["number"] * $item["price"];
    return $carry;
}
$totalPrice = array_reduce($grocery_list, "addPrice");


require "views/index.view.php";