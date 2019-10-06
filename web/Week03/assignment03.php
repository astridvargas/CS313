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

        <!-- Logo and Name of Website -->

        <table>

            <tbody>
                <tr>
                    <td>
                        <img src="logo.jpg" alt="Logo" class="logo">
                    </td>

                    <td>
                        <h1>Anti Reject Skateboarding</h1>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href=""></a>

        <!-- Home Picture Slider -->

        <div class="slideContainer">
            
            <!-- First picture -->
            <div class="slides fade">
                <img class="imagesSlide" src="https://images.unsplash.com/photo-1504051569746-b952af8e65e7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="skateboarding1">
            </div>

            <!-- Second Picture -->
            <div class="slides fade">
                <img class="imagesSlide" src="https://images.unsplash.com/photo-1450644995374-1721affb8ecd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="skateboarding2">
            </div>

            <!-- Third Image -->
            <div class="slides fade">
                <img class="imagesSlide" src="https://images.unsplash.com/photo-1477466535227-9f581b3eec21?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" alt="skateboarding3">
            </div>
        </div>

        <h1>Skateboarding Shop</h1>

        <!-- Display shopping boards -->

        <div class="skateboardsContainer">

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>

            <form action="cart.php" method="post">
                <tbody>
                    <tr>
                        <td>Vincent Skateboard</td>
                        <td><img width="40%" src="https://cdn.shopify.com/s/files/1/1728/9265/products/Deck0919DialtoneVincent_1024x1024.jpg?v=1568943571" alt="Assignment 3"></td>
                        <th>$55</th>
                        <td><input type="text" name="qty" class="input-field"></td>
                        <input type="hidden" name="name" value="Vincent Skateboard">
                        <input type="hidden" name="price" value="55">
                    </tr>

                    <tr>
                        <td>Jeron Skateboard</td>
                        <td><<img width="40%" src="skateboard.jpg" alt="Assignment 4"></td>
                        <th>$50</th>
                        <td><input type="text" name="qty" class="input-field"></td>
                        <input type="hidden" name="name" value="Jeron Skateboard">
                        <input type="hidden" name="price" value="50">
                    </tr>

                    <tr>
                        <td>Dunk Contest</td>
                        <td><<img width="40%" src="https://cdn.shopify.com/s/files/1/1728/9265/products/Deck0919Hoops_1024x1024.jpg?v=1569270127" alt="Assignment 4"></td>
                        <th>$60</th>
                        <td><input type="text" name="qty" class="input-field"></td>
                        <input type="hidden" name="name" value="Dunk Contest">
                        <input type="hidden" name="price" value="60">
                    </tr>

                    <tr>
                        <td><input type="submit" value="Add to Cart" name="addCart"></td>
                    </tr>
                </tbody>
            </form>
        </table>

        

            
            <!-- <div class="gallery">

        
                <div class="gallery-item">
                    <h4>Vincent Skateboard</h4>
                    <h6>$55 - 8.25''</h6>

                    
                    <form action="#">
                        <p>
                        <label>
                            <input type="checkbox" />
                            <span>Add to Cart</span>
                        </label>
                        </p>
                    </form>
                    
                    <img class="gallery-image" src="https://cdn.shopify.com/s/files/1/1728/9265/products/Deck0919DialtoneVincent_1024x1024.jpg?v=1568943571" alt="Assignment 3">
                </div>
        
                

                <div class="gallery-item">
                    <h4>Jeron Skateboard</h4>
                    <h6>$50 - 8.5''</h6>

                     
                     <form action="#">
                        <p>
                        <label>
                            <input type="checkbox" />
                            <span>Add to Cart</span>
                        </label>
                        </p>
                    </form>

                    <img class="gallery-image" src="skateboard.jpg" alt="Assignment 4">
                </div>

                
        
                <div class="gallery-item">
                    <h4>Dunk Contest</h4>
                    <h6>$55 - 8.25'' Wide</h6>
                    
                     
                     <form action="#">
                        <p>
                        <label>
                            <input type="checkbox" />
                            <span>Add to Cart</span>
                        </label>
                        </p>
                    </form>

                    <img class="gallery-image" src="https://cdn.shopify.com/s/files/1/1728/9265/products/Deck0919Hoops_1024x1024.jpg?v=1569270127" alt="Skateboards">
                </div>

                
        
                <div class="gallery-item">
                    <h4>Politic Dave Jazz Deck</h4>
                    <h6>$60 - 8''/8.25'' Wide</h6>
                    
                     
                     <form action="#">
                        <p>
                        <label>
                            <input type="checkbox" />
                            <span>Add to Cart</span>
                        </label>
                        </p>
                    </form>

                    <img class="gallery-image" src="https://cdn.shopify.com/s/files/1/1728/9265/products/Deck0819MusicCaddo_1024x1024.jpg?v=1565823305" alt="Skateboards">
                </div>
            </div> -->
        
        </div>

        <!-- <div align="center">
            <a href="../cart.php" class="button">Go to Cart</a> 
        </div> -->

        <script src="assignment03.js" async defer></script>
    </body>
</html>