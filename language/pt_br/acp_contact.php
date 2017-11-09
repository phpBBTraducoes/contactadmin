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
	'CONTACT_CONFIG_SAVED'			=> 'A configuração do Contate a Administração do Fórum foi atualizada',
	'CONTACT_ENABLE'				=> 'Habilitar a extensão Contate a Administração do Fórum',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Ativar ou desativar a extensão globalmente',
	'CONTACT_ACP_CONFIRM'				=> 'Habilitar a confirmação visual',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Se você habilitar esta opção, os usuários terão que inserir uma confirmação visual para enviar a mensagem.<br>Isso é para evitar mensagens de spam. Observe que esta opção é apenas para a página de contato. Não afeta outras configurações de confirmação visual.',
	'CONTACT_ATTACHMENTS'				=> 'Anexos permitidos',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'Se os anexos definidos serão permitidos na postagem no fórum e nas mensagens privadas.<br>As extensões permitidas são as mesmas que as configuradas no Fórum.<br><span style="color:red;">Não se aplica para o método de contato via “E-mail”.</span>',
	'CONTACT_CONFIRM_GUESTS'			=> 'Confirmação visual somente para visitantes',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Se esta opção estiver ativada, a confirmação visual será exibida apenas para os visitantes (se estiver ativo).',
	'CONTACT_FOUNDER'					=> 'Contato via fundador do fórum',
	'CONTACT_FOUNDER_EXPLAIN'			=> 'Se definido, apenas o Fundador do Fórum receberá notificações de e-mail ou PM.',
	'CONTACT_GENERAL_SETTINGS'			=> 'Configurações gerais da página de contato',
	'CONTACT_MAX_ATTEMPTS'				=> 'Tentativas máximas de confirmação',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'		=> 'Quantas vezes um usuário pode tentar inserir a imagem de confirmação correta?<br>Insira 0 para tentativas ilimitadas.',
	'CONTACT_METHOD'					=> 'Método de Contato',
	'CONTACT_METHOD_EXPLAIN'			=> 'Como você quer que os usuários sejam capazes de fazer contato.<br><span style="color:red;">Se definido como “E-mail” os anexos não se aplicam.</span>',
	'CONTACT_REASONS'					=> 'Razões de Contato',
	'CONTACT_REASONS_EXPLAIN'			=> 'Digite os motivos para entrar em contato, separados em linhas.<br>Se você não quiser usar esse recurso, deixe este campo vazio.',
	// Bot config options
	'CONTACT_BOT_FORUM'				=> 'Contact bot forum',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Selecione o fórum, onde o bot de contato deve postar, se o método de contato estiver definido como "Postagem no Fórum".',
	'CONTACT_BOT_POSTER'			=> 'Bot as Poster',
	'CONTACT_BOT_POSTER_EXPLAIN'	=> 'Se as PM´s e as mensagens parecerem vir do usuário de bot de contato escolhido acima com base nas configurações aqui. Se "Nenhum" for selecionado, o bot não será usado como usuário. Os posts e PMs serão postados com base nas informações inseridas no formulário de contato.',
	'CONTACT_BOT_USER'				=> 'Usuário bot de contato',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Selecione o usuário que as mensagens serão postadas se o método de contato estiver definido como "Mensagem Privada" ou "Postagem no Fórum".',
	'CONTACT_USERNAME_CHK'			=> 'Checar Username',
	'CONTACT_USERNAME_CHK_EXPLAIN'	=> 'Se definido como sim, o nome do usuário que for inserido será verificado em relação ao banco de dados. Se for encontrado um nome semelhante, o usuário será apresentado com um erro e solicitado a inserir um nome de usuário diferente.',
	'CONTACT_EMAIL_CHK'				=> 'Checar E-mail',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'Se definido como sim, o e-mail dos usuários será verificado em relação ao banco de dados. Se um e-mail semelhante for encontrado, o usuário será apresentado com um erro e solicitado a inserir um endereço de e-mail diferente.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'E-mail',
	'CONTACT_METHOD_PM'				=> 'Mensagem Privada',
	'CONTACT_METHOD_POST'			=> 'Postagem no Fórum',

	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Nenhum',
	'CONTACT_POST_GUEST'			=> 'Somente visitantes',
	'CONTACT_POST_ALL'				=> 'Todos',
));
