<?php

$error_message_df = "";
$error_message_dt = "";
$error_message_no = "";
$error_message_peo = "";
$error_message_peo2 = "";
$error_message_rooms = "";
$error_message_rooms2 = "";




if(isset($_GET['submit_two'])) {
	$to = 'my.worktest94@gmail.com';

	$error_message_df = "";
	$error_message_dt = "";
	$error_message_no = "";
	$error_message_peo = "";
	$error_message_peo2 = "";
	$error_message_rooms = "";
	$error_message_rooms2 = "";

	$check_in_date = $_GET["check_in_date"];
	$check_out_date = $_GET["check_out_date"];
	$adults = $_GET["number_adults"];
	$childrens = $_GET["number_children"];

	$errors = ['check_in_date'=>0,'check_out_date'=>0, 'number_adults'=>0, 'number_children'=>0];

	// Date
	if(empty($check_in_date)) {
		$error_message_df .= '<p style = "color: red;">Please enter date.</p>';
		$errors['check_in_date'] = 1;
	}

	if(empty($check_out_date)) {
		$error_message_dt .= '<p style = "color: red;">Please enter date.</p>';
		$errors['check_out_date'] = 1;
	}

	if($check_in_date > $check_out_date ){
		$error_message_no .= '<p style = "color: red;">Going back in time impossible.</p>';
		$errors['check_in_date'] = 1;
		$errors['check_out_date'] = 1;
	}

	// adults
	if(strlen($adults) < 1){
		$error_message_peo .= '<p style = "color: red;">Enter number of peoples.</p>';
		$errors['number_adults'] = 1;
	}

	$error_message = "";
	$email_exp_n = "/[^0-9]/";

	if(preg_match($email_exp_n,$_GET["number_adults"])) {
		$error_message_peo2 .= '<p style = "color: red;">only numbers!</p>';
		$errors['number_adults'] = 1;
	}

	// childrens
	if(strlen($childrens) < 1){
		$error_message_rooms .= '<p style = "color: red;">Enter number of peoples.</p>';
		$errors['number_children'] = 1;
	}

	$error_message = "";
	$email_exp_n = "/[^0-9]/";

	if(preg_match($email_exp_n,$_GET["number_children"])) {
		$error_message_rooms2 .= '<p style = "color: red;">only numbers!</p>';
		$errors['number_children'] = 1;
	}

}

?>

<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=cyrillic" rel="stylesheet">


<header id="head">

	<div id="logo"><a href="index.php"><img src="img/logo.png"></a></div>

	<div id="navigation">
		<ul class="navigation">
			<li><a>about us</a></li>
			<li><a href="rooms.php">rooms</a></li>
			<li><a>restaurant</a></li>
			<li><a>conference hall</a></li>
			<li><a>contacts</a></li>
			<li><a>reservation</a></li>
			<li><a>en</a></li>
		</ul>
	</div>
	
	<div class="round_buttons">
		<button id="flip_1"></button>
		<button id="flip_2"></button>
		<button id="flip_3"></button>
	</div>
	<style>
		.round_buttons{
			text-align: center;
			margin-top: 30vw;
		}
		.round_buttons button{
			background-color: white;
			border: none;
			padding: 0.4vw;
			cursor: pointer;
			border-radius: 3vw;
			opacity: 0.5;
			margin: 0.2vw;
		}
	</style>
							
	<script>
		$(document).ready(function(){
			$('#flip_1').click(function(){
				$('header').css('background-image','url(img/banner.jpg)')
			})
			$('#flip_2').click(function(){
				$('header').css('background-image','url(img/banner2.jpg)')
			})
			$('#flip_3').click(function(){
				$('header').css('background-image','url(img/banner3.jpg)')
			})
		});
	</script>

	<meta charset = "utf-8">
      	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	<!-- Javascript -->
		<script>
         	$(function() {
            	$( "#datepicker-10" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1],
					dateFormat: "yy-mm-dd"
            	});
         	});
      	</script>

		<script>
         	$(function() {
            	$( "#datepicker-11" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1],
					dateFormat: "yy-mm-dd"
            	});
         	});
      	</script>

		<script>
         	$(function() {
            	$( "#datepicker-12" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1],
					dateFormat: "yy-mm-dd"
            	});
         	});
      	</script>

		<script>
         	$(function() {
            	$( "#datepicker-13" ).datepicker({
					minDate: 0,
					changeMonth:true,
					changeYear:true,
					numberOfMonths:[1,1],
					dateFormat: "yy-mm-dd"
            	});
         	});
      	</script>

</header>

	

		<form id="form" name="orderform" method="get" action="index.php">
			<div id="checkout">
			
				<div class="checkout">
					<label><h1>Check in</h1></label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_GET['check_in_date']) && $errors['check_in_date'] == 0 ){ echo $_GET['check_in_date']; } ?>" name="check_in_date" type = "text" readonly="readonly" id = "datepicker-10"></spam>
					<?php echo ($error_message_df); ?>
					<?php echo ($error_message_no); ?>
				</div>

				<div class="checkout">
					<label><h1>Check out</h1></label><span class="wpcf7-form-control-wrap date-87"><input class="wpcf7-date" value = "<?php if(isset($_GET['check_out_date']) && $errors['check_out_date'] == 0){ echo $_GET['check_out_date']; } ?>" name="check_out_date" type = "text" readonly="readonly" id = "datepicker-11"></spam>
					<?php echo ($error_message_dt); ?>
					<?php echo ($error_message_no); ?>
				</div>


				<div class="checkout">
					<a><h1>Adults</h1><span class="inputs"><input type="text" value = "<?php if(isset($_GET['number_adults']) && $errors['number_adults'] == 0){ echo $_GET['number_adults']; } ?>" name="number_adults" class="wpcf7-date"></span></a>
					<?php echo ($error_message_peo); ?>
					<?php echo ($error_message_peo2); ?>
				</div>


				<div class="checkout">
					<a><h1>Children</h1><span class="inputs"><input type="text" value = "<?php if(isset($_GET['number_children']) && $errors['number_children'] == 0){ echo $_GET['number_children']; } ?>" name="number_children" class="wpcf7-date"></span></a>
					<?php echo ($error_message_rooms); ?>
					<?php echo ($error_message_rooms2); ?>
				</div>


				<div class="checkout" id="button" style="padding:0;">

				
				<?php
					if(!empty($_GET)){

						header("Location:https://app.thebookingbutton.com/properties/hgutenbergsdirect?locale=en&check_in_date=".$_GET['check_in_date']."&check_out_date=".$_GET['check_out_date']."&number_adults=".$_GET['number_adults']."&number_children=".$_GET['number_children']);
				
					}
				?>
					<input class="blackbutton" type="submit" id="submit" name="submit_two" value="book">
				</div>
			</div>
		</form>

