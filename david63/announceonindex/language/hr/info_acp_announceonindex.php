<?php
/**
*
* @package Announcements on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
'ALLOW_EVENTS'=>'Dopusti događaje predloška',
'ALLOW_EVENTS_EXPLAIN'=>'Ukoliko je omogućeno, uporaba događaja predloška bit će dopuštena u obavijestima.<br />Ukoliko ini događaji predloška uzrokuju probleme odnosno neželjene učinke, onemogući uporabu događaja predloška.',
'ALLOW_GUESTS'=>'Dopusti gostima pregledavanje obavijesti',
'ALLOW_GUESTS_EXPLAIN'=>'Ukoliko je omogućeno, gostima će biti dopušteno pregledavanje obavijesti.',
'ANNOUNCE_ON_INDEX'=>'Obavijesti na početnoj',
'ANNOUNCE_ON_INDEX_ENABLE'=>'Omogući obavijesti',
'ANNOUNCE_ON_INDEX_EXPLAIN' =>'Ovdje možeš upravljati postavkama obavijesti.',
'ANNOUNCE_ON_INDEX_LOG'=>'<strong>Postavke obavijesti na početnoj ažurirane </strong>',
'ANNOUNCE_ON_INDEX_MANAGE'=>'Upravljanje obavijestima',
'ANNOUNCE_ON_INDEX_OPTIONS'=>'Postavke obavijesti',
'SHOW_ANNOUNCEMENTS'=>'Prikaži obavijesti',
'SHOW_ANNOUNCEMENTS_EXPLAIN'=>'Ukoliko je omogućeno, sve obavijesti bit će prikazane na početnoj stranici foruma.',
'SHOW_GLOBALS'=>'Prikaži globalne obavijesti',
'SHOW_GLOBALS_EXPLAIN'=>'Ukoliko je omogućeno, sve globalne obavijesti bit će prikazane na početnoj stranici foruma.',
));
