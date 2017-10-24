<?php include 'assets/lang.php'; ?>

<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/about_us.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>about us</title>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
		<div id="main">
			<div class="main">
				<div class="bed1"></div>
				<div class="cont">
					<div style="text-align:center;">
						<img src="img/1.png">
						<h1><?php echo $language[$lang]['about_us'] ?></h1>
						<p>
						<?php echo $language[$lang]['about_us_text1'] ?>
						</p>
					</div>
				</div>
			</div>
			<div class="main2">
				<div class="bed2"></div>
				<div class="cont">
					<div>
						<p>
						<?php echo $language[$lang]['about_us_text2'] ?>
						</p>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="bed3"></div>
				<div class="cont">
					<div>
						<p>
						<?php echo $language[$lang]['about_us_text3'] ?>
						</p>
					</div>
				</div>
			</div>
			<div class="main2">
				<div class="bed4"></div>
				<div class="cont" id="cont_bed4">
					<div>
						<p>
						<?php echo $language[$lang]['about_us_text4'] ?>
						</p>
					</div>
				</div>
			</div>
			
			<div class="capt">
				<img src="img/1.png">
				<h2><?php echo $language[$lang]['for_disposal'] ?></h2>
			</div>
		<div id="apakseji">	
		
		<div class="this_buttons">
			<div><img id="Right" src="img/3.png"></div>
			<div><img id="Left" src="img/2.png"></div>
		</div>
		
			<div class="main" id="block1">
				<div class="bed5"></div>
				<div class="cont otrais">
					<div>
						<h1><?php echo $language[$lang]['for_people'] ?></h1>
						<p><?php echo $language[$lang]['for_people_text'] ?></p>
					</div>
				</div>
			</div>
			<div class="main" id="block2">
				<div class="bed6"></div>
				<div class="cont otrais">
					<div>
						<h1><?php echo $language[$lang]['for_relax'] ?></h1>
						<p><?php echo $language[$lang]['for_relax_text'] ?></p>
					</div>
				</div>
			</div>
			<div class="main" id="block3">
				<div class="bed7"></div>
				<div class="cont otrais">
					<div>
						<h1><?php echo $language[$lang]['for_health'] ?></h1>
						<p><?php echo $language[$lang]['for_health_text'] ?></p>
					</div>
				</div>
			</div>
			<div class="main" id="block4">
				<div class="bed8"></div>
				<div class="cont otrais">
					<div>
						<h1><?php echo $language[$lang]['for_disposal'] ?></h1>
						<p><?php echo $language[$lang]['for_disposal_text'] ?></p>
					</div>
				</div>
			</div>
		</div>
		
			<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('#apakseji .main').length
				
				$("#Right").click(function () {
					if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('#apakseji .main').css('display','none')
					$('#apakseji .main:eq('+productnow+')').fadeIn(200)
					console.log($('#apakseji .main:eq('+productnow+')'))
					
				});
				
				$("#Left").click(function () {
				
				if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('#apakseji .main').css('display','none')
					$('#apakseji .main:eq('+productnow+')').fadeIn(200)
					console.log($('#apakseji .main:eq('+productnow+')'))
				
				});
			});
			</script>
		
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
