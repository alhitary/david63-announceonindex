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
	'ALLOW_EVENTS'					=> 'Veranstaltungsvorlage erlauben',
	'ALLOW_EVENTS_EXPLAIN'			=> 'Verwendung der Veranstaltungsvorlagen in den Ankündigungen erlauben.<br/> Schalte diese aus, wenn andere Veranstaltungsvorlagen Probleme und/oder unerwünschten Ergebnisse verursachen',
	'ALLOW_GUESTS'					=> 'Den Gästen erlauben, die Ankündigungen zu sehen',
	'ALLOW_GUESTS_EXPLAIN'			=> 'Den Gästen erlauben, die Ankündigungen zu sehen',

	'ANNOUNCE_ON_INDEX'				=> 'Ankündigungen auf der Hauptseite',
	'ANNOUNCE_ON_INDEX_ENABLE'		=> 'Ankündigungen aktivieren',
	'ANNOUNCE_ON_INDEX_EXPLAIN' 	=> 'Verwaltung der Ankündigungsoptionen',
	'ANNOUNCE_ON_INDEX_LOG'			=> '<strong>Die Ankündigungseinstellungen auf der Hauptseite aktualisiert </strong>',
	'ANNOUNCE_ON_INDEX_MANAGE'		=> 'Ankündigungen verwalten',
	'ANNOUNCE_ON_INDEX_OPTIONS'		=> 'Ankündigungsoptionen',

	'SHOW_ANNOUNCEMENTS'			=> 'Ankündigungen anzeigen',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'	=> 'Alle Ankündigungen auf der Hauptseite anzeigen',
	'SHOW_GLOBALS'					=> 'Globale Ankündigungen anzeigen',
	'SHOW_GLOBALS_EXPLAIN'			=> 'Alle globalen Ankündigungen auf der Hauptseite anzeigen',
));
