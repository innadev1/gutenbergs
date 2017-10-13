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
</header>

	



