// form
// Author: Reto Inniger
$(document).ready(function () {
	'use strict';
	// Set focus to the first error element
	$('input').each(function(){
         if($(this).hasClass('invalide'))
              $(this).focus();
    });
});