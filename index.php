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
	 	<header>
	 		<div class="container">

	 			<div class="header_menu">
	 				<div class="col-md-3 header_menu_logo">
	 					<div class="row">
	 						<a href="#">MAKHESHVARA</a>
	 					</div>
	 				</div>
	 				<div class="col-md-9 header_menu_panel">
	 					<div class="row">
	 						<div class="header_menu_panel_items">
		 						<a class="" href="#">ADMIN</a>
		 					</div>
	 						<div class="header_menu_panel_items">
		 						<a class="active" href="#">HOME</a>
		 					</div>
	 					</div>
	 				</div>
	 			</div>

	 			<div class="header_content">
	 				<div class="header_content_welcome">
	 					<h1>WELCOME ON <span>MAKHESHVARA</span></h1>
	 					<p>The parser is waiting for your instructions</p>
	 				</div>
	 				<div class="header_content_scroll">
	 					<a href="#parser">
	 						<div class="header_content_scroll_active">
	 							<img src="img/header_link.png">
	 							<div class="header_content_scroll_hover">
		 							<img src="img/header_link_hover.png">
		 						</div>
	 						</div>
	 					</a>
	 				</div>
	 			</div>
	 			
	 		</div>
	 	</header>

	 		<div class="container">
	 			<div class="parser" id="parser">
	 				<h2>Parser:</h2>

	 				<?php 
	 					$res = $db->query('SELECT * FROM name_parser');
						while ($row = $res->fetch(PDO::FETCH_ASSOC)){
							// echo $row['name'];
						}
	 				?>

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
	 									<input type="" name="">
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
	 									<input type="" name="">
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
	 									<input type="" name="">
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

	 	<footer>
	 		<div class="container">
	 			<div class="footer">
	 				<div class="col-md-12 footer_text">
	 					<div class="row">
	 						ALL RIGHTS RESERVED. COPYRIGHT © 2018 <a href="#"><span class="">MAKHESHVARA</span></a>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</footer>
 	</div>

 <script type="text/javascript" src="js/jquery.min.js"></script>
<!-- <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous">
</script> -->
 <script src="js/toastr.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('.parser_items_panel_button_push').click(function(e){
 			toastr.error("Ошибка");
 		});
	
	});
 </script>
 </body>
 </html>