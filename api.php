<?php

require_once("config.php"); //config
require_once("db.php"); //$link

		// echo "Hello from api.php";
		// print_r($POST);

		if ( isset($_POST['tweetText'])) {
					$text = $_POST['tweetText'];

					// проверка на пустой твит
					if ( $text == '') {
							$errors[] = ['title' => 'Введите текст твита'];

					}
					// проверка на ошибки 
					if ( empty($errors)) {
							$text = mysqli_real_escape_string($link, $text);

							$query = "INSERT INTO tweets (date, text) VALUES (NOW(), '" . $text . "')";
							// соединяемся с базой данных, записываем твитт
							$result = mysqli_query($link, $query);
							// проверка
							if ( !$result ) {
									die(mysqli_error($link));
							}

							echo "success";

					} else {
							echo "error";
					}
		}
?>