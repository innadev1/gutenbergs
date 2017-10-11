<?php

$error_message_df = "";
$error_message_dt = "";
$error_message_no = "";
$error_message_peo = "";
$error_message_peo2 = "";
$error_message_rooms = "";
$error_message_rooms2 = "";



if(isset($_GET['submit'])) {
	$to = 'my.worktest94@gmail.com';

	$error_message_df = "";
	$error_message_dt = "";
	$error_message_no = "";
	$error_message_peo = "";
	$error_message_peo2 = "";
	$error_message_rooms = "";
	$error_message_rooms2 = "";

	$datefrom = $_POST["datefrom"];
	$dateto = $_POST["dateto"];
	$people = $_POST["people"];
	$rooms = $_POST["rooms"];

	$errors = ['datefrom'=>0,'dateto'=>0, 'people'=>0, 'rooms'=>0];

	// Date
	if(empty($datefrom)) {
		$error_message_df .= '<p style = "color: red;">Please enter date.</p>';
		$errors['datefrom'] = 1;
	}

	if(empty($dateto)) {
		$error_message_dt .= '<p style = "color: red;">Please enter date.</p>';
		$errors['dateto'] = 1;
	}

	if($datefrom > $dateto ){
		$error_message_no .= '<p style = "color: red;">Going back in time impossible.</p>';
		$errors['datefrom'] = 1;
		$errors['dateto'] = 1;
	}

	// People
	if(strlen($people) < 1){
		$error_message_peo .= '<p style = "color: red;">Enter number of peoples.</p>';
		$errors['people'] = 1;
	}

	$error_message = "";
	$email_exp_n = "/[^0-9]/";

	if(preg_match($email_exp_n,$_POST["people"])) {
		$error_message_peo2 .= '<p style = "color: red;">only numbers!</p>';
		$errors['people'] = 1;
	}

	// Rooms
	if(strlen($rooms) < 1){
		$error_message_room .= '<p style = "color: red;">Enter number of peoples.</p>';
		$errors['rooms'] = 1;
	}

	$error_message = "";
	$email_exp_n = "/[^0-9]/";

	if(preg_match($email_exp_n,$_POST["rooms"])) {
		$error_message_room2 .= '<p style = "color: red;">only numbers!</p>';
		$errors['rooms'] = 1;
	}

}

?>

<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<header>

	<div id="logo"><img src="img/logo.png"></div>

	<div id="navigation">
		<ul class="navigation">
			<li><a>about us</a></li>
			<li><a>rooms</a></li>
			<li><a>restaurant</a></li>
			<li><a>conference hall</a></li>
			<li><a>contacts</a></li>
			<li><a>reservation</a></li>
			<li><a>en</a></li>
		</ul>
	</div>

</header>

	<div id="checkout">
		<div class="checkout">
			<h1>Check in</h1>
			<p>15 Aug</p>
		</div>
		<div class="checkout">
			<h1>Check out</h1>
			<p>20 Aug</p>
		</div>
		<div class="checkout">
			<h1>Guests</h1>
			<p>2</p>
		</div>
		<div class="checkout">
			<h1>Rooms</h1>
			<p>1</p>
		</div>
		<div class="checkout" style="padding:0;">
			<button>BOOK</button>
		</div>
	</div>