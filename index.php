<!DOCTYPE>
<?php
include ("functions/functions.php")
 ?>
<html>
	<head>
		<title>My Online Shop</title>
		<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>
<body>

	<!--Main Container starts here-->
	<div class ="main_wrapper">
	
		
		
		<!--Header starts here-->
		<div class ="head_wrapper">
			<a href="index.php"><img id="logo" src="images/logo.gif" /></a>
            <img id="banner" src="images/banner.gif" />
		</div>
        <div class="clear" ></div>
        <!--Header ends here-->
		
		<!--Navigation Bar starts here-->
		<div class ="menubar">
		   <ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="result.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a product" />
					<input type="submit" name="search" value="Search" />
				</form>
			</div>
		</div>
		<!--Navigation Bar ends here-->
		
		<!--Content Wrapper starts here-->
		<div class="content_wrapper">
		
			<div id="sidebar">
                <div id="sidebar_title">Categories</div>

                <ul id = "cats">

                    <?php getCats(); ?>

                </ul>

                <div id="sidebar_title">Brands</div>

                <ul id = "cats">

                    <?php getBrands(); ?>

                </ul>

            </div>
		
			<div id="content_area">

                <div id="shopping_cart">
                    <span style="float:right; font-size:18px; padding: 5px; line-height: 40px;">
                        Welcome Guest! <b style="color:yellow">Shopping Cart - </b> Total Items: Total Price: <a href="cart.php">Go to Cart</a>
                    </span>
                </div>

                <div id="products_box">

                    <?php getPro() ?>
                    <?php getCatPro() ?>
                    <?php getBrandPro() ?>

                </div>
            </div>
		
		</div>
		<!--Content Wrapper ends here-->
		<div id="footer">

            <h2 style="text-align:center; padding-top: 30px;">&copy; 2014 by www.OnlineTuting.com</h2>

        </div>
	
	
	
	</div>
	<!--Main Container ends here-->



</body>
</html>