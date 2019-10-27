<?php

if($_POST['action'] == 'create') {
    require_once('dbConnect.php');

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

    // try {
    //     $stmt = 
    // } catch(Exception $e) {
    //     $answer = array(
    //         'error' => $e->getMessage()
    //     );
    // }

    echo json_encode($answer);
}

?>