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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>

    <div class="center">
        <a class="goBack" href="index.php">
            Home
        </a>
    </div>

    <div>
        <br>
        <h1>Edit Contact</h1>
        <br><br>
        
        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <h3 class='center'>Edit your contact information</h3>
                    
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

    </div>

</body>
</html>