<?php
/**
 *
 * @package phpBB Sitemaker [English]
 * @copyright (c) 2013 Daniel A. (blitze)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

/*
* These are errors which can be triggered by sending invalid data to the
* boardrules extension API.
*
* These errors will never show to a user unless they are either modifying
* the core boardrules extension code OR unless they are writing an extension
* which makes calls to this extension.
*
* Translators: Feel free to not translate these language strings
*/
$strings = array(
	'LIST_FLAT'				=> 'Плоский список',
	'LIST_ARROW'			=> 'Маркер списка стрелкой',
	'LIST_CIRCLE'			=> 'Маркер круга',
	'LIST_DISC'				=> 'Ядро списка маркеров',
	'LIST_SQUARE'			=> 'Квадратный маркер списка',
	'LIST_NUMBERED'			=> 'Нумерованный список',
	'LIST_INLINE'			=> 'Встроенный список',
	'LIST_INLINE_SEP'		=> 'Список через запятую',
	'LIST_HOVER'			=> 'Выделите при наведении',
	'LIST_STRIPED'			=> 'Полосатый список',
	'LIST_STACKED'			=> 'Сложенный список',
	'LIST_AUTOWIDTH'		=> 'Авто ширина',
	'LIST_FIT_CONTENT'		=> 'Подходит содержание',
	'LIST_2COLS'			=> '2 список столбцов',
	'LIST_3COLS'			=> '3 список столбцов',
	'LIST_4COLS'			=> '4 список столбцов',
	'LIST_5COLS'			=> '5 список столбцов',
	'LIST_X_DIVIDER_DOTTED'	=> 'Горизонтальный точечный разделитель',
	'LIST_X_DIVIDER_LINE'	=> 'Горизонтальный разделитель',
	'LIST_Y_DIVIDER_DOTTED'	=> 'Вертикальный пунктирный разделитель',
	'LIST_Y_DIVIDER_LINE'	=> 'Вертикальный разделитель',

	'IMAGE_SMALL'			=> 'Маленькое изображение',
	'IMAGE_MEDIUM'			=> 'Среднее изображение',
	'IMAGE_LARGE'			=> 'Большое изображение',
	'IMAGE_FULL_WIDTH'		=> 'Изображение полной ширины',
	'IMAGE_ALIGN_LEFT'		=> 'Изображение с плавающей точкой слева',
	'IMAGE_ALIGN_RIGHT'		=> 'Изображение с плавающей точкой справа',
	'IMAGE_CIRCLE'			=> 'Круглое изображение',
	'IMAGE_ROUNDED'			=> 'Округленное изображение',
	'IMAGE_BORDER'			=> 'Граничное изображение',
	'IMAGE_BORDER_PADDING'	=> 'Заполнение границ изображения',
	'IMAGE_RATIO_SQUARE'	=> 'Квадратное изображение',
	'IMAGE_RATIO_4_BY_3'	=> 'Изображение 4 на 3',
	'IMAGE_RATIO_16_BY_9'	=> 'Изображение 16 на 9',

	'RESPONSIVE_SHOW'		=> 'Показывать только на небольших устройствах',
	'RESPONSIVE_HIDE'		=> 'Скрыть на небольших устройствах',

	'ALIGN_LEFT'			=> 'Выровненный по левому краю текст',
	'ALIGN_CENTER'			=> 'Центрированный текст',
	'ALIGN_RIGHT'			=> 'Выровненный по правому краю текст',
	'NO_PADDING'			=> 'Без подкладки',
	'LABEL'					=> 'Метка',
	'BADGE'					=> 'Знак',
	'PRIMARY_COLOR'			=> 'Основной цвет',
	'SECONDARY_COLOR'		=> 'Вторичный цвет',
	'GRAYSCALE_COLOR'		=> 'Оттенки серого',
	'INFO_COLOR'			=> 'Info',
	'SUCCESS_COLOR'			=> 'Удачно',
	'WARNING_COLOR'			=> 'Внимание',
	'DANGER_COLOR'			=> 'Опасно',
);

$lang = array_merge($lang, $strings);
