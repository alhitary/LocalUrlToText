<?php
/**
*
* @package phpBB Extension - Martin LocalUrlToText
* @copyright (c) 2014 Martin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'ACP_LOCALURLTOTEXT_TITLE'			=> 'Local URL To Text',
	'ACP_LOCALURLTOTEXT_SETTINGS'		=> 'Settings',
	'ACP_LOCALURLTOTEXT_SETTING_SAVED'	=> 'Settings have been saved successfully!',
	'ACP_LOCALURLTOTEXT_FORUM'			=> 'Placeholder for forum link text',
	'ACP_LOCALURLTOTEXT_FORUM_EXPLAIN'	=> 'Enter placeholder, HTML is allowed. Available variables: {FORUM_NAME}',
	'ACP_LOCALURLTOTEXT_TOPIC'			=> 'Placeholder for topic link text',
	'ACP_LOCALURLTOTEXT_TOPIC_EXPLAIN'	=> 'Enter placeholder, HTML is allowed. Available variables: {TOPIC_TITLE}, {FORUM_NAME}',
	'ACP_LOCALURLTOTEXT_POST'			=> 'Placeholder for post link text',
	'ACP_LOCALURLTOTEXT_POST_EXPLAIN'	=> 'Enter placeholder, HTML is allowed. Available variables: {USER_NAME}, {POST_SUBJECT}, {TOPIC_TITLE}, {POST_OR_TOPIC_TITLE}, {FORUM_NAME}',
	'ACP_LOCALURLTOTEXT_USER'			=> 'Placeholder for user link text',
	'ACP_LOCALURLTOTEXT_USER_EXPLAIN'	=> 'Enter placeholder, HTML is allowed. Available variables: {USER_NAME}',
));
