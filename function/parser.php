<?php 


	function parser($url_site, $start_unique_element, $finish_unique_element){

		//взятие html кода сайта
		$find_element = strpos($url_site, $start_unique_element);

		// Проверка нашло или нет 
		if($find_element === false) return 0;

		//Обрезка от начала до $start_unique_element
		$find_get = substr($url_site, $find_element);

		// вывод чисто текст без тегов, как вариант
		// return strip_tags(substr($find_get, 0, strpos($find_get, $finish_unique_element)));

		// сохраняя теги (абзац, br, и прочее)
		$return = substr($find_get, 0, strpos($find_get, $finish_unique_element));

		$return = str_replace(array('<div id="readpage">', '<p>'), '', $return);

		$return = str_replace(array('</p>'), ' ', $return);
		
		$post = $_POST['text'];

		$file = "../" . $post;
		//если файла нету... тогда
		if (!file_exists($file)) {
		    $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
		    fwrite($fp, $return);
		    fclose($fp);
		}
		
		// return $return;
	};

	// Пример использования
	$String = file_get_contents('http://tl.rulate.ru/book/422/52734/ready');
	echo parser($String, '<div id="readpage">', '</div>');

?>