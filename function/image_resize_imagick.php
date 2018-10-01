<?php 

function createThumbnail($imagePath, $cropWidth = 100, $cropHeight = 100){

	/* Чтение изображения */
	$imagick = new Imagick($imagePath);
	$width = $imagick->getImageWidth();
	$height = $imagick->getImageHeight();

	// Изменение размера
	$imagick->thumbnailImage($cropWidth, $cropHeight);

	// Определяем размеры полученной миниатюры
	$width = $imagick->getImageWidth();
	$height = $imagick->getImageHeight();

	// Определяем центр изображения
	$centreX = round($width / 2); // 300
	$centreY = round($height / 2); // 150

	// Определяем точку  для обрезки по центру 
	$cropWidthHalf  = round($cropWidth / 2);
	$cropHeightHalf = round($cropHeight / 2);

	// Координаты для старта  отбрезки
	$startX = max(0, $centreX - $cropWidthHalf);
	$startY = max(0, $centreY - $cropHeightHalf);
	$imagick->cropImage($cropWidth, $cropHeight, $startX, $startY);

	// Возвращаем готовое изображение
	return $imagick;

}

?>