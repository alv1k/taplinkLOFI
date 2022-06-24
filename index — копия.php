<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		@lofi-homespa landing page
	</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<style type="text/css">
		body{
			background-image: url(3.jpg);
			background-size: cover;
			height: 100%; 
			margin: 0;
		}
		@import '~pretty-checkbox/scss/variables';
    	@import '~pretty-checkbox/scss/core';
		.heading{
			border-radius: 20px;
			background-color: #008278;
			margin-bottom: 30px;
		}
		.allText{
			font-family: Poiret One;
			font-size: 30px;
			text-align: center;
			color:  lightblue;
		}
		.options{
			border-radius: 10px;
			margin-top: 20px;
			text-align: center;
		}
		.blueBackground{			
			background-color: #008278;
		}
		
		.input-line{
			margin-bottom: 30px;
			margin-left: 40px;
		}
		

		.videoimgDiv{
			border-radius: 20px;
			background-color: #008278;
		}
		.dashed {
		    outline: 2px dashed rgba(255,255,255,0.8); /* Пунктирная рамка */
		    outline-offset: -5px; /* Выводим рамку внутри элемента */
		}
		.d-none{
			display: none;
		}
		.bombSize{
			height: 50px;
		}

		.relative{
			position: relative;
		}

	</style>
</head>
<body class="body">
	<div class="">
		<div class="row pt-md-3">			
			<div class="col-8 mx-auto p-2 heading col-md-8 landingButton" style="text-align:center;">
				<img class="col-6 col-sm-4 col-md-3" src="LOGO 20.06.png" >
				<p class="col allText col-md" style="color: lightblue;">lofi home spa</p>
			</div>

		</div>



		<div class="row col col-md-8 mx-md-auto bg-success">
			<div class=" col-md-6  blueBackground priceButton allText"> 
				<div class=" col-8 mx-auto col-md-6 options" style="">
					<p class="options blueBackground allText p-2" style="font-size: 20px;">
						бомбочка 250 p.
					</p>
					<p class="options blueBackground allText" style="font-size: 20px;">
						бальзам для губ 140 p.
					</p>
					<p class="options blueBackground allText p-2" style="font-size: 10px;">
						цена указана с доставкой
					</p>
				</div>
			</div>
			<div class="col col-md-6" style="background-color: #89C6CE;text-align: center; padding-top: 40px; padding-bottom: 20px;">
				<p class="allText" style="color: #008278">бомбочки для ванн в Якутске</p>
			</div>
		</div>		
		<div class="row col-md-8 ms-md-auto  options blueBackground p-2 chooseAll">
				<div class="col-6 row" style="text-align: left">
					<div class="col-4 ">
						<div>
							<img src="img/1.bmp" class="bombSize lightBlueBomb">
							
						</div>
						<div>
							<img src="img/2.bmp" class="bombSize cyanBomb">
						</div>
						<div>
							<img src="img/3.bmp" class="bombSize blueBomb">
						</div>

						<div>
							<img src="img/3.bmp" class="bombSize balm"> 
						</div>
					</div>
					<div class="col-6">
						<div>
							<p class="allText col-4 lightBlueBomb relative fs-4" style="">голубая</p>
						</div>
						<div>
							<p class="allText col-4 cyanBomb relative fs-4" name="cyanBomb" style="">бирюзовая</p>
						</div>
						<div>
							<p class="allText col-4 blueBomb relative fs-4" style="">синяя</p>
						</div>

						<div>
							<p class="allText col-4 balm relative fs-4" style="">бальзам</p>
						</div>
					</div>
					<div class="col-2">
						<form action="" method="get">
						<div>
							<p class="allText col-4 bombCountLinghtBlue relative fs-4" name="howMuchBombsLB" style="">0 </p>
						</div>
						<div>
							<p class="allText col-4 bombCountCyan relative fs-4"  name="howMuchBombsC" style="">0 </p>
						</div>
						<div>
							<p class="allText col-4 bombCountBlue relative fs-4"  name="howMuchBombsB" style="">0 </p>
						</div>

						<div>
							<p class="allText col-4 balmCount relative fs-4"  name="howMuchBalms" style="">0 </p>
						</div>
					</div>
					


					<div class="clearCart allText">очистить</div>
				</div>

				<div class="col-6">
					<div style="margin-bottom: 30%; margin-top: 20%;" class="allText itogo">0р.</div>
					<button class="allText blueBackground submit" style="color: lightblue;  border-radius: 20px;">подтвердить</button>
						</form>
					
				</div>
					
		</div>
		<div class="row col-md-8 ms-md-auto  options  p-2 choosenAll" style="display: none;">
			<div class="mt-2 blueBackground">
				<p class="allText">Вы выбрали</p> 
				<p class="d-none bombDiv allText" style="font-size:16px;"><span class="howMuchBombs "> </span><span class="bathBombWordColor"></span><span class="bathBombWord"></span></p>
				<p class="d-none balmDiv allText" style="font-size:16px;"><span class="howMuchBalms "> </span><span class="balmWord"></span></p>
				<p class="allText">Общая сумма <span class="itogo"></span></p>
			</div>
			
			<div class="mt-2 blueBackground">
				<p class="allText" style="font-size:16px;">Произведите оплату через СБП </p>
				<p class="allText" style="font-size:16px;">по номеру телефона на карту Сбарбанк/Тинькофф</p>
				  <div class="coupon-row">
				    <p class="coupon-field allText" id="coupon-field">89142364278</p><button class="coupon-btn">Копировать номер телефона</button>
					<p class="allText" style="font-size:16px;">Получатель: Алексеева Алена В.</p>
				  </div>
					
			</div>
			
			<div class="coupon blueBackground">
			  
				<a class="allText border contactDeliveryDetails" style="font-size:16px;" href="https://wa.clck.bar/79142364278?text=Здравствуйте,%20я оплатил(а) заказ, адрес доставки:%20<?php echo $_GET['howMuchBombsLB']?>">Связаться для уточнения деталей доставки</a>
			</div>


		</div>



		<div class="col-md-8 mx-auto">
			<div class="video col-8 mx-auto col-md-12" style="margin-top: 20px;">
				<div class="col-12 options blueBackground allText col-md-12 mx-auto">видео</div>
					<div class="col-10 mx-auto mt-3 col-md-12" style="text-align: center;">
						<img style=" border-radius: 20px;" src="videobb/1-2.jpg" class="col-5 col-md-2 dashed click1">	
						<img style=" border-radius: 20px;" src="videobb/1-2.gif" class="col-5 col-md-2 dashed clicked1 d-none">	
						<img style=" border-radius: 20px;" src="videobb/2-2.jpg" class="col-5 col-md-2 dashed click2">		
						<img style=" border-radius: 20px;" src="videobb/2-2.gif" class="col-5 col-md-2 dashed clicked2 d-none">	
						<img style=" border-radius: 20px;" src="videobb/3-2.jpg" class="col-5 col-md-2 mt-2 dashed click3">	
						<img style=" border-radius: 20px;" src="videobb/3-2.gif" class="col-5 col-md-2 mt-2 dashed clicked3 d-none">
						<img style=" border-radius: 20px;" src="videobb/4-2.jpg" class="col-5 col-md-2 mt-2 dashed click4">
						<img style=" border-radius: 20px;" src="videobb/4-2.gif" class="col-5 col-md-2 mt-2 dashed clicked4 d-none">	
					</div>
				
			</div>
			<div class="wallpaper col-8 col-md-12 mx-auto"style="margin-top: 30px;">

				<div class="col-12 options blueBackground allText col-md-12 mx-auto">обои на телефон</div>
				
					
				<div class="row mx-auto mt-3 col" >
					<div class="row col-md-8 col-lg-9">
						<img src="wallpaper/3-1.jpg" class="d-block col-4 col-md-6 col-lg-4" alt="...">

					      <img src="wallpaper/4-1.jpg" class="d-block col-4 col-md-6 col-lg-4" alt="...">

					      <img src="wallpaper/2-1.jpg" class="d-block col-4 col-md-6 mt-md-2 col-lg-4" alt="...">
					</div>
					      
					
				
					<div class="col-12 options blueBackground allText  mx-auto col-md-4  col-lg-3" style="font-size: 18px;">чтобы скачать такие обои, перейдите в телеграм группу <br> <a  href="https://t.me/+O38SM3UbDTpmN2Ri" class="fs-md-5 fs-3" style="font-size:20px; color: lightblue;"> lofi home spa </a></div>
				</div>
			</div>
		</div>
	

		<div class=" col-8 mx-auto col-md-6 options blueBackground allText p-2" style="margin-top: 70px;">
			<p class="col-12 options blueBackground allText col-md-8 mx-auto" style="margin: 0px;">напишите нам:</p>
			
			<a style="text-decoration: none; color: lightblue" href="https://wa.clck.bar/79142364278?text=Здравствуйте,%20">
				<img src="whatsapp.png" class="col-1"> 
			</a>
			<a style="text-decoration: none; color: lightblue; margin-left: 20px;" href="https://t-do.ru/al_v1k">
				<img src="telegram.png" class="col-1">
			</a>
			<a style="text-decoration: none; color: lightblue; margin-left: 20px;" href="https://www.instagram.com">
				<img src="instagram.png" class="col-1">
			</a>

		</div>
	</div>
	
	<script src="script.js" >
		
	</script>
	
</body>
</html>