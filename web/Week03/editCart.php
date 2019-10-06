<?php
    session_start();

    $name = $_POST['_name'];
    $price = $_POST['_price'];
    $quantity = $_POST['_qty'];
    $event = $_POST['event'];

    $product = array($name, $price, $quantity);

    if($event == "Update") {
        $_SESSION[$name] = $product;
    } else if($event == "Delete") {
        unset($_SESSION[$name]);
    }

    header('location:viewCart.php');
?>