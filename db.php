<?php

// подключение к БД ...

function db_connect($host, $db_user, $db_pass, $db_name) {
		$link = mysqli_connect($host, $db_user, $db_pass, $db_name);

		if (!mysqli_set_charset($link, "utf8") ) {
				printf("Error: ". mysqli_error($link));
		}
		return $link;
}

	$link = db_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>