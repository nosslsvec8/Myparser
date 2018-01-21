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

	 				<?php get_parser_items(); ?>

	 				<?php get_parser_items(); ?>

	 				<?php get_parser_items(); ?>

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