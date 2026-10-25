<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'ct-main-styles','ct-admin-frontend-styles','ct-page-title-styles' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/* Bootstrap 読み込み */
function my_bootstrap_enqueue() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css',
        array(),
        '5.3.7'
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.7',
        true
    );

}

add_action( 'wp_enqueue_scripts', 'my_bootstrap_enqueue' );

function my_scroll_animation() {
?>

<script>
document.addEventListener('DOMContentLoaded', function() {

  const targets = document.querySelectorAll('.home-section');

  // 2つ目以降は通常のIntersection Observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('show');
      }
    });
  }, {
    threshold: 0.15
  });

  targets.forEach((target, index) => {

    if(index === 0) {

      // 最初のセクションだけ50pxスクロール後に表示
      window.addEventListener('scroll', function() {
        if(window.scrollY > 50) {
          target.classList.add('show');
        }
      });

    } else {

      observer.observe(target);

    }

  });

});
</script>

<?php
}
add_action('wp_footer', 'my_scroll_animation');


