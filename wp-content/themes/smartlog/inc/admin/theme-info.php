<?php
/**
 * Add the about page under appearance.
 *
 * Display the details about the theme information
 *
 * @package smartlog
 */
?>
<?php
// About Information
add_action( 'admin_menu', 'smartlog_about' );
function smartlog_about() {         
        add_theme_page( esc_html__('About Theme', 'smartlog'), esc_html__('Smartlog Theme', 'smartlog'), 'edit_theme_options', 'smartlog-about', 'smartlog_about_page');   
}

// CSS for About Theme Page
function smartlog_admin_theme_style($hook) {

        if ( 'appearance_page_smartlog-about' != $hook ) {
        return;
    }

   wp_enqueue_style('smartlog-admin-style', get_template_directory_uri() . '/inc/admin/theme-info.css');
}
add_action('admin_enqueue_scripts', 'smartlog_admin_theme_style');

function smartlog_about_page() {
$theme = wp_get_theme();
$pro_purchase_url = "https://themecanary.com/pricing/smartlog/";
$doc_url = "https://themecanary.com/documentation/smartlog/";
$demo_url = "https://demo.themecanary.com/smartlog/#demos";
$support_url = "https://wordpress.org/support/theme/smartlog/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="smartlog-wrapper">
  <div id="theme-info-page">
    <div class="admin-banner">
      <div class="banner-left">
        <h2>
          <?php echo esc_html( $theme->Name ); ?>
        </h2>
        <p>
          <?php esc_html_e( 'Multipurpose WordPress Block Based Theme', 'smartlog' ); ?>
        </p>
      </div>
      <div class="banner-right">
        <div class="smartlog-buttons">
          <a href="<?php echo esc_url($doc_url); ?>" class="smartlog-admin-button demo" target="_blank" rel="noreferrer">
            <?php esc_html_e( 'Documentation', 'smartlog' ); ?>
          </a>
          <a href="<?php echo  esc_url($demo_url); ?>" class="smartlog-admin-button documentation" target="_blank" rel="noreferrer">
            <?php esc_html_e( 'Demo', 'smartlog' ); ?>
          </a>
          <a href="<?php echo  esc_url($pro_purchase_url); ?>" class="smartlog-admin-button upgrade-to-pro" target="__blank">
            <?php echo esc_html( 'Upgrade Pro', 'smartlog' ); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="feature-list">
          <div class="smartlog-about-container compare-table">
              <h3>
                <?php echo esc_html( $free_theme_name ); ?>
                <?php esc_html_e( 'Free Vs Pro', 'smartlog' ); ?>
              </h3>
              <table>
                <thead>
                  <tr>
                    <th>
                      <?php esc_html_e( 'Features', 'smartlog' ); ?>
                    </th>
                    <th>
                      <?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'smartlog' ); ?>
                    </th>
                    <th>
                      <?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Pro', 'smartlog' ); ?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Easy Setup', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Responsive', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Advance Color Options', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( '800+ Fonts', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Slider Options ', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Customizer', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Front/ Home page posts categories', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Boxed Layout', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Sidebar', 'smartlog' ); ?>
                    </td>
                    <td><?php esc_html_e('Right Sidebar','smartlog'); ?></span>
                    </td>
                    <td><?php esc_html_e('Right/Left/ Fullwidth/ No Sidebar','smartlog'); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Back to Top', 'smartlog' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Styles', 'smartlog' ); ?>
                    </td>
                    <td><?php esc_html_e('5','smartlog'); ?></span>
                    </td>
                    <td><?php esc_html_e('13','smartlog'); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Templates', 'smartlog' ); ?>
                    </td>
                    <td><?php esc_html_e('10','smartlog'); ?></span>
                    </td>
                    <td><?php esc_html_e('13','smartlog'); ?></span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <?php esc_html_e( 'Template Parts', 'smartlog' ); ?>
                    </td>
                    <td><?php esc_html_e('14','smartlog'); ?></span>
                    </td>
                    <td><?php esc_html_e('18','smartlog'); ?></span>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
      <div class="about-us">
        <div class="our-product"><span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
          <h3>
            <?php esc_html_e( 'Love our product?', 'smartlog' ); ?>
          </h3>
          <h4>
            <?php esc_html_e( 'Motivate 5 Star rating', 'smartlog' ); ?>
          </h4>
          <a href="https://wordpress.org/support/theme/smartlog/reviews/?filter=5" class="smartlog-admin-button" target="__blank">
            <?php esc_html_e( 'Rate Us', 'smartlog' ); ?>
          </a>
        </div>
        <div class="our-product">
          <h3>
            <?php esc_html_e( 'Still have any question?', 'smartlog' ); ?>
          </h3>
          <p>
          <?php esc_html_e( 'Don\'t hesitate to ask', 'smartlog' ); ?>
          </p>
          <a href="<?php echo esc_url($support_url); ?>" class="smartlog-admin-button" target="_blank">
            <?php esc_html_e( 'Get Support', 'smartlog' ); ?>
          </a>
        </div>
        <div class="smartlog-buttons">
          <a href="<?php echo esc_url($pro_purchase_url); ?>" class="smartlog-admin-button upgrade-to-pro" rel="noreferrer" target="_blank"><i class="fa fa-paint-brush"></i>
            <?php printf( esc_html( 'Get Smartlog Pro', 'smartlog' ), $theme->Name ); ?>
          </a>
          <a href="<?php echo esc_url($doc_url); ?>" class="smartlog-admin-button premium-button documentation" target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
            <?php esc_html_e( 'Documentation', 'smartlog' ); ?>
          </a>
        </div>
      </div>
    </div>
</div>

<?php }