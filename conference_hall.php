<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/conference_hall.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>conference hall</title>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
			<div class="main">
				<div class="bed1"></div>
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
