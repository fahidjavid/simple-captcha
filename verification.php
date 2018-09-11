<?php

if ( empty( $_POST['captcha'] ) || ( strcasecmp( $_POST['captcha'], $_SESSION['rand_code'] ) != 0 ) ) {
  
  // for Ajax forms
  echo json_encode( array(
    'success' => false,
    'message' => esc_html__( 'Wrong Code!', 'gsuite' )
  ) );
  die;
  
}
