<html>
    <head>
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">	
		<link rel="stylesheet" type="text/css" href="style/gallery.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
        <title>gallery</title>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>

	<div id="slider_">
		<div id="gallery">
		
		<div id="Left"><img src="img/left.png"></div>
			<div id="panel">
				<div id="close"><img src="img/close.png"></div>
				<img id="largeImage" src="img/gallery/1.jpg"/>
			</div>
			<div id="bg_layer"></div>
		<div id="Right"><img src="img/right.png"></div>
			<div id="thumbs">
				<img class="photo" src="img/gallery/1.jpg" alt="1st image description" />
				<img class="photo" src="img/gallery/2.jpg" alt="2nd image description" />
				<img class="photo" src="img/gallery/3.jpg" alt="3rd image description" />
				<img class="photo" src="img/gallery/4.jpg" alt="4th image description" />
				<img class="photo" src="img/gallery/5.jpg" alt="5th image description" />
				<img class="photo" src="img/gallery/6.jpg" alt="6th image description" />
				<img class="photo" src="img/gallery/7.jpg" alt="7th image description" />
				<img class="photo" src="img/gallery/8.jpg" alt="8th image description" />
				<img class="photo" src="img/gallery/9.jpg" alt="9th image description" />
				<img class="photo" src="img/gallery/10.jpg" alt="10th image description" />
				<img class="photo" src="img/gallery/11.jpg" alt="11th image description" />
				<img class="photo" src="img/gallery/12.jpg" alt="12th image description" />
				<img class="photo" src="img/gallery/13.jpg" alt="13th image description" />
				<img class="photo" src="img/gallery/14.jpg" alt="14th image description" />
				<img class="photo" src="img/gallery/15.jpg" alt="15th image description" />
				<img class="photo" src="img/gallery/16.jpg" alt="16th image description" />
				<img class="photo" src="img/gallery/17.jpg" alt="17th image description" />
				<img class="photo" src="img/gallery/18.jpg" alt="18th image description" />
				<img class="photo" src="img/gallery/19.jpg" alt="19th image description" />
				<img class="photo" src="img/gallery/20.jpg" alt="20th image description" />
				<img class="photo" src="img/gallery/21.jpg" alt="21th image description" />
				<img class="photo" src="img/gallery/22.jpg" alt="22th image description" />
				<img class="photo" src="img/gallery/23.jpg" alt="23th image description" />
				<img class="photo" src="img/gallery/24.jpg" alt="24th image description" />
				<img class="photo" src="img/gallery/25.jpg" alt="25th image description" />
				<img class="photo" src="img/gallery/26.jpg" alt="26th image description" />
				<img class="photo" src="img/gallery/27.jpg" alt="27th image description" />
				<img class="photo" src="img/gallery/28.jpg" alt="28th image description" />
				<img class="photo" src="img/gallery/29.jpg" alt="29th image description" />
				<img class="photo" src="img/gallery/30.jpg" alt="30th image description" />
			</div>
			
		</div>
	
	</div>
	<!--<div id="description"></div>-->
		<script>
		
		var now = 0
		var count =  $('#thumbs img').length
			$(document).ready(function(){

				
				$("#Right").click(function () {
					if(now<count-1){
					now++
					}else {
					now = 0
					}
					src = $('#thumbs img:eq('+now+')').attr('src')
					$('#largeImage').attr('src',src);
				});
				
				$("#Left").click(function () {
					if(now>0){
					now--
					}else {
					now = count-1
					}
					src = $('#thumbs img:eq('+now+')').attr('src')
					$('#largeImage').attr('src',src);
				});
				
			});


			$('#thumbs').delegate('img','click', function(){
				now = $(this).index()
				$('#largeImage').attr('src',$(this).attr('src'));
				<!--$('#description').html($(this).attr('alt'));-->
			});

		</script>
		<script>
		$(document).ready(function(){
			if ($('body').width() <= 900) {
				
				
			$('#thumbs').delegate('img','click', function(){
				now = $(this).index()
			$("#bg_layer").css("display","block");	
			$("#panel").css("display","block");
			$("#Right").css("display","block");
			$("#Left").css("display","block");
				
				$('#largeImage').attr('src',$(this).attr('src'));
			});	
			
			$("#close").click(function () {	
			$("#panel").css("display","none");
			$("#Right").css("display","none");
			$("#Left").css("display","none");
			$("#bg_layer").css("display","none");			
			});
			
			

			}
		});
		</script>
		
<!--	<div id="slider-wrap">
			<div id="slider">
				<div class="slide"><img src="img/background_4.jpg" width="100%" height="100%"></div>
				<div class="slide"><img src="img/background_2.jpg" width="100%" height="100%"></div>
				<div class="slide"><img src="img/background_3.jpg" width="100%" height="100%"></div>
				<div class="slide"><img src="img/background_2.jpg" width="100%" height="100%"></div>
			</div>
		</div>
		
		<script>
		(function ($) {
		var hwSlideSpeed = 700;
		var hwTimeOut = 3000;
		var hwNeedLinks = true;

		$(document).ready(function(e) {
			$('.slide').css(
				{"position" : "absolute",
				 "top":'0', "left": '0'}).hide().eq(0).show();
			var slideNum = 0;
			var slideTime;
			slideCount = $("#slider .slide").size();
			var animSlide = function(arrow){
				clearTimeout(slideTime);
				$('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
				if(arrow == "next"){
					if(slideNum == (slideCount-1)){slideNum=0;}
					else{slideNum++}
					}
				else if(arrow == "prew")
				{
					if(slideNum == 0){slideNum=slideCount-1;}
					else{slideNum-=1}
				}
				else{
					slideNum = arrow;
					}
				$('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
				$(".control-slide.active").removeClass("active");
				$('.control-slide').eq(slideNum).addClass('active');
				}
		if(hwNeedLinks){
		var $linkArrow = $('<a id="prewbutton" href="#"><</a><a id="nextbutton" href="#">></a>')
			.prependTo('#slider');		
			$('#nextbutton').click(function(){
				animSlide("next");
				return false;
				})
			$('#prewbutton').click(function(){
				animSlide("prew");
				return false;
				})
		}
			var $adderSpan = '';
			$('.slide').each(function(index) {
					$adderSpan += '<span class = "control-slide">' + index + '</span>';
				});
			$('<div class ="sli-links">' + $adderSpan +'</div>').appendTo('#slider-wrap');
			$(".control-slide:first").addClass("active");
			$('.control-slide').click(function(){
			var goToNum = parseFloat($(this).text());
			animSlide(goToNum);
			});
			var pause = false;
			var rotator = function(){
					if(!pause){slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut);}
					}
			$('#slider-wrap').hover(	
				function(){clearTimeout(slideTime); pause = true;},
				function(){pause = false; rotator();
				});
			rotator();
		});
		})(jQuery);
		</script>
-->	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
