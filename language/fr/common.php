<?php

/**
*
*
* @package - Activity 24 hours
* @copyright (c) 2015 RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Translate French by Takashi (http://www.covergraphd.com/)
*
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'USERS_24HOUR_TOTAL'	=> array(
		1 => '%d utilisateur',
		2 => '%d utilisateurs',
	),
	'GUEST_ONLINE_24'		=> array(
		1 => ' et %d invité',
		2 => ' et %d invités',
	),
	'LAST_24_HOURS'	=> ' actif au cours des dernières 24 heures',
	'24HOUR_TOPICS'			=> 'Nouveaux sujets %d',
	'24HOUR_POSTS'			=> 'Nouveaux messages %d',
	'24HOUR_USERS'			=> 'Nouveaux Utilisateurs %d',

	'TWENTYFOURHOUR_STATS'			=> 'Activité des dernières 24 heures',
));
