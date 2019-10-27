<?php

if($_POST['action'] == 'create') {
    require_once('dbConnect.php');

    echo json_encode($_POST);
}

?>