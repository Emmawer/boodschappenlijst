<?php require "partials/head.php"?>
    <?php require "partials/nav.php" ?>
    <form method="POST">
        Product<input type="text" id="name" name="name" value= <?=  $_POST["name"] ?? ""; ?> ><br>
        <p><?=  $errors["error_name"]  ?? "" ; ?><br></p>
        Prijs<input type="text" id="price" name="price" value= <?=   $_POST["price"] ?? ""; ?> ><br>
        <p><?=  $errors["error_price"]  ?? "" ; ?><br></p>
        Aantal<input type="text" id="number" name="number" value= <?=   $_POST["number"] ?? ""; ?> ><br>
        <p><?=  $errors["error_number"]  ?? "" ; ?><br></p>
        <input type="submit" value="Submit">
    </form>
<?php require "partials/footer.php" ?>