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
	'ADD'										=> 'Добавить',
	'ALL_TYPES'									=> 'Все типы',
	'ALL_FORUMS'								=> 'Все форумы',
	'ALL_GROUPS'								=> 'Все группы',
	'ARCHIVES'									=> 'Архив',
	'AUTO_LOGIN'								=> 'Разрешить автоматический вход?',
	'FILE_MANAGER'								=> 'Менеджер файлов',
	'TOPIC_POST_IDS'							=> 'Из темы / идентификаторов сообщений',
	'TOPIC_POST_IDS_EXPLAIN'					=> 'Идентификатор тем / сообщений для извлечения вложений, разделенных <strong>commas</strong>(,). Укажите, предназначен ли этот список для идентификаторов тем или сообщений выше.',
	'TOPIC_POST_IDS_TYPE'						=> 'Тип идентификаторов (ниже)',

	// Blocks
	'BLITZE_SITEMAKER_BLOCK_ATTACHMENTS'		=> 'Вложения',
	'BLITZE_SITEMAKER_BLOCK_BIRTHDAY'			=> 'День рождения',
	'BLITZE_SITEMAKER_BLOCK_CUSTOM'				=> 'Контрольный блок',
	'BLITZE_SITEMAKER_BLOCK_FEATURED_MEMBER'	=> 'Избранный участник',
	'BLITZE_SITEMAKER_BLOCK_FEEDS'				=> 'RSS/Atom Feeds',
	'BLITZE_SITEMAKER_BLOCK_FORUM_POLL'			=> 'Форум Опрос',
	'BLITZE_SITEMAKER_BLOCK_FORUM_TOPICS'		=> 'Темы форума',
	'BLITZE_SITEMAKER_BLOCK_GOOGLE_MAPS'		=> 'Гугл карты',
	'BLITZE_SITEMAKER_BLOCK_LINKS'				=> 'Ссылки',
	'BLITZE_SITEMAKER_BLOCK_LOGIN'				=> 'Окно входа',
	'BLITZE_SITEMAKER_BLOCK_MEMBERS'			=> 'Участники',
	'BLITZE_SITEMAKER_BLOCK_MEMBER_MENU'		=> 'Меню участников',
	'BLITZE_SITEMAKER_BLOCK_MENU'				=> 'Меню',
	'BLITZE_SITEMAKER_BLOCK_MYBOOKMARKS'		=> 'Мои закладки',
	'BLITZE_SITEMAKER_BLOCK_STATS'				=> 'Статистика',
	'BLITZE_SITEMAKER_BLOCK_STYLE_SWITCHER'		=> 'Стиль Switcher',
	'BLITZE_SITEMAKER_BLOCK_WHATS_NEW'			=> 'Что нового?',
	'BLITZE_SITEMAKER_BLOCK_WHOIS'				=> 'Кто онлайн',
	'BLITZE_SITEMAKER_BLOCK_WORDGRAPH'			=> 'Wordgraph',

	// block views
	'BLOCK_VIEW'								=> 'Вид блоков',
	'BLOCK_VIEW_BASIC'							=> 'Основной',
	'BLOCK_VIEW_BOXED'							=> 'Из коробки',
	'BLOCK_VIEW_DEFAULT'						=> 'По умолчанию',
	'BLOCK_VIEW_SIMPLE'							=> 'Простой',

	'CACHE_DURATION'							=> 'Длительность кэша',
	'CONTEXT'									=> 'Контекст',
	'CSS_SCRIPTS'								=> 'CSS Scripts',
	'CUSTOM_PROFILE_FIELDS'						=> 'Пользовательские поля профиля',

	'DATE_RANGE'								=> 'Диапазон дат',
	'DISPLAY_PREVIEW'							=> 'Предварительный просмотр?',

	'EDIT_ME'									=> 'Пожалуйста, отредактируйте меня',
	'ENABLE_TOPIC_TRACKING'						=> 'Включить отслеживание темы?',
	'ENABLE_TOPIC_TRACKING_EXPLAIN'				=> 'Если включено, непрочитанные темы будут указаны, но результаты блока не будут кэшироваться <strong>(Not recommended)</strong>',
	'EXCLUDE_TOO_MANY_WORDS'					=> 'Вы ввели слишком много слов, чтобы исключить их. Максимально возможное количество символов - 255, вы ввели %s.',
	'EXCLUDE_WORDS'								=> 'Исключить слова',
	'EXCLUDE_WORDS_EXPLAIN'						=> 'Перечислите слова, которые вы хотите исключить из словосочетания через запятую (,). Максимум 255 символов.',
	'EXPANDED'									=> 'Расширенный',
	'EXTENSION_GROUP'							=> 'Расширения групп',

	'FEATURED_MEMBER_IDS'						=> 'Пользовательский IDs',
	'FEATURED_MEMBER_IDS_EXPLAIN'				=> 'Разделенный запятыми список пользователей для функции (относится только к режиму отображения Избранных участников)',
	'FEED_ITEM_TEMPLATE'						=> 'Шаблон товара',
	'FEED_ITEM_TEMPLATE_EXPLAIN'				=> '<strong>TIPS:</strong><br />- Доступ к данным канала в <strong>item</strong> variable e.g. item.title<br />- Нажмите <strong>Samples</strong> выше для образцов шаблонов<br />- Шаблон должен быть в <a href="https://twig.symfony.com/doc/2.x/" target="_blank">Синтаксис Twig</a>',
	'FEED_URL_PLACEHOLDER'						=> 'http://example.com/rss',
	'FEED_URLS'									=> 'URL фидов',
	'FIRST_POST_ONLY'							=> 'Только первый пост',
	'FIRST_POST_TIME'							=> 'Первый пост время',
	'FORUMS_GET_TYPE'							=> 'Получить тип',
	'FORUMS_MAX_TOPICS'							=> 'Максимум тем / сообщений',
	'FORUMS_TITLE_MAX_CHARS'					=> 'Максимальное количество символов в заголовке',
	'FREQUENCY'									=> 'Частота',
	'FULL'										=> 'Полный',
	'FULLSCREEN'								=> 'Полный экран',

	'GET_TYPE'									=> 'Показать тему / сообщение?',

	'HTML'										=> 'HTML',
	'HTML_EXPLAIN'								=> '<strong>Используйте эту текстовую область для ввода необработанного содержимого HTML.</strong><br />Обратите внимание, что любой контент, размещенный здесь, переопределит содержимое пользовательского блока, и редактор визуальных блоков будет недоступен..',
	'HOURS_SHORT'								=> 'hrs',

	'JS_SCRIPTS'								=> 'JS Scripts',

	'LAST_POST_TIME'							=> 'Время последнего сообщения',
	'LAST_READ_TIME'							=> 'Время последнего чтения',
	'LIMIT'										=> 'Лимит',
	'LIMIT_FORUMS'								=> 'Идентификаторы форума (необязательно)',
	'LIMIT_FORUMS_EXPLAIN'						=> 'Введите каждый идентификатор форума, разделенный запятой (,). Если установлено, будут отображаться только темы с указанных форумов.',
	'LIMIT_POST_TIME'							=> 'Ограничение по времени',
	'LIMIT_POST_TIME_EXPLAIN'					=> 'Если установлено, будут извлечены только темы, опубликованные в указанный период',

	'MAX_DEPTH'									=> 'Максимальная глубина',
	'MAX_ITEMS'									=> 'Максимальное количество пунктов',
	'MAX_MEMBERS'								=> 'Максимум. члены',
	'MAX_POSTS'									=> 'Максимальное количество постов',
	'MAX_TOPICS'								=> 'Максимальное количество тем',
	'MAX_WORDS'									=> 'Максимальное количество слов',
	'MAP_COORDINATES'							=> 'Координаты',
	'MAP_COORDINATES_EXPLAIN'					=> 'Введите координаты в форме широта, долгота',
	'MAP_HEIGHT'								=> 'Высота',
	'MAP_LOCATION'								=> 'Место нахождения',
	'MAP_TITLE'									=> 'Заголовок',
	'MAP_VIEW'									=> 'Просмотр',
	'MAP_VIEW_HYBRID'							=> 'Гибридный',
	'MAP_VIEW_MAP'								=> 'Карта',
	'MAP_VIEW_SATELITE'							=> 'Спутник',
	'MAP_VIEW_TERRAIN'							=> 'Местность',
	'MAP_ZOOM_LEVEL'							=> 'Уровень масштабирования',
	'MEMBERS_DATE'								=> 'Дата',
	'MENU_NO_ITEMS'								=> 'Нет активных элементов для отображения',
	'MINI'										=> 'Mini',

	'OR'										=> '<strong>или</strong>',
	'ORDER_BY'									=> 'Сортировать по',

	'PIXEL'										=> 'px',
	'POLL_FROM_FORUMS'							=> 'Показать опросы с форумов',
	'POLL_FROM_FORUMS_EXPLAIN'					=> 'Будут отображаться только опросы с выбранных форумов, если темы не указаны выше',
	'POLL_FROM_GROUPS'							=> 'Показать опросы из групп',
	'POLL_FROM_GROUPS_EXPLAIN'					=> 'Будут отображаться только опросы участников выбранных групп, если ни один из пользователей не указан',
	'POLL_FROM_TOPICS'							=> 'Показать опросы из темы',
	'POLL_FROM_TOPICS_EXPLAIN'					=> 'Идентификатор тем для получения опросов, разделенных <strong>commas</strong>(,). Оставьте пустым, чтобы выбрать любую тему..',
	'POLL_FROM_USERS'							=> 'Показать опросы пользователя (ей)',
	'POLL_FROM_USERS_EXPLAIN'					=> 'Идентификатор пользователя (ей), чьи опросы вы хотите отобразить, разделенные <strong>commas</strong>(,). Оставьте пустым, чтобы выбрать опросы от любого пользователя.',
	'POSTS_TITLE_LIMIT'							=> 'Maximum # символов для заголовка сообщения',
	'PREVIEW_MAX_CHARS'							=> 'Количество символов для просмотра',

	'QUERY_TYPE'								=> 'Режим отображения',

	'ROTATE_DAILY'								=> 'Ежедневно',
	'ROTATE_HOURLY'								=> 'Почасовой',
	'ROTATE_MONTHLY'							=> 'Ежемесячно',
	'ROTATE_PAGELOAD'							=> 'Загрузка страницы',
	'ROTATE_WEEKLY'								=> 'Еженедельно',

	'SAMPLES'									=> 'Пример',
	'SCRIPTS'									=> 'Скрипт',
	'SELECT_FORUMS'								=> 'Выберите форумы',
	'SELECT_FORUMS_EXPLAIN'						=> 'Выберите форумы для отображения тем / сообщений. Оставьте пустым, чтобы выбрать из всех форумов',
	'SELECT_MENU'								=> 'Выбор меню',
	'SELECT_PROFILE_FIELDS'						=> 'Выберите поля профиля',
	'SELECT_PROFILE_FIELDS_EXPLAIN'				=> 'Будут отображены только выбранные поля профиля, если они доступны.',
	'SHOW_FIRST_POST'							=> 'Первый пост',
	'SHOW_HIDE_ME'								=> 'Разрешить скрыть статус онлайн?',
	'SHOW_LAST_POST'							=> 'Последний пост',
	'SHOW_MEMBER_MENU'							=> 'Показать меню пользователя?',
	'SHOW_MEMBER_MENU_EXPLAIN'					=> 'Заменить окно входа в меню пользователя, если пользователь вошел в систему',
	'SHOW_WORD_COUNT'							=> 'Показать количество слов?',

	'TEMPLATE'									=> 'Шаблон',
	'TOPICS_ONLY'								=> 'Только темы?',
	'TOPIC_TITLE_LIMIT'							=> 'Maximum # символов для названия темы',
	'TOPIC_TYPE'								=> 'Тип темы',
	'TOPIC_TYPE_EXPLAIN'						=> 'Выберите типы тем, которые вы хотите отобразить. Оставьте флажки снятыми, чтобы выбрать из всех типов темы',

	'WORD_MAX_SIZE'								=> 'Maximum размер шрифта',
	'WORD_MIN_SIZE'								=> 'Minimum размер шрифта',
);

$lang = array_merge($lang, $strings);
