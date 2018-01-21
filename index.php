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

	 				

	 			</div>
	 		</div>

	 		<?php get_footer(); ?>

 	</div>

 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script src="js/toastr.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){

 		// парсинг
 		$('.parser_items_panel_button_push').click(function(e){
            var parserValue = $(".subscribe_text").val();

            // проверка на пустое поле
            if($(".parser_items_panel_href_save").val() == ""){
                $(".parser_items_panel_href_save").css('border', '5px solid #FBAC45');
                toastr.error("Заполните поле, куда сохранить данные");
            }
            // остальные случаи
            else{
                $.ajax({
                    type: "POST",
                    url: "function/parser.php",
                    data: {text: parserValue},
                    success: function(html)
                    {

                    	 $('.parser_items_panel_return').text(html);

                        // console.log(html.status);

                        // if(html == "Вы успешно подписались"){ toastr.success(html);}

                        // if(html == "Не корректный email"){ toastr.error(html);}
                        // if(html == "Вы уже подписаны"){ toastr.info(html);}
                    }
                });
            }
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