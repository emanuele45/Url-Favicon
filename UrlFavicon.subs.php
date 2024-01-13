<?php

/**
 * Url Favicon
 *
 * @author emanuele & BurkeKnight
 * @license BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 0.0.4
 */

function urlFavicon()
{
	addInlineJavascript('
		document.querySelectorAll(".messageContent .bbc_link").forEach((elem) => {
			elem.style.background = "url(//www.google.com/s2/favicons?domain=" + elem.hostname + ") left center no-repeat";
			elem.style.paddingLeft = "18px";
		});', true);
}