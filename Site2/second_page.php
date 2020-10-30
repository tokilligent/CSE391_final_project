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
	<link rel="stylesheet" type="text/css" media="screen" href="second_page.css">
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
	
	
	
	
	<div class="tabs">
		<input type="radio" id="tab1" name="tab-control" checked>
		<input type="radio" id="tab2" name="tab-control">
		<input type="radio" id="tab3" name="tab-control">  

		<ul>
			<li title="Features"><label for="tab1" role="button"><span>Credit Card</span></label></li>
			<li title="Delivery Contents"><label for="tab2" role="button"><span>Deposit</span></label></li>
			<li title="Shipping"><label for="tab3" role="button"><span>Loan</span></label></li>

		</ul>
		<div class="slider">
		  <div class="indicator"></div>
		</div>
		
		
		
		
		
		<div class="content">
			<section>
					
				<div class="col-lg-6">
					<form class="input-group" action="second_page.php" method="POST">
						<div class="form-group">
							<label for="exampleFormControlSelect2" class="label_label">Sort by</label>
								<select name="cred_choice" class="form-control" id="exampleFormControlSelect2">
									<option value="credit_limit"> Credit Limit (Low to High)</option>
									<option value="feature"> Features (Low to High) </option>
									<option value="min_income"> Minimum Income (Low to High)</option>
						
								</select>
						</div>
			
						<button type="submit" class="submit-btn2" name="submit"> Submit </button> 
					</form>
				</div>
				<?php
					if(!empty($_POST['cred_choice'])) {
						$selected = $_POST['cred_choice'];
						cc_print_info('credit_card',$selected);
					}
					function cc_print_info($table,$colum){
						$conn= new mysqli('localhost','root','','final_proj');
						if($conn->connect_error){
							die('Connection failed');
						}
						
						if($colum=='credit_limit')
							$s="SELECT name,credit_limit,feature,min_income FROM bank,credit_card WHERE bank.bank_id=credit_card.bank_id ORDER BY credit_limit ASC";
						else if($colum=='feature')
							$s="SELECT name,credit_limit,feature,min_income FROM bank,credit_card WHERE bank.bank_id=credit_card.bank_id ORDER BY feature ASC";
						else
							$s="SELECT name,credit_limit,feature,min_income FROM bank,credit_card WHERE bank.bank_id=credit_card.bank_id ORDER BY min_income ASC";
						$result=mysqli_query($conn,$s); ?>
							
						<table style="width:100%">
							<tr>
								<th> Bank Name </th> <th> Credit Limit </th> <th> Feature </th> <th> Minimum Income </th>
							</tr>
				<?php
						while($row=mysqli_fetch_assoc($result)){ ?>
							<tr>
								<td> <?php echo $row['name']; ?> </td>	 <td> <?php echo $row['credit_limit']; ?> </td> 	 <td> <?php echo $row['feature']; ?> </td>  	<td> <?php echo $row['min_income']; ?> <br></td>
							</tr>
				<?php				
						} ?>
						</table>
				<?php 			
							
					}	
					
				?>
				
			</section>
			
			<section>
				
				<div class="col-lg-6">
					<form class="input-group" action="second_page.php" method="POST">
						<div class="form-group">
							<label for="exampleFormControlSelect2" class="label_label">Sort by</label>
							<select name="dep_choice" class="form-control" id="exampleFormControlSelect2">
								<option value="interest"> Interest (Low to High)</option>
								<option value="withdraw_lim"> Withdraw Limit (Low to High) </option>
								<option value="open_bal"> Opening Balance (Low to High)</option>
							</select>
						</div>
			
			
					<button type="submit" class="submit-btn2" name="submit"> Submit </button> 
			
			
					</form>
				</div>
				

				<?php
					if(!empty($_POST['dep_choice'])) {
						$selected = $_POST['dep_choice'];
						dep_print_info('deposit',$selected);
					}
					function dep_print_info($table,$colum){
						$conn= new mysqli('localhost','root','','final_proj');
						if($conn->connect_error){
							die('Connection failed');
						}
						
						if($colum=='interest')
							$s="SELECT name,interest,withdraw_lim,open_bal FROM bank,deposit WHERE bank.bank_id=deposit.bank_id ORDER BY interest ASC";
						else if($colum=='withdraw_lim')
							$s="SELECT name,interest,withdraw_lim,open_bal FROM bank,deposit WHERE bank.bank_id=deposit.bank_id ORDER BY withdraw_lim ASC";
						else
							$s="SELECT name,interest,withdraw_lim,open_bal FROM bank,deposit WHERE bank.bank_id=deposit.bank_id ORDER BY open_bal ASC";
						$result=mysqli_query($conn,$s); ?>
							
						<table style="width:100%">
							<tr>
								<th> Bank Name </th> <th> Interest </th> <th> Withdraw Limit </th> <th> Opening Balance </th>
							</tr>
				<?php
						while($row=mysqli_fetch_assoc($result)){ ?>
							<tr>
								<td> <?php echo $row['name']; ?> </td>	 <td> <?php echo $row['interest']; ?> </td> 	 <td> <?php echo $row['withdraw_lim']; ?> </td>  	<td> <?php echo $row['open_bal']; ?> <br></td>
							</tr>
				<?php				
						} ?>
						</table>
				<?php 			
							
					}	
				
				?>
				
			</section>
			<section>
				
				<div class="col-lg-6">
				<form class="input-group" action="second_page.php" method="POST">
				<div class="form-group">
				<label for="exampleFormControlSelect2" class="label_label">Sort by</label>
				<select name="loan_choice"  class="form-control" id="exampleFormControlSelect2">
					<option value="tenure"> Tenure (Low to High)</option>
					<option value="max_amount"> Maximum Amount (Low to High) </option>
					<option value="interest"> Interest (Low to High)</option>
					
				</select>
				</div>
			
			
				<button type="submit" class="submit-btn2" name="submit"> Submit </button> 
			
			
				</form>
				</div>
				
				<?php
					if(!empty($_POST['loan_choice'])) {
						$selected = $_POST['loan_choice'];
						loan_print_info('loan',$selected);
					}
					function loan_print_info($table,$colum){
						$conn= new mysqli('localhost','root','','final_proj');
						if($conn->connect_error){
							die('Connection failed');
						}
						
						if($colum=='tenure')
							$s="SELECT name,tenure,max_amount,interest FROM bank,loan WHERE bank.bank_id=loan.bank_id ORDER BY tenure ASC";
						else if($colum=='max_amount')
							$s="SELECT name,tenure,max_amount,interest FROM bank,loan WHERE bank.bank_id=loan.bank_id ORDER BY max_amount ASC";
						else
							$s="SELECT name,tenure,max_amount,interest FROM bank,loan WHERE bank.bank_id=loan.bank_id ORDER BY interest ASC";
						$result=mysqli_query($conn,$s); ?>
							
						<table style="width:100%">
							<tr>
								<th> Bank Name </th> <th> Tenure </th> <th> Maximum Amount </th> <th> Interest </th>
							</tr>
				<?php
						while($row=mysqli_fetch_assoc($result)){ ?>
							<tr>
								<td> <?php echo $row['name']; ?> </td>	 <td> <?php echo $row['tenure']; ?> </td> 	 <td> <?php echo $row['max_amount']; ?> </td>  	<td> <?php echo $row['interest']; ?> <br></td>
							</tr>
				<?php				
						} ?>
						</table>
				<?php 			
							
					}	
				
				?>
				
					
					
			</section>

		</div>
	</div>
	
</html>