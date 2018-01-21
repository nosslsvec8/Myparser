<?php 
	include_once "core/start.php"; 
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>My parser</title>
 	<meta charset="UTF-8">
 	<link rel="SHORTCUT ICON" href="img/miniature.jpg" type="image/jpg">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/toastr.css">
 </head>
 <body>
 	<div class="my_parser">
	 	
	 	<?php get_feader(); ?>

	 		<div class="container">
	 			<div class="parser" id="parser">
	 				<h2>Parser:</h2>

	 				<div class="parser_items">
	 					<h3>Маг на полную ставку</h3>
	 					<div class="col-md-12 parser_items_panel">
	 						<div class="row">
	 							<div class="col-md-5 parser_items_panel_link">
	 								<div class="row">
	 									<a href="http://tl.rulate.ru/book/422">http://tl.rulate.ru/book/422</a>
	 								</div>
	 							</div>
	 							<div class="col-md-5 parser_items_panel_href">
	 								<div class="row">
	 									<input type="" name="" placeholder="Куда сохранить">
	 								</div>
	 							</div>
	 							<div class="col-md-2 parser_items_panel_button">
	 								<div class="row">
	 									<button class="parser_items_panel_button_push">Запуск</button>
	 								</div>
	 							</div>	 						
	 						</div>
	 					</div>
	 				</div>

	 				<div class="parser_items">
	 					<h3>Маг на полную ставку</h3>
	 					<div class="col-md-12 parser_items_panel">
	 						<div class="row">
	 							<div class="col-md-5 parser_items_panel_link">
	 								<div class="row">
	 									<a href="http://tl.rulate.ru/book/422">http://tl.rulate.ru/book/422</a>
	 								</div>
	 							</div>
	 							<div class="col-md-5 parser_items_panel_href">
	 								<div class="row">
	 									<input type="" name="" placeholder="Куда сохранить">
	 								</div>
	 							</div>
	 							<div class="col-md-2 parser_items_panel_button">
	 								<div class="row">
	 									<button class="parser_items_panel_button_push">Запуск</button>
	 								</div>
	 							</div>	 						
	 						</div>
	 					</div>
	 				</div>

	 				<div class="parser_items">
	 					<h3>Маг на полную ставку</h3>
	 					<div class="col-md-12 parser_items_panel">
	 						<div class="row">
	 							<div class="col-md-5 parser_items_panel_link">
	 								<div class="row">
	 									<a href="http://tl.rulate.ru/book/422">http://tl.rulate.ru/book/422</a>
	 								</div>
	 							</div>
	 							<div class="col-md-5 parser_items_panel_href">
	 								<div class="row">
	 									<input type="" name="" placeholder="Куда сохранить">
	 								</div>
	 							</div>
	 							<div class="col-md-2 parser_items_panel_button">
	 								<div class="row">
	 									<button class="parser_items_panel_button_push">Запуск</button>
	 								</div>
	 							</div>	 						
	 						</div>
	 					</div>
	 				</div>

	 			</div>
	 		</div>

	 		<?php get_footer(); ?>

 	</div>

 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script src="js/toastr.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){

 		// Вывод информации об результате парсинга на кнопке
 		$('.parser_items_panel_button_push').click(function(e){
 			toastr.error("Не настроено");
 		});

 		// плавный скрол
 		$("#header_content_scroll").on("click","a", function (event) {
	        event.preventDefault();//отменяем стандартную обработку нажатия по ссылке
	        var id  = $(this).attr('href'),
	        top = $(id).offset().top;//узнаем высоту на который ссылается якорь
	        $('body,html').animate({scrollTop: top}, 1500);//анимируем за 1500 мс
	    });
	
	});
 </script>
 </body>
 </html>