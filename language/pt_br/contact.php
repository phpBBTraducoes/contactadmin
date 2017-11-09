<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by maximuspoder (c) 2017 [ver 1.1.4] (https://github.com/phpBBTraducoes)
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
	'ACP_CAT_CONTACTADMIN'		=> 'Contate a Administração',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'If you wish to attach a file enter the details below.',
	'CONTACT_BOT_ERROR'			=> 'You can’t use the contact form at the moment because there is an error in the configuration.  An email has been sent to the founder.',
	'CONTACT_BOT_NONE'			=> 'The user %1$s tried to use the Contact Admin Extension at %2$s to send a %3$s, but there are no Administrators that allow %3$ss by users. Please enter the Contact Bot Configuration in the Admin Panel for the forum %4$s and choose the “Board Founder” option',
	'CONTACT_BOT_SUBJECT'		=> 'Erro na extensão Contate a Administração do Fórum',
	'CONTACT_BOT_USER_MESSAGE'	=> 'The user %1$s tried to use the Contact Admin extension at %2$s, but the user selected in the configuration is incorrect. Please visit the forum %3$s and choose a different user in the ACP for the Contact Administration.',
	'CONTACT_BOT_FORUM_MESSAGE'	=> 'The user %1$s tried to use the Contact Admin extension at %2$s, but the forum selected in the configuration is incorrect. Please visit the forum %3$s and choose a different forum in the ACP for the Contact Administration.',
	'CONTACT_CONFIRM'			=> 'Confirme',
	'CONTACT_DISABLED'			=> 'Você não pode usar o formulário de contato no momento porque ele está desativado.',
	'CONTACT_MAIL_DISABLED'		=> 'There is an error with the configuration of the Contact  Administration.<br />The extension is set to send an email but the configuration isn’t setup to send emails.  Please notify the administrator or webmaster: <a href="mailto:%1$s">%1$s</a>',
	'CONTACT_MSG_SENT'			=> 'Sua mensagem foi enviada com sucesso.',
	'CONTACT_NO_MSG'			=> 'Você não inseriu uma mensagem.',
	'CONTACT_NO_SUBJ'			=> 'Você não inseriu um título.',
	'CONTACT_REASON'			=> 'Razão',
	'CONTACT_TEMPLATE'			=> '[b]Nome:[/b] %1$s' . "\n" . '[b]E-mail:[/b] %2$s' . "\n" . '[b]IP:[/b] %3$s' . "\n" . '[b]Título:[/b] %4$s' . "\n" . '[b]Enviou a seguinte mensagem no formulário de contato[/b] %5$s',
	'CONTACT_TITLE'				=> 'Contate a Administração',
	'CONTACT_TOO_MANY'			=> 'Você excedeu o número de tentativas máximas de confirmação desta sessão. Por favor, tente novamente mais tarde.',

	'CONTACT_YOUR_NAME'			=> 'Seu nome',
	'CONTACT_YOUR_NAME_EXPLAIN'	=> 'Digite seu nome.',
	'CONTACT_YOUR_EMAIL'		=> 'Seu endereço de e-mail',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Digite um endereço de e-mail válido.',

	'TOO_MANY_CONTACT_TRIES'	=> 'Você excedeu o número de tentativas máximas desta sessão. Por favor, tente novamente mais tarde.',
	'CONTACT_NO_NAME'			=> 'Você não inseriu seu nome.',

	'RETURN_CONTACT'			=> '%sRetornar para a página de contato%s',
));
