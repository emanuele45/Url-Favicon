<?php
/**
 * Url Favicon
 *
 * @author emanuele & BurkeKnight
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 0.0.2
 */

function urlFavicon()
{
	addInlineJavascript('
		$(\'.bbc_link\').each(function() {
			$(this).css({
				\'background\': \'url(//www.google.com/s2/favicons?domain=\' + this.hostname + \') left center no-repeat\',
				\'padding-left\': \'18px\'
			});
		})', true);
}