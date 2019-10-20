<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Scripture List</title>
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
	            // $userTelephone_id = $row['userTelephone_id'];
	            // $userAddress_id = $row['userAddress_id'];
                echo "<p><strong> $user </strong><p>";
                // echo "<p><strong>$userName_id - $userTelephone_id - $userAddress_id </strong><p>";
            }
        ?>


    </div>

</body>
</html>