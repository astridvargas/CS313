<?php
require_once('dbConnect.php');

$db = get_db();
try {
    if($_POST['action'] == 'create') {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $address = $_POST['address'];
    
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