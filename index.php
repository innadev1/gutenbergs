<?php


	$error_message_n = "";
	$error_message_n2 = "";
	$error_message_em = "";
	$error_message_text = "";
	$mailSuccess = false;


	if(isset($_POST['submit'])) {
		$to = 'my.worktest94@gmail.com';

		$name = $_POST["name"];
		$email = $_POST["email"];
		$text = $_POST["text"];


		$error_message_n = "";
		$error_message_n2 = "";
		$error_message_em = "";
		$error_message_text = "";

		$mailSuccess = false;

		$errors = ['name'=>0, 'email'=>0, 'text'=>0];
		$email_exp_a = "/[^A-Za-z]/";

		// Name
		if(strlen($name) < 2) {
        	$error_message_n .= '<p style = "color: red; padding: 0 1vw 0 1vw;">Name too short.</p>';
			$errors['name'] = 1;
		}
		
		if(preg_match($email_exp_a,$_POST["name"])) {
			$error_message_n2 .= '<p style = "color: red; padding: 0 1vw 0 1vw;">only alphabet!</p>';
			$errors['name'] = 1;
		}


		// EMAIL 
		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    	if(!preg_match($email_exp,$email)) {
        	$error_message_em .= '<p style = "color: red; padding: 0 1vw 0 1vw;">Please enter email!</p>';
			$errors['email'] = 1;
		}


		if(empty($text)){
			$error_message_text .= '<p style = "color: red; padding: 0 1vw 0 1vw;">Please enter your question!</p>';
			$errors['text'] = 1;
		}

		if(empty($error_message_n) && empty($error_message_n2) && empty($error_message_em) && empty($error_message_text) ) 
		{
			$subject = 'the subject';
			$headers = '';

			$message = "Name:" . " " . $name . "\r\n" . "Email:" . " " . $email. "\r\n" . "Question:" . " " . $text;

			if(mail($to, $subject, $message, $headers)){
				
				$mailSuccess = true;

			}
		}
	}
?>

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

<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>gutenberg</title>
		
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
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

    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
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
	
		<div class="header">
			<img src="img/1.png">
			<h2>Introduce our hotel</h2>
			<p>Boutique stila viesnīca Vecpilsētas centrā. Slavena ar greznu interjeru, romantisku, vēsturisku stilu un sirsnīgu personālu.</p>
		</div>
	
		<div class="wrap" id="first">
			<div class="b-1">
				<div><img src="img/l1.png"></div>
				<h3>hotel</h3>
			</div>
			<div class="b-2">
				<div><img src="img/l2.png"></div>
				<h3>luxurios rooms</h3>
			</div>
			<div class="b-3">
				<div><img src="img/l3.png"></div>
				<h3>delicious food</h3>
			</div>
			<div class="b-4">
				<div><img src="img/l4.png"></div>
				<h3>about us</h3>
			</div>
		</div>

		<div class="header">
			<img src="img/1.png">
			<h2>Our rooms</h2>
		</div>
		
		<div class="wrap" id="second">
			<div class="b-5">
				<div><h5>Standart room <br> single/double</h5></div>
			</div>
			<div class="b-6">
				<div><h5>junior suite <br> apartment</h5></div>
			</div>
			<div class="b-7">
				<div><h5>de luxe <br> apartment</h5></div>
			</div>
		</div>
	
		<div class="header">
			<img src="img/1.png">
			<h2>Have any question?</h2>
		</div>

		<?php if(!$mailSuccess){ ?>
			<form id="form" name="orderform" method="post" action="index.php">
				<div class="wrap" id="third">
					<div><input type="text" value = "<?php if(isset($_POST['name']) && $errors['name'] == 0){ echo $_POST['name']; } ?>" name="name" placeholder="name"></input></div>
					<?php echo ($error_message_n); ?>
					<?php echo ($error_message_n2); ?>
					<div><input type="text" value = "<?php if(isset($_POST['email']) && $errors['email'] == 0){ echo $_POST['email']; } ?>" name="email" placeholder="email"></input></div>
					<?php echo ($error_message_em); ?>
					<div><input type="text" value = "<?php if(isset($_POST['text']) && $errors['text'] == 0){ echo $_POST['text']; } ?>" name="text" placeholder="question"></input></div>
					<?php echo ($error_message_text); ?>
					<div id="button-input"><input class="blackbutton" type="submit" id="submit" name="submit" value="send"></div>
				</div>


			</form>
				<?php				
			}else{
				
				?>
					<div class = "checkmail"><h2>Check your mail!</h2></div>
				
			<?php } ?>
		
		<div class="header">
			<img src="img/1.png">
			<h2>Contact us</h2>
		</div>
		
		<div id="contact_us">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.9402892663093!2d24.10318801627591!3d56.94982428089038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd767b3639b%3A0x80f2553d2375d26b!2zRG9tYSBsYXVrdW1zIDEsIENlbnRyYSByYWpvbnMsIFLEq2dhLCBMVi0xMDUwLCDQm9Cw0YLQstC40Y8!5e0!3m2!1sru!2sru!4v1507631151586" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
