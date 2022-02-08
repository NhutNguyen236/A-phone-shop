<?php
    /**
     * GET ALL CARTS FROM CURRENT LOGGED IN USER
     */
    include($_SERVER['DOCUMENT_ROOT']."/store/ui/controller/getCustomer.php");

    // current logged in user
    $current_userID = $row['customer_id'];

    // get all products from openDatabase
    $sql = "SELECT * FROM cart INNER JOIN item ON item.item_id = cart.id_item WHERE cart.customer_id = '$current_userID'";
    $result = $connection->query($sql) or die(mysqli_error($connection));
    $erors = [];
?>