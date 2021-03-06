<?php
/**
*
* @package Announcements on index
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ALLOW_EVENTS'					=> 'السماح بالأحداث الخاصة بالقالب ',
	'ALLOW_EVENTS_EXPLAIN'			=> 'السماح باستخدام الأحداث الخاصة بالقالب في الإعلانات.<br />اختار "لا" في حالة وجود مُشكلة أو ظهور نتائج غير مرغوبة بسبب أحداث قالب آخر.',
	'ALLOW_GUESTS'					=> 'عرض الإعلانات للزائرين ',
	'ALLOW_GUESTS_EXPLAIN'			=> 'السماح للزائرين بمُشاهدة الإعلانات.',

	'ANNOUNCE_AVATAR'				=> 'عرض الصورة الشخصية لآخر عضو مُشارك ',
	'ANNOUNCE_AVATAR_SIZE'			=> 'حجم الصورة الشخصية ',
	'ANNOUNCE_AVATAR_SIZE_EXPLAIN'	=> 'حجم الصورة الشخصية لآخر عضو مُشارك',
	'ANNOUNCE_ON_INDEX_ENABLE'		=> 'تفعيل ',
	'ANNOUNCE_ON_INDEX_EXPLAIN' 	=> 'من هنا تستطيع ضبط الخيارات.',
	'ANNOUNCE_ON_INDEX_OPTIONS'		=> 'الخيارات',

	'SHOW_ANNOUNCEMENTS'			=> 'عرض الإعلانات ',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'	=> 'إظهار كل الإعلانات في الصفحة الرئيسية للمنتدى.',
	'SHOW_GLOBALS'					=> 'عرض الإعلانات العامة ',
	'SHOW_GLOBALS_EXPLAIN'			=> 'إظهار كل الإعلانات العامة في الصفحة الرئيسية للمنتدى.',

	'VERSION'						=> 'النسخة ',
));
