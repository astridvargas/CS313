<?php
require_once('dbConnect.php');

$db = get_db();
try {
    if($_POST['action'] == 'create') {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    
        $stmt = $db->prepare('INSERT into contacts
        (_name, _telephone, _address)
        VALUES (:_name, :_telephone, :_address)');
    
        $stmt->bindValue(':_name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':_telephone', $telephone, PDO::PARAM_STR);
        $stmt->bindValue(':_address', $address, PDO::PARAM_STR);
        
        $stmt->execute();
    }    
} catch (PDOException $ex) {
    echo "Error connecting to DB. Details: $ex";
    die();
}

?>