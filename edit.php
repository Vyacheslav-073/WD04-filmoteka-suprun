<?php 

// DB CONNECTION
require('config.php');
require('database.php');

$link = db_connect();

require('models/films.php');
require('function/login-functions.php');

//UPDATE film data in DB
if (array_key_exists('update-film', $_POST)) {

	// Обработка ошибок
	if ( $_POST['title'] == '' ) {
		$errors[] = "Необходимо ввести название фильма!";
	}

	if ( $_POST['genre'] == '' ) {
		$errors[] = "Необходимо ввести жанр фильма!";
	}

	if ( $_POST['year'] == '' ) {
		$errors[] = "Необходимо ввести год фильма!";
	}

	// Запись данных в БД если нет  ошибок
	if ( empty($errors)) {

		$result = film_update($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_GET['id'], $_POST['description']);

		if ( $result ) {
			$resultSuccess = "Фильм успешно обновлен!";

		} else {
			$resultError = "Что то пошло не так!";
		}
	}
}

$film = get_film($link, $_GET['id']);

include('views/head.tpl');
include('views/notification.tpl');
include('views/edit-film.tpl');
include('views/footer.tpl');

?>