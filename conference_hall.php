<html>
    <head>
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="style/conference_hall.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>conference hall</title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
			var now = 0
			$(document).ready(function(){
				count = $('.bed1 .bed-1-1').length
				$("#Right1").click(function () {
					if(now>0){
					now-=1
					}else{now=count-1}
					$('.bed1 .bed-1-1').css('display','none')
					$('.bed1 .bed-1-1:eq('+now+')').fadeIn(200)
					console.log($('.bed1 .bed-1-1:eq('+now+')'))
					
				});
				
				$("#Left1").click(function () {
					if(now<count-1){
					now+=1
					}else{now=0}
					$('.bed1 .bed-1-1').css('display','none')
					$('.bed1 .bed-1-1:eq('+now+')').fadeIn(200)
					console.log($('.bed1 .bed-1-1:eq('+now+')'))
				
				});
			});
		</script>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
			<div class="main">
				<div class="bed1">
					<div class="bed-1-1" id="bed1-1"></div>
					<div class="bed-1-1" id="bed1-2"></div>
					<div class="bed-1-1" id="bed1-3"></div>
					
					<div class="triggers">
						<div id="Right1"><img src="img/previous.png"></div>
						<div id="Left1"><img src="img/next.png"></div>
					</div>
				</div>
				<div class="cont">
					<div class="cont1">
						<p><?php echo $language[$lang]['konf_text'] ?></p>
						<div class="wrap">
							<div class="flex">
								<h2><?php echo $language[$lang]['area'] ?></h2>
								<p><?php echo $language[$lang]['info_area'] ?></p>
							</div>
							<div class="flex">
								<h2><?php echo $language[$lang]['guests'] ?></h2>
								<p>50  |  35  |  25  </p>
							</div>
							<div class="flex">
								<h2><?php echo $language[$lang]['price'] ?></h2>
								<p><?php echo $language[$lang]['info_price'] ?></p>
							</div>
							<div class="flex">
								<h2></h2>
								<p>350 EUR (17:00-23.00)</p>
							</div>
							<div class="flex">
								<h2><?php echo $language[$lang]['rezervation'] ?></h2>
								<p>+371 299444344  |  sandis@gutenbergs.lv</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
