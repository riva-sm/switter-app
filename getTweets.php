<?php

		$query = "SELECT * FROM `tweets` order BY date DESC"; // вывод твиттов из БД

	$result = mysqli_query($link, $query);  

	// проверяем запрос на ошибки, если да, остановка программы, нет — далее следуем

		if ( !$result ) {
				die(mysqli_error($link));

		}

			$numRows =  mysqli_num_rows($result); // количество рядов твиттов

			$tweets = array(); // массив с твиттами
			// обходим циклом все твитты

			for ( $i = 0; $i < $numRows; $i++) {
						$row = mysqli_fetch_assoc($result);
						$tweets[] = $row;

			}

?>