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
	'ICON_ALERT'				=> 'Тревога',
	'ICON_ANIMALS'				=> 'Животные',
	'ICON_ARROWS'				=> 'Стрелки',
	'ICON_AUDIO_VIDEO'			=> 'Аудио & Видео',
	'ICON_AUTOMOTIVE'			=> 'Автоматизация',
	'ICON_AUTUMN'				=> 'Осень',
	'ICON_BEVERAGE'				=> 'Напиток',
	'ICON_BRANDS'				=> 'Брэнд',
	'ICON_BUILDINGS'			=> 'Строения',
	'ICON_BUSINESS'				=> 'Бизнесс',
	'ICON_CAMPING'				=> 'Кэмпинг',
	'ICON_CHARITY'				=> 'Благотворительность',
	'ICON_CHAT'					=> 'Чат',
	'ICON_CHESS'				=> 'Шахматы',
	'ICON_CHILDHOOD'			=> 'Детство',
	'ICON_CLOTHING'				=> 'Одежда',
	'ICON_CODE'					=> 'Код',
	'ICON_COMMUNICATION'		=> 'Коммуникации',
	'ICON_COMPUTERS'			=> 'Компьютеры',
	'ICON_CONSTRUCTION'			=> 'Строительство',
	'ICON_CURRENCY'				=> 'Валюта',
	'ICON_DATE_TIME'			=> 'Дата & Время',
	'ICON_DESIGN'				=> 'Дизайн',
	'ICON_EDITORS'				=> 'Редакторы',
	'ICON_EDUCATION'			=> 'Образование',
	'ICON_EMOJI'				=> 'Emoji',
	'ICON_ENERGY'				=> 'Энергия',
	'ICON_FILES'				=> 'Файлы',
	'ICON_FINANCE'				=> 'Финансы',
	'ICON_FITNESS'				=> 'Фитнесс',
	'ICON_FOOD'					=> 'Еда',
	'ICON_FRUIT_VEGETABLE'		=> 'Фрукты & Овощи',
	'ICON_GAMES'				=> 'Игры',
	'ICON_GAMING_TABLETOP'		=> 'Настольные игры',
	'ICON_GENDER'				=> 'Пол',
	'ICON_HALLOWEEN'			=> 'Halloween',
	'ICON_HANDS'				=> 'Руки',
	'ICON_HEALTH'				=> 'Здоровье',
	'ICON_HOLIDAY'				=> 'Выходные',
	'ICON_HOTEL'				=> 'Отель',
	'ICON_HOUSEHOLD'			=> 'Домашнее хозяйство',
	'ICON_IMAGES'				=> 'Изображения',
	'ICON_INTERFACES'			=> 'Интерфейсы',
	'ICON_LOGISTICS'			=> 'Логистика',
	'ICON_MAPS'					=> 'Карты',
	'ICON_MARITIME'				=> 'Море',
	'ICON_MARKETING'			=> 'Маркетинг',
	'ICON_MATHEMATICS'			=> 'Математика',
	'ICON_MEDICAL'				=> 'Медицина',
	'ICON_MOVING'				=> 'Движения',
	'ICON_MUSIC'				=> 'Музыка',
	'ICON_OBJECTS'				=> 'Объекты',
	'ICON_PAYMENTS_SHOPPING'	=> 'Платежи & Покупки',
	'ICON_PHARMACY'				=> 'Аптеки',
	'ICON_POLITICAL'			=> 'Политика',
	'ICON_RELIGION'				=> 'Религия',
	'ICON_SCIENCE'				=> 'Наука',
	'ICON_SCIENCE_FICTION'		=> 'Научная фантастика',
	'ICON_SECURITY'				=> 'Охрана',
	'ICON_SHAPES'				=> 'Фигуры',
	'ICON_SHOPPING'				=> 'Покупки',
	'ICON_SOCIAL'				=> 'Общество',
	'ICON_SPINNERS'				=> 'Spinners',
	'ICON_SPORTS'				=> 'Спорт',
	'ICON_SPRING'				=> 'Весна',
	'ICON_STATUS'				=> 'Статус',
	'ICON_SUMMER'				=> 'Лето',
	'ICON_TOGGLE'				=> 'Переключатель',
	'ICON_TRAVEL'				=> 'Путешествие',
	'ICON_USERS_PEOPLE'			=> 'Пользователи & Люди',
	'ICON_VEHICLES'				=> 'Транспорт',
	'ICON_WEATHER'				=> 'Погода',
	'ICON_WINTER'				=> 'Зима',
	'ICON_WRITING'				=> 'Письма',


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
	'ICON_SIZE_XS'				=> 'Очень маленький',
	'ICON_SIZE_2X'				=> '2x',
	'ICON_SIZE_3X'				=> '3x',
	'ICON_SIZE_4X'				=> '4x',
	'ICON_SIZE_5X'				=> '5x',
	'ICON_SIZE_6X'				=> '6x',
	'ICON_SIZE_7X'				=> '7x',
	'ICON_SIZE_8X'				=> '8x',
	'ICON_SIZE_9X'				=> '9x',
	'ICON_SIZE_10X'				=> '10x',

	'NO_ICON'				=> 'Без иконки',
));
