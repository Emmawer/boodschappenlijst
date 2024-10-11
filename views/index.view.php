<?php require "partials/head.php"?>
    <?php require "partials/nav.php" ?>
    <table id="lijstje">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>
        <?php foreach($grocery_list as $grocery){ ?>
            <tr>
                <td><?= $grocery["name"] ?></td>
                <td><?= number_format($grocery["price"],2) ?></td>
                <td><?= $grocery["number"] ?></td>
                <td><?=  number_format($grocery["price"]*$grocery["number"],2)  ?></td>
            </tr>
           <?php } ?>
        <tr>
            <td colspan="3"><b>Totaal</b></td>
            <td><?=number_format($totalPrice,2)?></td>
        </tr>
    </table>
<?php require "partials/footer.php" ?>