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
	'ALLOW_EVENTS'					=> 'Dopuszczaj eventy szablonu',
	'ALLOW_EVENTS_EXPLAIN'			=> 'Umożliwia korzystanie z eventów, które udostępnia szablon. Wyłączenie tej opcji może spowodować błędy.',
	'ALLOW_GUESTS'					=> 'Włącz widoczność dla gości',
	'ALLOW_GUESTS_EXPLAIN'			=> 'Włącz jeśli chcesz, aby ogłoszenia na stronie głównej widzieli również goście.',

	'ANNOUNCE_ON_INDEX'				=> 'Ogłoszenia na stronie głównej',
	'ANNOUNCE_ON_INDEX_ENABLE'		=> 'Włącz rozszerzenie',
	'ANNOUNCE_ON_INDEX_EXPLAIN' 	=> 'Modyfikacja umożliwia wyświetlanie ogłoszeń na stronie głównej.',
	'ANNOUNCE_ON_INDEX_LOG'			=> 'Ustawienia zostały zaktualizowane',
	'ANNOUNCE_ON_INDEX_MANAGE'		=> 'Ustawienia',
	'ANNOUNCE_ON_INDEX_OPTIONS'		=> 'Ustawienia',

	'SHOW_ANNOUNCEMENTS'			=> 'Pokazuj ogłoszenia',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'	=> 'Wybierz czy chcesz, aby na stronie głównej wyświetlane były ogłoszenia.',
	'SHOW_GLOBALS'					=> 'Pokazuj globalne ogłoszenia',
	'SHOW_GLOBALS_EXPLAIN'			=> 'Wybierz czy chcesz, aby na stronie głównej wyświetlane były globalne ogłoszenia.',
));
