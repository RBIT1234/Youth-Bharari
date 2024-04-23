<?php
function smartlog_activation() {
  global $current_user;
    $current_user_id   = $current_user->ID;
  $theme_data  = wp_get_theme();
  if ( !get_user_meta( $current_user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ) ) {

    echo '<div class="notice">';
    
      echo '<h2>';
        /* translators: %s theme name */
        printf( esc_html__( 'Welcome to %s', 'smartlog' ), esc_html( $theme_data->Name ) );
      echo '</h2>';
      echo '<p>';
        printf( __( 'Thank you for choosing %1$s! Explore beautiful templates and setup your site', 'smartlog' ), esc_html( $theme_data->Name ), esc_url( admin_url( 'themes.php?page=smartlog-about' ) ) );
        printf( '<a href="%1$s" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>', '?' . esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore=0' );
      echo '</p>';
      echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=smartlog-about' ) ) .'" class="button button-primary">';
        printf( esc_html__( 'Get started with %s', 'smartlog' ), esc_html( $theme_data->Name ) );
      echo '</a> <a target="_blank" class="button-primary button upgrade" href="https://themecanary.com/pricing/smartlog/">';
      esc_html_e('Upgrade Smartlog Pro','smartlog');
      echo '</a></p>';

    echo '</div>';
  }
}