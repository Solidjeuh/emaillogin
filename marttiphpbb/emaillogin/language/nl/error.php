<?php

/**
* phpBB Extension - marttiphpbb emaillogin
* @copyright (c) 2018 - 2019 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_EMAIL'		            => 'U moet een e-mailadres opgeven om in te loggen.',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_USERNAME_OR_EMAIL'		=> 'U moet een gebruikersnaam of e-mailadres opgeven om in te loggen.',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_VALID_EMAIL'		    => 'Het e-mailadres %1$s is niet geldig.',
	'MARTTIPHPBB_EMAILLOGIN_LOGIN_ERROR_EMAIL'              => 'De e-mail (%1$s) die u hebt opgegeven, is onjuist. Controleer je e-mail en probeer het opnieuw. Als je problemen blijft ondervinden, neem dan contact op met de %2$sForum beheerder%3$s.',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_EMAIL_DUPLICATE'		    => 'De e-mail %1$s kan niet worden gebruikt omdat deze meerdere keren in de database aanwezig is. Neem contact op met de %2$sForum beheerder%3$s.',		
]);
