<?php
/**
 *
 * @package phpBB Sitemaker [English]
 * @copyright (c) 2019 Daniel A. (blitze)
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
	'AUTHOR'			=> 'автор',
	'AUTHORS'			=> 'авторы',
	'BITRATE'			=> 'битрейт',
	'CAPTIONS'			=> 'подписи',
	'CATEGORIES'		=> 'категории (массив)',
	'CATEGORY'			=> 'категория',
	'CHANNELS'			=> 'каналы',
	'CONTENT'			=> 'контент',
	'CONTRIBUTOR'		=> 'участник',
	'CONTRIBUTORS'		=> 'участники (массив)',
	'COPYRIGHT'			=> 'авторское право',
	'CREDITS'			=> 'кредиты',
	'DATE'				=> 'дата',
	'DESCRIPTION'		=> 'описание',
	'DURATION'			=> 'продолжительность',
	'ENCLOSURE'			=> 'Вложение',
	'ENCLOSURES'		=> 'вложения (arrayмассив,
	'FEED'				=> 'Кормить',
	'FRAMERATE'			=> 'частота кадров',
	'GMDATE'			=> 'GM дата',
	'HANDLER'			=> 'обработчик',
	'HASHES'			=> 'хэши',
	'HEIGHT'			=> 'высота',
	'ID'				=> 'id',
	'IMAGE_HEIGHT'		=> 'image высота',
	'IMAGE_LINK'		=> 'image ссылка',
	'IMAGE_TITLE'		=> 'image заголовок
	'IMAGE_URL'			=> 'image ссылка',
	'IMAGE_WIDTH'		=> 'image длина',
	'ITEMS'				=> 'пункт',
	'JAVASCRIPT'		=> 'javascript',
	'KEYWORDS'			=> 'ключевые слова',
	'LABEL'				=> 'метка',
	'LANG'				=> 'языки',
	'LATITUDE'			=> 'широта',
	'LENGTH'			=> 'высота',
	'LINK'				=> 'ссылка',
	'LINKS'				=> 'ссылки',
	'LONGITUDE'			=> 'долгота',
	'MEDIUM'			=> 'средняя',
	'NAME'				=> 'имя',
	'PERMALINK'			=> 'постоянная ссылка',
	'PLAYER'			=> 'pпроигрыватель',
	'RATINGS'			=> 'рейтинги',
	'RELATIONSHIP'		=> 'отношения',
	'RESTRICTIONS'		=> 'отношения (массив)',
	'SAMPLINGRATE'		=> 'частота выборки',
	'SCHEME'			=> 'схема',
	'SOURCE'			=> 'источник',
	'TERM'				=> 'срок',
	'THUMBNAILS'		=> 'эскизы',
	'TITLE'				=> 'заглавие',
	'TYPE'				=> 'тип',
	'UPDATED_DATE'		=> 'обновленная дата',
	'UPDATED_GMDATE'	=> 'обновленная GM dдата',
	'VALUE'				=> 'значение',
	'WIDTH'				=> 'ширина',
);

$lang = array_merge($lang, $strings);
