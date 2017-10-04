<?php
/*
Plugin Name: Change Post Name
Plugin URI: http://logan.codes
Description: Changes the name of posts to something else
Version: 1.0
Author: Logan Guthrie
Author URI: http://logan.codes
License: GPL2
*/


add_filter( 'post_type_labels_post', 'change_post_labels');

function change_post_labels( $args ) {
foreach( $args as $key => $label ){
$args->{$key} = str_replace( [ __( 'Posts' ), __( 'Post' ) ], __( 'Reads' ), $label );
}

return $args;
}