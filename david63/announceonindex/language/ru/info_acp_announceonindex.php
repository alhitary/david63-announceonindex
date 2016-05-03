<?php
/**
*
* @package Announcements on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'ALLOW_EVENTS'					=> 'Разрешить шаблоны мероприятий',
	'ALLOW_EVENTS_EXPLAIN'			=> 'Разрешить использование шаблонов мероприятий в объявлениях<br/> Выключить, если другие шаблоны мероприятий вызывают проблемы и/или могут привести к нежелательным результатам',
	'ALLOW_GUESTS'					=> 'Разрешить гостям видеть объявления',
	'ALLOW_GUESTS_EXPLAIN'			=> 'Разрешить гостям видеть объявления',

	'ANNOUNCE_ON_INDEX'				=> 'Объявления на Главной',
	'ANNOUNCE_ON_INDEX_ENABLE'		=> 'Объявления включить',
	'ANNOUNCE_ON_INDEX_EXPLAIN' 	=> 'Управление опциями объявлений',
	'ANNOUNCE_ON_INDEX_LOG'			=> '<strong>Настройки объявлений обновлены </strong>',
	'ANNOUNCE_ON_INDEX_MANAGE'		=> 'Управление объявлениями',
	'ANNOUNCE_ON_INDEX_OPTIONS'		=> 'Опции объявлений',

	'SHOW_ANNOUNCEMENTS'			=> 'Показать объявления',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'	=> 'Показать все объявления на Главной',
	'SHOW_GLOBALS'					=> 'Показать глобальные объявления',
	'SHOW_GLOBALS_EXPLAIN'			=> 'Показать все глобальные объявления на Главной',
));
