<html>
    <head>
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="style/rooms.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <title>rooms</title>
		
		<!--FIRST GALLERY-->
		<script>
			var now = 0
			$(document).ready(function(){

				$("#Right1").click(function () {
				count = $('.bed1 .bed-1-1').length
					if(now>0){
					now-=1
					}else{now=count-1}
					$('.bed1 .bed-1-1').css('display','none')
					$('.bed1 .bed-1-1:eq('+now+')').fadeIn(200)
					console.log($('.bed1 .bed-1-1:eq('+now+')'))
					
				});
				
				$("#Left1").click(function () {
				count = $('.bed1 .bed-1-1').length
					if(now<count-1){
					now+=1
					}else{now=0}
					$('.bed1 .bed-1-1').css('display','none')
					$('.bed1 .bed-1-1:eq('+now+')').fadeIn(200)
					console.log($('.bed1 .bed-1-1:eq('+now+')'))
				
				});
			});
		</script>
		<!--SECOND GALLERY-->
		<script>
			var now1 = 0
			$(document).ready(function(){
				
				$("#Right2").click(function () {
				count = $('.bed2 .bed-2-2').length
				if(now1>0){
					now1-=1
					}else{now1=count-1}
					$('.bed2 .bed-2-2').css('display','none')
					$('.bed2 .bed-2-2:eq('+now1+')').fadeIn(200)
					console.log($('.bed2 .bed-2-2:eq('+now1+')'))
					
				});
				
				$("#Left2").click(function () {
				count = $('.bed2 .bed-2-2').length	
				if(now1<count-1){
					now1+=1
					}else{now1=0}
					$('.bed2 .bed-2-2').css('display','none')
					$('.bed2 .bed-2-2:eq('+now1+')').fadeIn(200)
					console.log($('.bed2 .bed-2-2:eq('+now1+')'))
				
				});
			});
		</script>
		<!--THIRD GALLERY-->
		<script>
			var productnow = 0
			$(document).ready(function(){
				
				$("#Right3").click(function () {
				count = $('.bed3 .bed-3-3').length
				if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('.bed3 .bed-3-3').css('display','none')
					$('.bed3 .bed-3-3:eq('+productnow+')').fadeIn(200)
					console.log($('.bed3 .bed-3-3:eq('+productnow+')'))
					
				});
				
				$("#Left3").click(function () {
				count = $('.bed3 .bed-3-3').length	
				if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('.bed3 .bed-3-3').css('display','none')
					$('.bed3 .bed-3-3:eq('+productnow+')').fadeIn(200)
					console.log($('.bed3 .bed-3-3:eq('+productnow+')'))
				
				});
			});
		</script>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
		<div id="main">
			<div class="main">
				<div class="bed1">
					<div class="bed-1-1" id="bed1-1"></div>
					<div class="bed-1-1" id="bed1-2"></div>
					<div class="bed-1-1" id="bed1-3"></div>
					<div class="bed-1-1" id="bed1-4"></div>
					<div class="bed-1-1" id="bed1-5"></div>
					
					<div class="triggers">
						<div id="Right1"><img src="img/previous.png"></div>
						<div id="Left1"><img src="img/next.png"></div>
					</div>
				</div>
				<div class="cont">
					<div>
						<h1><?php echo $language[$lang]['stand_room'] ?></h1>
						<p><?php echo $language[$lang]['stand_room_text'] ?></p>
						<a href="https://app.thebookingbutton.com/properties/hgutenbergsdirect">
    						<button><?php echo $language[$lang]['book'] ?></button>
						</a>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="bed2">
					<div class="bed-2-2" id="bed2-1"></div>
					<div class="bed-2-2" id="bed2-2"></div>
					<div class="bed-2-2" id="bed2-3"></div>
					<div class="bed-2-2" id="bed2-4"></div>
					<div class="bed-2-2" id="bed2-5"></div>
					
					<div class="triggers">
						<div id="Right2"><img src="img/previous.png"></div>
						<div id="Left2"><img src="img/next.png"></div>
					</div>
				</div>
				<div class="cont">
					<div>
						<h1><?php echo $language[$lang]['jun_room'] ?></h1>
						<p><?php echo $language[$lang]['jun_room_text'] ?></p>
						
						<a href="https://app.thebookingbutton.com/properties/hgutenbergsdirect">
    						<button><?php echo $language[$lang]['book'] ?></button>
						</a>

					</div>
				</div>
			</div>
			<div class="main">
				<div class="bed3">
					<div class="bed-3-3" id="bed3-1"></div>
					<div class="bed-3-3" id="bed3-2"></div>
					
					<div class="triggers">
						<div id="Right3"><img src="img/previous.png"></div>
						<div id="Left3"><img src="img/next.png"></div>
					</div>
				</div>
				<div class="cont">
					<div>
						<h1><?php echo $language[$lang]['apm_lux'] ?></h1>
						<p><?php echo $language[$lang]['apm_lux_text'] ?></p>
						<a href="https://app.thebookingbutton.com/properties/hgutenbergsdirect">
    						<button><?php echo $language[$lang]['book'] ?></button>
						</a>
					</div>
				</div>
			</div>
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
