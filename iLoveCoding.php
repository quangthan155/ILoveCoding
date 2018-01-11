<?php 
    /*
    Plugin Name: I love coding
    Plugin URI: http://www.wordpress.org
    Description: Plugin for testing
    Author: Peter Than
    Version: 1.0
    Author URI: http://www.peterthan.com
    */

    add_filter( 'manage_media_columns', 'add_new_column' );
	function add_new_column( $posts_columns ) {
		$posts_columns['media_new_column'] = 'Custom column';
		return $posts_columns;
	}

	add_action( 'manage_media_custom_column', 'custom_column' );
	function custom_column( $column_name ) {
		echo '<input type="checkbox" id="gridCheck" required aria-required="true">
				      <label class="form-check-label" for="gridCheck">
				        Is it protected?
				      </label></br><a onclick="displayAlert()">Configure private urls</a>';
	}

	add_action( 'admin_print_styles-upload.php', 'column_front_end' );
	function column_front_end() {
		echo '<style>

			</style>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script>
				function displayAlert() {
					alert("Hello World");
				}
				jQuery(document).ready(function($){
				   $("table tbody tr").mouseenter(function() {
				   	$(this).css("background-color", "violet");
				   });
				   $("table tbody tr").mouseleave(function() {
				    $(this).css("background-color", "transparent");
				  });
				}); 
			</script>';
	}


?>