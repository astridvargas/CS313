<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Scripture List</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="project.css">
    </head>

    <body>
    <div>
        <h1 class='center'>Contacts</h1>

        <?php

            $statement = $db->prepare("SELECT users_name FROM userName");
            $statement->execute();
        
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $user = $row['users_name'];
                $telephone = $row['user_telephone'];
	            // $userTelephone_id = $row['userTelephone_id'];
	            // $userAddress_id = $row['userAddress_id'];
                echo "<p><strong> $user </strong><p>";
                echo "<p><strong> $telephone </strong><p>";
                // echo "<p><strong>$userName_id - $userTelephone_id - $userAddress_id </strong><p>";
            }
        ?>


    </div>

</body>
</html>