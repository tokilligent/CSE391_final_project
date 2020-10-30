<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Banking Services Comparison System">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Product Description</title>
	<link rel="stylesheet" type="text/css" media="screen" href="tabs.css">
	<link rel="stylesheet" type="text/css" media="screen" href="first_page.css">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Product-Description.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 2.26.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Product Description">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Product-Description.html" data-home-page-title="Product Description" class="u-body"><header class="u-clearfix u-header u-header" id="sec-3b5f"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-oswald u-text u-title u-text-1">Banking Services Comparison System</h1>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="final.php" style="padding: 10px 20px;">Product Description</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="second_page.php" style="padding: 10px 20px;">Product Comparision</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="final.php" style="padding: 10px 20px;">Product Description</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="second_page.php" style="padding: 10px 20px;">Product Comparision</a>
</li></ul>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

	
	<body>
	<?php
		function cc_print_info($x){
			$conn= new mysqli('localhost','root','','final_proj');
			if($conn->connect_error){
				die('Connection failed');
			}
			$ret="";
			
			$s="SELECT * FROM bank WHERE bank_id=(SELECT bank_id FROM credit_card WHERE cc_id='$x')";
			$result=mysqli_query($conn,$s); ?>
			
			
	<?php
			while($row=mysqli_fetch_assoc($result)){ ?>
			
			
				<h3> Bank Details </h3> <br>
				Bank Name: <?php echo  $row["name"]; ?> <br>
				Branches : <?php echo  $row["location"]; ?> <br>
				Contact : <?php echo  $row["contact"]; ?> <br>
				Description: <?php echo  $row["descr"]; ?> <br>
	<?php			
			}
			
			$s1="SELECT * FROM credit_card WHERE cc_id='$x'";
			$result1=mysqli_query($conn,$s1);
			while($row=mysqli_fetch_assoc($result1)){ ?>
	
				<h3> Product Details </h3>
				Credit Limit: <?php echo  $row["credit_limit"]; ?> <br>
				Number of Features: <?php echo  $row["feature"]; ?> <br>
				Minimum Income: <?php echo  $row["min_income"]; ?> <br>
	<?php			
			} ?>
			
			
	<?php			
		}

	
	?>
	
	<?php
		function dep_print_info($x){
			$conn= new mysqli('localhost','root','','final_proj');
			if($conn->connect_error){
				die('Connection failed');
			}
			$ret="";
			
			$s="SELECT * FROM bank WHERE bank_id=(SELECT bank_id FROM deposit WHERE dep_id='$x')";
			$result=mysqli_query($conn,$s); ?>
			
			
	<?php
			while($row=mysqli_fetch_assoc($result)){ ?>
			
			
				<h3> Bank Details </h3> <br>
				Bank Name: <?php echo  $row["name"]; ?> <br>
				Branches : <?php echo  $row["location"]; ?> <br>
				Contact : <?php echo  $row["contact"]; ?> <br>
				Description: <?php echo  $row["descr"]; ?> <br>
	<?php			
			}
			
			$s1="SELECT * FROM deposit WHERE dep_id='$x'";
			$result1=mysqli_query($conn,$s1);
			while($row=mysqli_fetch_assoc($result1)){ ?>
	
				<h3> Product Details </h3>
				Interest: <?php echo  $row["interest"]; ?> <br>
				Withdraw Limit: <?php echo  $row["withdraw_lim"]; ?> <br>
				Opening Balance: <?php echo  $row["open_bal"]; ?> <br>
	<?php			
			} ?>
			
			
	<?php			
		}
		
		
		function loan_print_info($x){
			$conn= new mysqli('localhost','root','','final_proj');
			if($conn->connect_error){
				die('Connection failed');
			}
			$ret="";
			
			$s="SELECT * FROM bank WHERE bank_id=(SELECT bank_id FROM loan WHERE loan_id='$x')";
			$result=mysqli_query($conn,$s); ?>
			
			
	<?php
			while($row=mysqli_fetch_assoc($result)){ ?>
			
			
				<h3 style="text-align:left"> Bank Details </h3> <br>
				<p style="text-align:left"
				Bank Name: <?php echo  $row["name"]; ?> <br>
				Branches : <?php echo  $row["location"]; ?> <br>
				Contact : <?php echo  $row["contact"]; ?> <br>
				Description: <?php echo  $row["descr"]; ?> <br> </p>
	<?php			
			}
			
			$s1="SELECT * FROM loan WHERE loan_id='$x'";
			$result1=mysqli_query($conn,$s1);
			while($row=mysqli_fetch_assoc($result1)){ ?>
	
				<h3> Product Details </h3>
				Tenure: <?php echo  $row["tenure"]; ?> <br>
				Maximum Amount: <?php echo  $row["max_amount"]; ?> <br>
				Interest: <?php echo  $row["interest"]; ?> <br>
	<?php			
			} ?>
			
			
	<?php			
		}
		
		function prod_list($x){
			$conn= new mysqli('localhost','root','','final_proj');
			if($conn->connect_error){
				die('Connection failed');
			}
			if($x=='credit_card')
				$s="select cc_id from credit_card";
			else if($x=='deposit')
				$s="select dep_id from deposit";
			else
				$s="select loan_id from loan";
			
			$result=mysqli_query($conn,$s);
			
			$prod_arr=[];
			
			while($row=mysqli_fetch_assoc($result)){
				if($x=='credit_card')
					$prod_arr[]= $row['cc_id'];
				else if($x=='deposit')
					$prod_arr[]= $row['dep_id'];
				else
					$prod_arr[]= $row['loan_id'];
			}
			
	?>
			<div class="col-lg-6">
					<form class="input-group" action="final.php" method="POST">
						<div class="form-group">
							<label for="exampleFormControlSelect2" class="label_label">Select Product ID</label>
							<select name="descrip" class="form-control" id="exampleFormControlSelect2">
	<?php
						for ($x = 0; $x < sizeof($prod_arr); $x++) {
	?>	
				
								<option value="<?php echo $prod_arr[$x] ; ?>"> <?php echo $prod_arr[$x] ; ?></option>
	<?php
						} ?>
							</select>
						</div>
			
			
					<button type="submit" class="submit-btn2" name="submit"> Submit </button> 
			
			
					</form>
				</div>	
	<?php
		}
	?>
	
	<div class="tabs">
		<input type="radio" id="tab1" name="tab-control" checked>
		<input type="radio" id="tab2" name="tab-control">
		<input type="radio" id="tab3" name="tab-control">  
		<!-- <input type="radio" id="tab4" name="tab-control"> -->
		<ul>
			<li title="Features"><label for="tab1" role="button"><span>Credit Card</span></label></li>
			<li title="Delivery Contents"><label for="tab2" role="button"><span>Deposit</span></label></li>
			<li title="Shipping"><label for="tab3" role="button"><span>Loan</span></label></li>
			<!-- <li title="Returns"><label for="tab4" role="button"><span>Tab 4</span></label></li> -->
		</ul>
		<div class="slider">
		  <div class="indicator"></div>
		</div>
		<div class="content">
			<section>
				<div class="column1" id="col1"><?php prod_list('credit_card') ?></div>
				<div class="column" id="col2"> 
				<?php
					if(!empty($_POST['descrip'])) {
						$selected = $_POST['descrip'];
						cc_print_info($selected);
					}
					
				?>
				</div>
			</section>
			<section>
				<div class="column1" id="col"> <?php prod_list('deposit') ?></div>
				<div class="column" id="col"> 
				<?php
					if(!empty($_POST['descrip'])) {
						$selected = $_POST['descrip'];
						dep_print_info($selected);
					}
					
				?>
				</div>
			</section>
			<section>
				<div class="column1" id="col"> <?php prod_list('loan') ?></div>
				<div class="column" id="col">
				<?php
					if(!empty($_POST['descrip'])) {
						$selected = $_POST['descrip'];
						loan_print_info($selected);
					}
					
				?>
				</div>
			</section>

		</div>
	</div>
	
	
	
</html>


