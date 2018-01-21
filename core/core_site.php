<?php 

	function conect_BD(){
		$user = 'mysql'; $password = 'mysql'; $database = 'My_parser'; $server = 'localhost';
		return new PDO('mysql:host=localhost;dbname=My_parser', $user, $password);
	}

	function close_BD(){
		return  $db = NULL;
	}

	// Вывод предметов парсинга 
	function get_parser_items(){
		$db = conect_BD();
	 	$res = $db->query('SELECT * FROM name_parser');
		while ($row = $res->fetch(PDO::FETCH_ASSOC)){
			echo '
			<div class="parser_items">
		 		<h3>' . $row['name'] . '</h3>
		 		<div class="col-md-12 parser_items_panel">
		 			<div class="row">
		 				<div class="col-md-5 parser_items_panel_link">
		 					<div class="row">
		 						<a href="' . $row['link'] . ' ">' . $row['link'] . '</a>
		 					</div>
		 				</div>
		 				<div class="col-md-5 parser_items_panel_href">
		 					<div class="row">
		 						<input type="" name="" class="parser_items_panel_href_save" placeholder="Куда сохранить данные">
		 					</div>
		 				</div>
		 				<div class="col-md-2 parser_items_panel_button">
		 					<div class="row">
		 						<button class="parser_items_panel_button_push">Запуск</button>
		 					</div>
		 				</div>
		 				<div class="parser_items_panel_return"></div>	 						
		 			</div>
		 		</div>
		 	</div>
			';
		}
	};

