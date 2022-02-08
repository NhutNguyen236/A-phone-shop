
<?php
    $current_user = $_SESSION['login_user'];

    // select all customer info from dbname
    $query = "SELECT * FROM customer WHERE username = '$current_user'";
    $result = mysqli_query($connection, $query);

    // fetch the result
    $row = mysqli_fetch_assoc($result);
?>
