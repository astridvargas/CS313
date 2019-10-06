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

    <h1>Confirm Your Purchase!</h1>

	<div>
		<div>
			First Name: <?php echo $_POST['first_name'];?><br>
			Last Name: <?php echo $_POSt['last_name'];?><br>
			Address: <?php echo $_POST['address'];?><br>
			Phone: <?php echo $_POST['phone'];?><br>
			Items Selected:
			<ul>
				<?php
					$items = $_POST['item'];
					foreach($items as $item) {
						echo '<li>'.key($item);
						echo " ($".implode($item).")".'<li>';
					}
				?>
			</ul>

			Total: $<?php echo $_POST['total'];?><br>
			Credit Card Type: <?php echo $_POST['card'];?><br>
			Card Expiration: <?php
								$date = $_POST['exp_date'];
								$date = substr_replace($date, "20", 3, 0);
								$date = "01/".$date;
								$date = str_replace('/', '-', $date);
								$newDate = date('F, o', strtotime($date));
								echo $newDate;
							 ?><br>
        </div>
        
    </div>

    </body>
</html>