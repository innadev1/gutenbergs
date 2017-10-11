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
        	$error_message_n .= '<p style = "color: red;">Name too short.</p>';
			$errors['name'] = 1;
		}
		
		if(preg_match($email_exp_a,$_POST["name"])) {
			$error_message_n2 .= '<p style = "color: red;">only alphabet!</p>';
			$errors['name'] = 1;
		}


		// EMAIL 
		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    	if(!preg_match($email_exp,$email)) {
        	$error_message_em .= '<p style = "color: red;">Please enter email!</p>';
			$errors['email'] = 1;
		}


		if(empty($text)){
			$error_message_text .= '<p style = "color: red;">Please enter your question!</p>';
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





<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>gutenberg</title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
		<div class="header">
			<img src="img/1.png">
			<h2>Introduce our hotel</h2>
			<p>Boutique stila viesnīca Vecpilsētas centrā. Slavena ar greznu interjeru, romantisku, vēsturisku stilu un sirsnīgu personālu.</p>
		</div>
	
		<div class="wrap" id="first">
			<div class="b-1">
				<div><img src="img/l1.png"></div>
				<h3>perfect view</h3>
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
					<div class = "checkmail"><h1>Check your mail!</h1></div>
				
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
