// form
// Author: Reto Inniger
$(document).ready(function () {
	'use strict';
	// Set focus to the first error element
	$('input, textarea').each(function () {
		if ($(this).hasClass('invalide')) {
			$(this).focus();
		}
	});
	
});