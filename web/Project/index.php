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
	            // $userTelephone_id = $row['userTelephone_id'];
	            // $userAddress_id = $row['userAddress_id'];
                echo "<p><strong> $user </strong><p>";
                // echo "<p><strong>$userName_id - $userTelephone_id - $userAddress_id </strong><p>";
            }
        ?>


    </div>

</body>
</html>

<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>