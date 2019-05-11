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
	'ADD_BLOCK_EXPLAIN'							=> '*Перетащите блоки',
	'AJAX_ERROR'								=> 'К сожалению! Произошла ошибка в процессе обработки вашего запроса. Пожалуйста, попробуйте еще раз.',
	'AJAX_LOADING'								=> 'Загрузка',
	'AJAX_PROCESSING'							=> 'Работаю...',
	'BACKGROUND'								=> 'Фон',
	'BLOCKS'									=> 'Блоки',
	'BLOCKS_COPY_FROM'							=> 'Копировать блоки',
	'BLOCK_ACTIVE'								=> 'Активный',
	'BLOCK_CHILD_ROUTES_ONLY'					=> 'Показывать только на дочерних маршрутах',
	'BLOCK_CHILD_ROUTES_HIDE'					=> 'Скрыть на дочерних маршрутах',
	'BLOCK_CLASS'								=> 'Класс CSS',
	'BLOCK_CLASS_EXPLAIN'						=> 'Изменить внешний вид блока с помощью классов CSS',
	'BLOCK_DESIGN'								=> 'Внешний вид',
	'BLOCK_DISPLAY_TYPE'						=> 'Дисплей',
	'BLOCK_HIDE_TITLE'							=> 'Скрыть заголовок блока?',
	'BLOCK_INACTIVE'							=> 'Неактивный',
	'BLOCK_NOT_FOUND'							=> 'К сожалению! Запрошенная служба блокировки не найдена',
	'BLOCK_NO_DATA'								=> 'Нет данных для отображения',
	'BLOCK_NO_ID'								=> 'К сожалению! Идентификатор блока отсутствует',
	'BLOCK_PERMISSION'							=> 'Доступно для просмотра',
	'BLOCK_SHOW_ALWAYS'							=> 'Всегда',
	'BLOCK_STATUS'								=> 'Статус',
	'BLOCK_UPDATED'								=> 'Настройки блока успешно обновлены',

	'CANCEL'									=> 'Отменить',
	'CHILD_ROUTE'								=> 'Ребенок',
	'CHILD_ROUTE_EXPLAIN'						=> '/viewforum.php, /dir/index.php<br />/viewtopic.php?f=2&t=1<br />/articles/my-article',
	'CLEAR'										=> 'Очистить',
	'COLUMN_WIDTH_EXPLAIN'						=> "Нажмите ввод / возврат, чтобы сохранить",
	'COPY'										=> 'Копия',
	'COPY_BLOCKS'								=> 'Копировать блоки?',
	'COPY_BLOCKS_CONFIRM'						=> 'Вы уверены, что хотите скопировать блоки с другой страницы? <br /> <br /> Это удалит все существующие блоки и их настройки для этой страницы и заменит их на блоки с выбранной страницы.',

	'DEFAULT_LAYOUT_EXPLAIN'					=> 'Если установлено, все страницы сайта, для которых вы не указали блоки, будут наследовать блоки из макета по умолчанию. Однако вы можете переопределить макет по умолчанию для определенных страниц, используя параметры справа.',
	'DELETE'									=> 'Удалить',
	'DELETE_ALL_BLOCKS'							=> 'Удалить все блоки',
	'DELETE_ALL_BLOCKS_CONFIRM'					=> 'Вы уверены, что хотите удалить все блоки для этой страницы?',
	'DELETE_BLOCK'								=> 'Удалить блок',
	'DELETE_BLOCK_CONFIRM'						=> 'Вы уверены, что хотите удалить этот блок? <br /><br /><br /><strong>Note:</strong> Вам потребуется сохранить изменения в макете, чтобы сделать его постоянным.',

	'EDIT'										=> 'Редактировать',
	'EDIT_BLOCK'								=> 'Редактировать блок',
	'EXIT_EDIT_MODE'							=> 'Выйти из режима редактирования',

	'FEED_PROBLEMS'								=> 'Возникла проблема при обработке предоставленных каналов rss / atom',
	'FEED_URL_MISSING'							=> 'Пожалуйста, предоставьте хотя бы один канал rss / atom для начала',
	'FIELD_INVALID'								=> 'Предоставленное значение для поля “%s” имеет неверный формат',
	'FIELD_REQUIRED'							=> '“%s” это обязательное поле',
	'FIELD_TOO_LONG'							=> 'Предоставленное значение для поля “%1$s” is too long. Максимально допустимое значение %2$d.',
	'FIELD_TOO_SHORT'							=> 'Предоставленное значение для поля “%1$s” is too short. Минимально допустимое значение %2$d.',

	'HIDE_ALL_BLOCKS'							=> 'Не показывать блоки на этой странице',
	'HIDE_BLOCK_POSITIONS'						=> 'Не показывать блоки для следующих позиций блоков:',

	'IMAGES'									=> 'Изображения',

	'LAYOUT'									=> 'Раскладка',
	'LAYOUT_SAVED'								=> 'Макет успешно сохранен!',
	'LAYOUT_SETTINGS'							=> 'Настройки макета',
	'LEAVE_CONFIRM'								=> 'У вас есть несохраненные изменения на этой странице. Пожалуйста, сохраните свою работу, прежде чем двигаться дальше',
	'LISTS'										=> 'Списки',

	'MAKE_DEFAULT_LAYOUT'						=> 'Установить как макет по умолчанию',

	'OR'										=> '<strong>OR</strong>',

	'PARENT_ROUTE'								=> 'Родитель',
	'PARENT_ROUTE_EXPLAIN'						=> '/index.php<br />/viewforum.php?f=2<br />/articles',
	'PREDEFINED_CLASSES'						=> 'Предопределенные классы',

	'REDO'										=> 'Переделывать',
	'REMOVE_DEFAULT_LAYOUT'						=> 'Удалить как макет по умолчанию',
	'REMOVE_STARTPAGE'							=> 'Удалить стартовую страницу',
	'ROUTE_HIDDEN_BLOCKS'						=> 'Блоки скрыты для этой страницы',
	'ROUTE_HIDDEN_POSITIONS'					=> 'Блоки скрыты для следующих позиций',
	'ROUTE_UPDATED'								=> 'Настройки страницы успешно обновлены',

	'SAVE_CHANGES'								=> 'Сохранить изменения',
	'SAVE_SETTINGS'								=> 'Сохранить настройки',
	'SELECT_ICON'								=> 'Выберите иконку',
	'SETTINGS'									=> 'Настройки',
	'SETTING_TOO_BIG'							=> 'Предоставленное значение для настройки “%1$s” is too high. Максимально допустимое значение %2$d.',
	'SETTING_TOO_LONG'							=> 'Предоставленное значение для настройки “%1$s” is too long. Максимально допустимая длина is %2$d.',
	'SETTING_TOO_LOW'							=> 'Предоставленное значение для настройки “%1$s” is too low. Минимально допустимое значение %2$d.',
	'SETTING_TOO_SHORT'							=> 'Предоставленное значение для настройки “%1$s” is too short. Минимально приемлемая длина is %2$d.',
	'SET_STARTPAGE'								=> 'Сделать стартовой страницей',

	'TITLES'									=> 'Титулы',

	'UPDATE_SIMILAR'							=> 'Обновить блоки с похожими настройками',
	'UNDO'										=> 'Открепить',

	'VIEW_DEFAULT_LAYOUT'						=> 'Просмотр / редактирование макета по умолчанию',
	'VISIT_PAGE'								=> 'Посетить страницу',
);

$lang = array_merge($lang, $strings);
