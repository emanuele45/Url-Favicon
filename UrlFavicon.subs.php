<?php
/**
 * Url Favicon
 *
 * @author emanuele
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 0.0.1
 */

function urlFavicon()
{
	addInlineJavascript('
		$(\'.bbc_link\').each(function() {
			var url = $(this).attr(\'href\'),
				domain = url.match(/:\/\/(.[^/]+)/)[1],
				schema = url.match(/^(http[s]*):\/\//)[1];
			$(this).css({
				\'background-image\': \'url(//www.google.com/s2/favicons?domain=\' + schema + \'://\' + domain + \')\',
				\'background-repeat\': \'no-repeat\',
				\'background-position\': \'0 2px\',
				\'padding-left\': \'18px\'
			});
		})', true);
}