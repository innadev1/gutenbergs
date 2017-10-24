<?php
	include 'assets/lang.php';

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
        	$error_message_n .= '<p style = "color: red; padding: 0 1vw 0 1vw;">'.$language[$lang]['name_t_sh'].'</p>';
			$errors['name'] = 1;
		}
		
		if(preg_match($email_exp_a,$_POST["name"])) {
			$error_message_n2 .= '<p style = "color: red; padding: 0 1vw 0 1vw;">'.$language[$lang]['only_alph'].'</p>';
			$errors['name'] = 1;
		}


		// EMAIL 
		$error_message = "";
    	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
    	if(!preg_match($email_exp,$email)) {
        	$error_message_em .= '<p style = "color: red; padding: 0 1vw 0 1vw;">'.$language[$lang]['enter_email'].'</p>';
			$errors['email'] = 1;
		}


		if(empty($text)){
			$error_message_text .= '<p style = "color: red; padding: 0 1vw 0 1vw;">'.$language[$lang]['you_ques'].'</p>';
			$errors['text'] = 1;
		}

		if(empty($error_message_n) && empty($error_message_n2) && empty($error_message_em) && empty($error_message_text) ) 
		{
			$subject = 'the subject';
			$headers = '';

			$message = $language[$lang]['name'] . " " . $name . "\r\n" . $language[$lang]['email'] . " " . $email. "\r\n" . $language[$lang]['question'] . " " . $text;

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
	
		<video width="100%" autoplay loop>
		   <source src="video/video.mp4" type='video/mp4'>
		</video>

		<div class="header">
			<img src="img/1.png">
			<h2><?php echo $language[$lang]['hotel'] ?></h2>
			<p><?php echo $language[$lang]['header_text'] ?></p>
		</div>
	
		<div class="wrap" id="first">
			<div class="b-1">
				<a href="#about_us.php"><div><img src="img/l4.png"></div>
				<h3><?php echo $language[$lang]['about_us'] ?></h3></a>
			</div>
			<div class="b-2">
				<a href="rooms.php"><div><img src="img/l2.png"></div>
				<h3><?php echo $language[$lang]['rooms'] ?></h3></a>
			</div>
			<div class="b-3">
				<a href="http://restaurant-gutenbergs.lv/?lang="><div><img src="img/l3.png"></div>
				<h3><?php echo $language[$lang]['restaurant'] ?></h3></a>
			</div>
			<div class="b-4">
				<a href="conference_hall.php"><div><img src="img/l1.png"></div>
				<h3><?php echo $language[$lang]['conference'] ?></h3></a>
			</div>
			<div class="b-8">
				<a href=""><div><img src="img/l1.png"></div>
				<h3><?php echo $language[$lang]['gallery'] ?></h3></a>
			</div>
		</div>

		<div class="header">
			<img src="img/1.png">
			<h2><?php echo $language[$lang]['our_rooms'] ?></h2>
		</div>
		
		<div class="wrap" id="second">
			<a href="rooms.php"><div class="b-5">
				<div><h5><?php echo $language[$lang]['stand_room'] ?></h5></div>
			</div></a>
			<a href="rooms.php"><div class="b-6">
				<div><h5><?php echo $language[$lang]['jun_room'] ?></h5></div>
			</div></a>
			<a href="rooms.php"><div class="b-7">
				<div><h5><?php echo $language[$lang]['apm_lux'] ?></h5></div>
			</div></a>
		</div>
	
		<div class="header">
			<img src="img/1.png">
			<h2><?php echo $language[$lang]['question'] ?></h2>
		</div>

		<?php if(!$mailSuccess){ ?>
			<form id="form" name="orderform" method="post" action="index.php">
				<div class="wrap" id="third">
					<div><input type="text" value = "<?php if(isset($_POST['name']) && $errors['name'] == 0){ echo $_POST['name']; } ?>" name="name" placeholder="<?php echo $language[$lang]['name'] ?>"></input></div>
					<?php echo ($error_message_n); ?>
					<?php echo ($error_message_n2); ?>
					<div><input type="text" value = "<?php if(isset($_POST['email']) && $errors['email'] == 0){ echo $_POST['email']; } ?>" name="email" placeholder="<?php echo $language[$lang]['email'] ?>"></input></div>
					<?php echo ($error_message_em); ?>
					<div><input type="text" value = "<?php if(isset($_POST['text']) && $errors['text'] == 0){ echo $_POST['text']; } ?>" name="text" placeholder="<?php echo $language[$lang]['question'] ?>"></input></div>
					<?php echo ($error_message_text); ?>
					<div id="button-input"><input class="blackbutton" type="submit" id="submit" name="submit" value="<?php echo $language[$lang]['send'] ?>"></div>
				</div>


			</form>
				<?php				
			}else{
				
				?>
					<div class = "checkmail"><h2><?php echo $language[$lang]['checkyo'] ?></h2></div>
				
			<?php } ?>
		
		<div class="header">
			<img src="img/1.png">
			<h2><?php echo $language[$lang]['contact_us'] ?></h2>
		</div>
		
		<div id="contact_us">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.9812809355444!2d24.10117131627591!3d56.94912198089018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd75e0742ab%3A0xa1c034205955fe93!2sHotel+Gutenbergs!5e0!3m2!1sru!2sru!4v1508762046686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
