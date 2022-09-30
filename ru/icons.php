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

$lang = array_merge($lang, array(
	'ICON_ACCESSIBILITY'		=> 'Доступность',
	'ICON_ARROWS'				=> 'Стрелки',
	'ICON_BRAND'				=> 'Брэнд',
	'ICON_CHART'				=> 'График',
	'ICON_CURRENCY'				=> 'Валюта',
	'ICON_DIRECTIONAL'			=> 'Направление',
	'ICON_FILE_TYPE'			=> 'Тип файла',
	'ICON_FORM_CONTROL'			=> 'Управление формой',
	'ICON_GENDER'				=> 'Пол',
	'ICON_HAND'					=> 'Рука',
	'ICON_MEDICAL'				=> 'Медицина',
	'ICON_PAYMENT'				=> 'Платежи',
	'ICON_SPINNER'				=> 'Spinner',
	'ICON_TEXT_EDITOR'			=> 'Текстовый редактор',
	'ICON_TRANSPORTATION'		=> 'Транспортировка',
	'ICON_VIDEO_PLAYER'			=> 'Проигрыватель',
	'ICON_WEB_APPLICATION'		=> 'Web приложение',

	'ICON_COLOR'				=> 'Цвет',
	'ICON_DEFAULT'				=> 'По умолчанию',
	'ICON_FLIP_BOTH'			=> 'Отразить',
	'ICON_FLIP_HORIZONTAL'		=> 'Отразить горизонтально',
	'ICON_FLIP_VERTICAL'		=> 'Отразить вертикально',
	'ICON_FLOAT'				=> 'Обтекание',
	'ICON_FLOAT_LEFT'			=> 'Обтекание слева',
	'ICON_FLOAT_RIGHT'			=> 'Обтекание справа',
	'ICON_FONT'					=> 'Иконки шрифтов',
	'ICON_INSERT_UPDATE'		=> 'Вставить/Обновить',
	'ICON_MISC'					=> 'Прочее',
	'ICON_MISC_BORDERED'		=> 'Границы',
	'ICON_MISC_FIXED_WIDTH'		=> 'Фиксированная ширина',
	'ICON_MISC_PULSE'			=> 'Pulse',
	'ICON_MISC_SPINNING'		=> 'Spinning',
	'ICON_ROTATION'				=> 'Вращение',
	'ICON_ROTATE_90'			=> '90°',
	'ICON_ROTATE_180'			=> '180°',
	'ICON_ROTATE_270'			=> '270°',
	'ICON_SIZE'					=> 'Размер',
	'ICON_SIZE_LG'				=> 'Больше',
	'ICON_SIZE_SM'				=> 'Маленький',
	'ICON_SIZE_2X'				=> '2x',
	'ICON_SIZE_3X'				=> '3x',
	'ICON_SIZE_4X'				=> '4x',
	'ICON_SIZE_5X'				=> '5x',

	'NO_ICON'				=> 'Без иконки',
));
