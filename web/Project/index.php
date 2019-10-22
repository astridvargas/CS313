<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="project.css">
        <link href="https://fonts.googleapis.com/css?family=Fira+Code|Squada+One&display=swap" rel="stylesheet">
    </head>

    <body>

    <div>
        <br>
        <h1>Contacts</h1>
        <br><br>
        
        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <h3 class='center'>Add a contact</h3>
                    
                    <form id="contact" action="#">
                        <div class="addContacts">
                            <label for="Name">Name:</label>
                            <input type="text" placeholder="Contact's Name" id="name">
                        </div>

                        <div class="addContacts">
                            <label for="number">Phone Number:</label>
                            <input type="text" placeholder="Number" id="number">
                        </div>

                        <div class="addContacts">
                            <label for="address">Address:</label>
                            <input type="text" placeholder="Address" id="address">
                        </div>

                       <div class="buttonContainer">
                            <input class="submitButton" type="submit" value="Add Contact">
                        </div>

                        <br>
                    </form>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <h3 class="center">List of Contacts</h3>
                </div>
            </div>
        </div>
        

        <!-- <php

            $statement = $db->prepare("SELECT users_name FROM userName");
            $statement->execute();
        
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $user = $row['users_name'];
                $telephone = $row['user_telephone'];
	            $userTelephone_id = $row['userTelephone_id'];
	            $userAddress_id = $row['userAddress_id'];
                echo "<p><strong> $user </strong><p>";
                echo "<p><strong> $telephone </strong><p>";
                echo "<p><strong>$userName_id - $userTelephone_id - $userAddress_id </strong><p>";
            }
        ?> -->


    </div>

</body>
</html>