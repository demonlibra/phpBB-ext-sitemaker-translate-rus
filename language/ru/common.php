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

$strings = array(
	'ALL_TIME'						=> 'Все время',

	'BLOCK_TITLE'					=> 'Заголовок блока',

	'CHANGE_ME'						=> 'Измени меня',

	'DAILY_MEMBER'					=> 'Участник дня',

	'FEATURED_MEMBER'				=> 'Избранный участник',
	'FEATURED_MEMBERLIST'			=> 'Список избранных участников',
	'FEEDS'							=> 'Ленты',
	'FORUM_ANNOUNCEMENTS'			=> 'Форум Объявления',
	'FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Объявления Глобального форума',
	'FORUM_RECENT_POSTS'			=> 'Последние сообщения на форуме',
	'FORUM_RECENT_TOPICS'			=> 'Последние темы форума',
	'FORUM_STICKY_POSTS'			=> 'Последние заметки',

	'HELP'							=> 'Справка',
	'HOURLY_MEMBER'					=> 'Участник часа',

	'GOOGLE_MAP'					=> 'Гугл карты',

	'JOIN_DATE'						=> 'Дате вступления',

	'LAST_POST_BY_AUTHOR'			=> 'Последнее сообщение от',
	'LAST_VISITED'					=> 'Последнее посещение',
	'LINKS'							=> 'Ссылки',

	'MCP_SITEMAKER_CONTENT'			=> 'Контент',
	'MEMBERS_DATE'					=> 'Дата',
	'MENU'							=> 'Меню',
	'MONTHLY_MEMBER'				=> 'Участник месяца',
	'MOST_TENURED'					=> 'Самый активный',
	'MY_BOOKMARKS'					=> 'Мои закладки',

	'NO_BOOKMARKED_TOPICS'			=> 'Вы не добавили ни одной темы в закладки',
	'NO_NEW_POSTS'					=> 'Нет новых сообщений для отображения',
	'NO_NEW_TOPICS'					=> 'Нет новых тем для отображения',

	'POLL'							=> 'Опрос',
	'POSTS_MEMBER'					=> 'Топ пользователей',
	'PROCESSING'					=> 'обработка ...',

	'QTYPE_POSTS'					=> 'Поздравления:',
	'QTYPE_RECENT'					=> 'Пожалуйста, поприветствуйте нашего нового члена:',

	'RECENT_BOTS'					=> 'Последние поисковые запросы',
	'RECENT_MEMBER'					=> 'Недавний участник',
	'RECENT_MEMBERS'				=> 'Последние участники',

	'SESSION_HIDE_ME'				=> 'Спрячь меня',
	'SM_NAVIGATION'					=> 'Навигация',
	'SM_TOGGLE_DROPDOWN'			=> 'Переключить выпадающий',
	'STYLE_SWITCHER'				=> 'Стиль Switcher',

	'THIS_MONTH'					=> 'Этот месяц',
	'THIS_WEEK'						=> 'Эта неделя',
	'THIS_YEAR'						=> 'Этот год',
	'TODAY'							=> 'Сегодня',
	'TOPICS_LAST_READ'				=> 'Последние прочитанные темы',
	'TOPIC_LAST_READ'				=> 'Последнее прочитанное %s',
	'TOP_POSTERS'					=> 'Тор пользователей',

	'UCP_SITEMAKER_CONTENT'			=> 'Мои материалы',

	'VIEW_DETAILS'					=> 'Детальный просмотр',
	'VIEW_USER_PROFILE'				=> 'Все о %s',

	'WEEKLY_MEMBER'					=> 'Участник недели',
	'WELCOME'						=> 'Добро пожаловать',
	'WHATS_NEW'						=> 'Что нового?',
	'WORDGRAPH'						=> 'Wordgraph',
);

$lang = array_merge($lang, $strings);
