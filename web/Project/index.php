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
                            <input type="hidden" id="action" value="create">
                            <input onclick="readForm()" class="submitButton" type="submit" value="Add Contact">
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

                    <input type="text" id="search" placeholder="Search Contacts">
                    
                    <div class="center">
                        <p class="total">Total: <span>2</span> Contacts</p>
                    </div>

                    <!-- Display Values from Database to the table on the screen -->
                
                    <?php

                        $statement = $db->prepare("SELECT * FROM contacts");
                        $statement->execute();

                        echo '<div id="contactsList" class="tableContainer">
                            <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>';
                    
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                            $name = $row['_name'];
                            $telephone = $row['_telephone'];
                            $address = $row['_address'];

                            echo "<tbody>
                                <tr>
                                <td>$name </td>
                                <td>$telephone </td>
                                <td>$address </td>
                                <td>";

                            echo'<a class= "editButton" href="editContact.php">
                                    <i class="small material-icons">edit</i>
                                </a>

                                <button type="button" class="deleteButton">
                                    <i class="small material-icons">delete</i>
                                </button>

                                </td></tr>
                            ';
                        }

                        echo '</tbody></table>';
                    ?>
                </div>
            </div>
        </div>

        </div>


    </div>

    <script src="project.js" async defer></script>
    <script src="addContact.js" async defer></script>

</body>
</html>