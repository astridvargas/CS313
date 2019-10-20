<?php
/**********************************************************
* File: viewScriptures.php
* Author: Br. Burton
* 
* Description: This file shows an example of how to query a
*   PostgreSQL database from PHP.
***********************************************************/
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
        
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        
            {
	            $userNAme_id = $row['userNAme_id'];
	            $userTelephone_id = $row['userTelephone_id'];
	            $userAddress_id = $row['userAddress_id'];
    	        echo "<p><strong>$userName_id - $userTelephone_id - $userAddress_id </strong><p>";
            }
        ?>


    </div>

</body>
</html>