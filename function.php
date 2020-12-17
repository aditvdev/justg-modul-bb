<?php
/**
 * Load File Modules
 */
function justg_load_modul() {
	if ( class_exists( 'FLBuilder' ) ) {
	    //get_template_part('inc/modul/justg-module/justg-module');
	}
}
add_action( 'init', 'justg_load_modul' );
