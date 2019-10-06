<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS File -->
        
        <link rel="stylesheet" href="assignment03.css">

        <!-- Materialize -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Google Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display:800|Roboto:400i&display=swap" rel="stylesheet">

    </head>
    <body>

    <!-- Nav Bar -->

    <nav>
        <div class="nav-wrapper">
            <a href="assignment03.php" class="brand-logo">Home</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="viewCart.php">Cart</a></li>
                <li><a href="../index.php">Back to Homepage</a></li>
            </ul>
        </div>
    </nav>

    <!-- Display Cart Items -->

    <h1 class="center">Your cart</h1>

    <table>
        <thead>
           <tr>
               <th>Number</th>
               <th>Name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Update</th>
               <th>Delete</th>
           </tr>
        </thead>

        <tbody>
            <?php
                $sno = 1;
                foreach($_SESSION as $products) {
                    $p = 0;
                    $q = 0;
                    echo "<tr>";
                        echo "<td>" . ($sno++) . "</td>";
                        echo "<form action='editCart.php' method='post'>";
                        foreach($products as $key => $value) {
                            if ($key == 2) {
                                echo "<td><input type='text' name='name$key' class='input-field' value='".$value."'></td>";
                                $q = intval($value);
                            } else if ($key == 1) {
                                echo "<input type='hidden' name='name$key' value='".$value."'>";
                                echo "<td>" . $value . "</td>";
                                $p = intval($value);
                            } else if ($key == 0) {
                                echo "<input type='hidden' name='name$key' value='".$value."'>";
                                echo "<td>" . $value . "</td>";
                            }
                        }
                        $bill = ($q * $p);
                        echo "<td>" . ($bill) . "</td>";
                        echo "<td><input type='submit' name='event' value='Update'></td>";
                        echo "<td><input type='submit' name='event' value='Delete'</td>";
                        echo "</form>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <!-- ?php
        // foreach($_SESSION as $val) {
        //     print_r($val);
        // }
    ?> -->

    </body>
</html>