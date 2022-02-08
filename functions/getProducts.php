<?php
    include($_SERVER['DOCUMENT_ROOT']."/molla/database.php");
?>

<?php
    // get all products from openDatabase
    $sql = "SELECT * FROM item ";
    // mysqli data type
    $result = $connection->query($sql) or die(mysqli_error($connection));

    // display item on the page by converting to array
    while ($row = $result->fetch_assoc()) {
        include("./components/product.php");
    }
?>