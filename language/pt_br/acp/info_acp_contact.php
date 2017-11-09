<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by maximuspoder (c) 2017 [ver 1.1.4] (https://github.com/phpBBTraducoes)
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(
	// General config options
	'ACP_CAT_CONTACTADMIN'	=> 'Contate a Administração do Fórum',
	'ACP_CONTACTADMIN_CONFIG'			=> 'Configuração',
	// Log entries
	'LOG_CONFIG_CONTACT_ADMIN'		=> '<strong>Configurações alteradas da página da extensão Contate a Administração do Fórum</strong>',
	'LOG_CONTACT_BOT_INVALID'		=> '<strong>O BOT da extensão Contate a Administração do Fórum tem um ID de usuário inválido selecionado:</strong><br />User ID %1$s',
	'LOG_CONTACT_FORUM_INVALID'		=> '<strong>O Fórum da extensão Contate a Administração do Fórum tem um fórum inválido selecionado:</strong><br />Forum ID %1$s',
	'LOG_CONTACT_EMAIL_INVALID'		=> '<strong>A extensão Contate a Administração do Fórum está permitindo e-mails, mas o fórum não está configurado para permitir e-mails. A extensão foi desativada',
	'LOG_CONTACT_NONE'				=> '<strong>Nenhum administrador está permitindo que os usuários entrem em contato com eles por meio de %1$s na extensão Contate a Administração do Fórum</strong>',
	'LOG_CONTACT_CONFIG_UPDATE'		=> '<strong>As configurações da extensão Contate a Administração do Fórum foram atualizadas</strong>',

));
