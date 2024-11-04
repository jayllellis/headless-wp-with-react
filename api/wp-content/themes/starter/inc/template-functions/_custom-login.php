<?php
/*--------------------------------------------------------------
* Custom login logo, url & title
--------------------------------------------------------------*/
function rwp_login_logo() { ?>

  <style type="text/css">
  body.login div#login h1 a {
    background-image: url('<?= rwp_custom_logo_url(); ?>');
    width: 128px;
    height: 128px;
    background-size: 128px auto;
  }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'rwp_login_logo' );

function rwp_login_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'rwp_login_url' );

function rwp_login_url_title() {
    return get_bloginfo( 'name' );
}

add_filter( 'login_headertext', 'rwp_login_url_title' );
