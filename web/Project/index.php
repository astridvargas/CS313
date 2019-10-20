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

            $statement = $db->prepare("SELECT userName_id, usesTelephone_id, userAddres FROM contacts");
            $statement->execute();
        
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        
            {
	            $userNAme_id = $row['userName_id'];
	            $userTelephone_id = $row['userTelephone_id'];
	            $userAddress_id = $row['userAddress_id'];
    	        echo "<p><strong>$userName_id - $userTelephone_id - $userAddress_id </strong><p>";
            }
        ?>


    </div>

</body>
</html>