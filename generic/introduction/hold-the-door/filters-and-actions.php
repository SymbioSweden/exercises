<?php

/**
 * This action appends registered scripts only 
 * on the log in and registering pages
 */
add_action( 'login_enqueue_scripts', 'register_hodor_script' );
function register_hodor_script() {
  wp_register_script( 'hold_the_door', plugin_dir_path() . '/path/to/your/hodor-script.js' );
  wp_enqueue_script( 'hold_the_door' );
}

/**
 * This action displays markup after the password field
 */
add_action( 'login_form', 'display_hodor_in_login_form' );
function display_hodor_in_login_form() {
  ?>
    <div class="holding-the-door" value="<?php $_POST['hodor_first_phrase']; ?>"></div>
  <?php
}

/**
 * This filter runs after you submit the form
 */
add_filter( 'wp_authenticate_user', 'verify_login_with_hodor', 10, 2 );
/**
 * @param $user The WP_User
 * @param $password The password for that user
 */
function verify_login_with_hodor( $user, $password ){
  pattern = '/^' . str_replace( '_', '\_', 'hodor_' ) . '.*/';
  $data    = array();
  $keys    = preg_grep( $pattern, array_keys( $_POST ) );
  foreach ( $keys as $key ) {
    if ( ! isset( $_POST[ $key ] ) ) {
      continue;
    }
    $data[ $key ] = strip_tags( $_POST[ $key ] );
  }

  // Use $data to verify the inputs
}


/*------------------------------------*\

  The same thing again, but for registration

\*------------------------------------*/

/**
 * This action displays markup after the password field
 */
add_action( 'register_form', 'display_hodor_in_register_form' );
function display_hodor_in_register_form() {
  ?>
    <div class="holding-the-door" value="<?php $_POST['hodor_first_phrase']; ?>"></div>
  <?php 
}

/**
 * This filter runs after you submit the form
 */
add_filter( 'registration_errors', 'verify_registration_with_hodor', 10, 3 );
/**
 * @param $errors The WP_Error class
 * @param $user Sanitze the input in username field
 * @param $user_email The specified user email
 */
function verify_registration_with_hodor( $errors, $sanitized_user_login, $user_email ) {
  pattern = '/^' . str_replace( '_', '\_', 'hodor_' ) . '.*/';
  $data    = array();
  $keys    = preg_grep( $pattern, array_keys( $_POST ) );
  foreach ( $keys as $key ) {
    if ( ! isset( $_POST[ $key ] ) ) {
      continue;
    }
    $data[ $key ] = strip_tags( $_POST[ $key ] );
  }

  // Use $data to verify the inputs
  
  if (!empty($data) && array_keys($data) === 'Your checker') {
    return $response = json_decode( $response, true );
  } else {
    $errors->add( "Hodor", __( "<strong>Hodor</strong>: You are a white walker" ) );
  }

  return $errors;

}
