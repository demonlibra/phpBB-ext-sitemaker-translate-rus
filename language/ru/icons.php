<?php
/**
*
* @package phpBB Sitemaker [English]
* @copyright (c) 2012 Daniel A. (blitze)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$strings = array(
	'ICON_ACCESSIBILITY'	=> 'Доступность',
	'ICON_BRAND'			=> 'Марка',
	'ICON_CHART'			=> 'Диаграмма',
	'ICON_COLOR'			=> 'Цвет',
	'ICON_COLOR_DEFAULT'	=> 'Цвет по умолчанию',
	'ICON_CURRENCY'			=> 'Валюта',
	'ICON_DIRECTIONAL'		=> 'Направленный',
	'ICON_FILE_TYPE'		=> 'Тип файла',
	'ICON_FLIP_HORIZONTAL'	=> 'Отразить по горизонтали',
	'ICON_FLIP_VERTICAL'	=> 'Отразить по вертикали',
	'ICON_FLOAT'			=> 'Float',
	'ICON_FLOAT_LEFT'		=> 'Лево',
	'ICON_FLOAT_RIGHT'		=> 'Право',
	'ICON_FONT'				=> 'Иконки шрифта',
	'ICON_FORM_CONTROL'		=> 'Контроль формы',
	'ICON_GENDER'			=> 'Пол',
	'ICON_HANDS'			=> 'Рука',
	'ICON_IMAGE'			=> 'Картинка',
	'ICON_INSERT_UPDATE'	=> 'Вставить / Обновить',
	'ICON_MEDICAL'			=> 'Медицина',
	'ICON_MISC'				=> 'Разное',
	'ICON_MISC_BORDERED'	=> 'Окаймленный',
	'ICON_MISC_FIXED_WIDTH'	=> 'Фиксированная ширина',
	'ICON_MISC_SPINNING'	=> 'Врашение',
	'ICON_PAYMENT'			=> 'Плетеж',
	'ICON_ROTATION'			=> 'Поворот',
	'ICON_ROTATION_90_DEG'	=> '90°',
	'ICON_ROTATION_180_DEG'	=> '180°',
	'ICON_ROTATION_270_DEG'	=> '270°',
	'ICON_SIZE'				=> 'Размер',
	'ICON_SIZE_DEFAULT'		=> 'По умолчанию',
	'ICON_SIZE_LARGER'		=> 'Больше',
	'ICON_SPINNER'			=> 'Врашающийся',
	'ICON_TEXT_EDITOR'		=> 'Редакторы текста',
	'ICON_TRANSPORTATION'	=> 'Транспорт',
	'ICON_VIDEO_PLAYER'		=> 'Video Player',
	'ICON_WEB_APPLICATION'	=> 'Веб приложение',

	'NO_ICON'				=> 'Без иконки',
);

$lang = array_merge($lang, $strings);