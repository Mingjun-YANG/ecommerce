<!DOCTYPE>
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
			<img id="logo" src="images/logo.gif" />
			<img id="banner" src="images/ad_banner.gif" />
			
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts here-->
		<div class ="menubar">
		   <ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
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
                    <li><a href="#">Laptops</a>/li>
                    <li><a href="#">Computers</a>/li>
                    <li><a href="#">Mobiles</a>/li>
                    <li><a href="#">Cameras</a>/li>
                    <li><a href="#">iPads</a>/li>
                    <li><a href="#">Tablets</a>/li>

                </ul>

                <div id="sidebar_title">Brands</div>

                <ul id = "cats">
                    <li><a href="#">HP</a>/li>
                    <li><a href="#">DELL</a>/li>
                    <li><a href="#">Motorola</a>/li>
                    <li><a href="#">Sony</a>/li>
                    <li><a href="#">LG</a>/li>
                    <li><a href="#">APPLE</a>/li>

                </ul>

            </div>
		
			<div id="content_area">This is content area</div>
		
		</div>
		<!--Content Wrapper ends here-->
		<div id="footer">This is the footer</div>
	
	
	
	</div>
	<!--Main Container ends here-->



</body>
</html>