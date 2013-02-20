<?php
sleep( 3 );

require "./JSON.php";

$url		= $_POST['url'];
$form_type	= $_POST['form_type'];
$id			= $_POST['id'];
$orig_value	= $_POST['orig_value'];
$new_value	= $_POST['new_value'];

if( $form_type == 'select' ) {
	$orig_option_text	= $_POST['orig_option_text'];
	$new_option_text	= $_POST['new_option_text'];

	$new_value			= $new_option_text;
}

$json = new Services_JSON( );

print $json->encode( array(
	"is_error"		=> false,
	"error_text"	=> "Ack!  Something broke!",
	"html"			=> $new_value
) );
