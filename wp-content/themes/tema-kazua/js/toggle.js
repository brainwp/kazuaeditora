// JavaScript for toggle
	jQuery(document).ready(function() {
       jQuery("h3#mostra").toggle(
           function() {
               jQuery("div#oculto").fadeIn('slow'); // ou slideDown()
           },
           function() {
               jQuery("div#oculto").fadeOut(); // ou slideUp()
           }
       );
   });
