jQuery(document).ready(function($) {
	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="http://crestaproject.com/demo/drento-pro/" class="button" target="_blank">{pro-demo}</a>'.replace( '{pro-demo}', customBtns.prodemo ) );
 	$('.wp-full-overlay-sidebar-content').prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="http://crestaproject.com/downloads/drento/" class="button" target="_blank">{pro-get}</a>'.replace( '{pro-get}', customBtns.proget ) );
});