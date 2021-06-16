<?php

/**
 * @copyright (c) 2013 Daniel A. (blitze)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_SITEMAKER'		=> 'SiteMaker',
	'ACP_SM_SETTINGS'	=> 'Настройки',

	'BLOCKS_CLEANUP'			=> 'Очистка блоков',
	'BLOCKS_CLEANUP_EXPLAIN'	=> 'Следующие элементы больше не существуют или не доступны, поэтому Вы можете удалить все связанные с ними блоки.',
	'BLOCKS_CLEANUP_BLOCKS'		=> 'Ошибка блока (например от удаленного расширения):',
	'BLOCKS_CLEANUP_ROUTES'		=> 'Недоступные/испорченные страницы:',
	'BLOCKS_CLEANUP_STYLES'		=> 'Удаленные стили (id):',
	'BLOCKS_CLEANUP_SUCCESS'	=> 'Блоки успешно удалены',

	'FORUM_INDEX_SETTINGS'			=> 'Настройки Главной страницы форума',
	'FORUM_INDEX_SETTINGS_EXPLAIN'	=> 'Эти настройки используются только если не задана начальная страница',

	'HIDE'			=> 'Скрыть',
	'HIDE_BIRTHDAY'	=> 'Скрыть раздел «ДНИ РОЖДЕНИЯ» в нижней части форума',
	'HIDE_LOGIN'	=> 'Скрыть раздел ’ВХОД - РЕГИСТРАЦИЯ’ в нижней части форума',
	'HIDE_ONLINE'	=> 'Скрыть раздел ’КТО СЕЙЧАС НА КОНФЕРЕНЦИИ’ в нижней части форума',

	'LAYOUT_BLOG'		=> 'Блог',
	'LAYOUT_CUSTOM'		=> 'Пользовательский',
	'LAYOUT_HOLYGRAIL'	=> 'Святой Грааль',
	'LAYOUT_PORTAL'		=> 'Портал',
	'LAYOUT_PORTAL_ALT'	=> 'Портал (альтернатива)',
	'LAYOUT_SETTINGS'	=> 'Настройки макета',

	'LOG_DELETED_BLOCKS_FOR_STYLE'	=> 'Блок удален из-за отсутствия стиля с id %s',
	'LOG_DELETED_BLOCKS_FOR_ROUTE'	=> 'Блок удален из-за нарушения страниц:<br />%s',
	'LOG_DELETED_BLOCKS'			=> 'Удален некорректный блок:<br />%s',

	'NAVIGATION_SETTINGS'	=> 'Настройки навигации',

	'SETTINGS_SAVED'			=> 'Ваши настройки были сохранены',
	'SHOW'						=> 'Демонстрация',
	'SHOW_FORUM_NAV'			=> 'Показать ссылку ’Форум’?',
	'SHOW_FORUM_NAV_EXPLAIN'	=> 'Если страница задана в качестве Стартовой, отображать ссылку «Форум» на панели навигации',
	'SHOW_FORUM_NAV_WITH_ICON'	=> 'Да - со значком:',
]);
