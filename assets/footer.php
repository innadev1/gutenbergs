<link rel="stylesheet" type="text/css" href="style/footer.css">

<footer>
	<div id="footer">
		<div id="footer_logo"><img src="img/logo.png"></div>
		<div class="footer_links">
			<h3><?php echo $language[$lang]['visit'] ?></h3>
			<p>Doma laukums 1</p>
			<p>Rīga, Latvia</p>
		</div>
		<div class="footer_links">
			<h3><?php echo $language[$lang]['call'] ?></h3>
			<p>Receiption: <a href="tel:+371 22334455">+371 22334455</a></p>
			<p>Restaurant: <a href="tel:+37167211776">+37167211776</a></p>
		</div>
		<div class="footer_links">
			<h3><?php echo $language[$lang]['get_in_touch'] ?></h3>
			<p>info@gutenbergshotel.lv</p>
			<p>Skype: Gutenbergs.hotel</p>
		</div>
		<div class="footer_links">
			<h3><?php echo $language[$lang]['latest'] ?></h3>
			<div class="c wraping">
				<!--<div><img src="img/tw.png"></div>-->
				<div><a href="https://www.facebook.com/gutenbergsterase"><img src="img/f.png"></a></div>
				<div><a href="https://www.instagram.com/gutenbergs_riga/"><img src="img/in.png"></a></div>
				<!--<div><img src="img/y.png"></div>-->
			</div>
		</div>
		<div class="footer_links">
			<h3></h3>
			<div class="d wraping">

				<a href="http://www.marciena.eu/index.php/lv/">
					<img src="img/logo1.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
				</a>

				<a href="http://www.gutenbergs-apartment.lv/">
					<img src="img/logo2.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
				</a>
				
				<a href="https://www.tripadvisor.co.uk/Hotel_Review-g274967-d283717-Reviews-Hotel_Gutenbergs-Riga_Riga_Region.html">
					<img src="img/tripadvisor.png" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
				</a>

			</div>
		</div>
		
		<div class="footer_links">
		
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-page" 
			  data-href="https://www.facebook.com/gutenbergsterase"
			  data-width="280" 
			  data-hide-cover="false"
			  data-show-facepile="false"></div>

		</div>
	</div>
</footer>