<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/rooms.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <title>rooms</title>
		
		<!--FIRST GALLERY-->
		<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('.bed1 .bed-1-1').length
				
				$("#Right1").click(function () {
					if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('.bed1 .bed-1-1').css('display','none')
					$('.bed1 .bed-1-1:eq('+productnow+')').fadeIn(200)
					console.log($('.bed1 .bed-1-1:eq('+productnow+')'))
					
				});
				
				$("#Left1").click(function () {
				
				if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('.bed1 .bed-1-1').css('display','none')
					$('.bed1 .bed-1-1:eq('+productnow+')').fadeIn(200)
					console.log($('.bed1 .bed-1-1:eq('+productnow+')'))
				
				});
			});
		</script>
		<!--SECOND GALLERY-->
		<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('.bed2 .bed-2-2').length
				
				$("#Right2").click(function () {
					if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('.bed2 .bed-2-2').css('display','none')
					$('.bed2 .bed-2-2:eq('+productnow+')').fadeIn(200)
					console.log($('.bed2 .bed-2-2:eq('+productnow+')'))
					
				});
				
				$("#Left2").click(function () {
				
				if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('.bed2 .bed-2-2').css('display','none')
					$('.bed2 .bed-2-2:eq('+productnow+')').fadeIn(200)
					console.log($('.bed2 .bed-2-2:eq('+productnow+')'))
				
				});
			});
		</script>
		<!--THIRD GALLERY-->
		<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('.bed3 .bed-3-3').length
				
				$("#Right3").click(function () {
					if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('.bed3 .bed-3-3').css('display','none')
					$('.bed3 .bed-3-3:eq('+productnow+')').fadeIn(200)
					console.log($('.bed3 .bed-3-3:eq('+productnow+')'))
					
				});
				
				$("#Left3").click(function () {
				
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
					
					<div class="triggers">
						<div id="Right1"><img src="img/previous.png"></div>
						<div id="Left1"><img src="img/next.png"></div>
					</div>
				</div>
				<div class="cont">
					<div>
						<h1>Standard room <br> single/double</h1>
						<p>With a king size (220 x 180) bed, 2 bedside tables, a stand-lamp, a breakfast-table, 2 soft armchairs, a writing cabinet with a lamp, TV with international channels, a phone, Free WIFI Internet, a mini-bar. Twin room with two separate beds is available. In the bathroom – a shower or a bath at your option, a hair dryer, one power outlet, articles of personal hygiene - soap, shower gels, shower caps, 3 towels, but during summer also flowers. Room service, laundry service, ironing, car services, etc.</p>
						<a href="https://app.thebookingbutton.com/properties/hgutenbergsdirect">
    						<button>Book</button>
						</a>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="bed2">
					<div class="bed-2-2" id="bed2-1"></div>
					<div class="bed-2-2" id="bed2-2"></div>
					
					<div class="triggers">
						<div id="Right2"><img src="img/previous.png"></div>
						<div id="Left2"><img src="img/next.png"></div>
					</div>
				</div>
				<div class="cont">
					<div>
						<h1>Junior Suite <br> apartments</h1>
						<p>Single or double apartments with a comfortable, furnished anteroom that would fit for a small meeting of 4-6 people or a child's bedroom. With one or two king size beds, 2 bedside tables, a ceiling lamp, a breakfast-table, 2 soft armchairs, a writing cabinet with a lamp, TV with international channels, a phone, Free WiFi, a mini-bar, in the bathroom – heated tile floor. More conveniences – the same as before.</p>
						
						<a href="https://app.thebookingbutton.com/properties/hgutenbergsdirect">
    						<button>Book</button>
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
						<h1>De Luxe apartment</h1>
						<p>Single or double De Luxe apartment with a comfortable anteroom with a guest restroom. Further on from the anteroom – living room of 25 m2 with 4 windows, one opens to the very floor and a rocking-chair by the large TV-set. The living room has a comfortable writing cabinet, a chest of drawers, a mini-bar. Behind the bedroom – the second spacious restroom with a bath and heated floor. The living room can host a small party of 6-10 people or serve as a children's bedroom. In the bedroom – a TV, the large king size bed. More conveniences – the same as before.</p>
						<a href="https://app.thebookingbutton.com/properties/hgutenbergsdirect">
    						<button>Book</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
