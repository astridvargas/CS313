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

    <nav>
        <div class="nav-wrapper">
            <a href="assignment03.php" class="brand-logo">Home</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="viewCart.php">Cart</a></li>
                <li><a href="../index.php">Back to Homepage</a></li>
            </ul>
        </div>
    </nav>

    <form action="confirmation.php" method="get">
        <div class="row">
            <div class="column">
                <h2>Checkout Form</h2>
                <table>
                    <!-- USER'S NAME -->
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" id="first_name" class="form-control" required>
                                <label class="form-control-placeholder" for="name">First Name</label>
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" id="last_name" class="form-control" required>
                                <label class="form-control-placeholder" for="last_name">Last Name</label>
                            </div>
                        </td>
                    </tr>
                </table>

                    <!-- USER'S ADDRESS AND NUMBER-->

                <table>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" id="address" size="30" class="form-control" required>
                                <label class="form-control-placeholder" for="address">Address</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <input type="text" id="phone" class="form-control" maxlength="10"required>
                                <label class="form-control-placeholder" for="phone">Phone Number</label>
                           </div>	
                        </td>
                    </tr>
                </table>

                <!-- USER'S PAYMENT METHOD -->

                <table>
                    <tr>
                        <td>
                            <label for="card_0">
                                <input type="radio" id="card_0" name="cards">
                                <span>Visa</span>
                            </label>
                        </td>

                        <td>
                            <label for="card_1">
                                <input type="radio" id="card_1" name="cards">
                                <span>MasterCard</span>
                            </label>
                        </td>

                        <td>
                            <label for="">
                                <input type="radio" id="card_2" name="cards">
                                <span>Amercan Express</span>
                            </label>
                        </td>

                        <td>
                            <label for="">
                                <input type="radio" id="card_3" name="cards">
                                <span>Paypal</span>
                            </label>
                        </td>

                    </tr>

                </table>

                <table>
                    <br>

                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" id="credit_card" class="form-control" maxlength="16" size="30" required>
                                <label class="form-control-placeholder" for="credit_card">Card Number</label>
                            </div>
                            
                        </td>	

                        <td>
                            <div class="form-group">
                                <input type="text" id="exp_date" class="form-control" maxlength="5" size="15" required>
                                <label class="form-control-placeholder" for="exp_date">Expiration Date</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="reset" name="reset" id="reset" value="Reset">
                        </td>
                    </tr>

                </table>

                <div align="center">
                    <a href="checkout.php" class="button">Submit Payment</a>
                </div>

            </div>
        </div>
    </form>

    </body>
</html>