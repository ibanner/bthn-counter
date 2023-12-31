<?php
/**
 * @package bthn-counter
 * @version 1.0
 */

/**
 * Plugin Name:     BTHN Counter - Bring Them Home Now
 * Plugin URI:      https://effective-web.co.il/bthn/
 * Description:     This simple plugin will display the BTHN counter over your site. The counter was built by the The Hostages and Missing Families Forum. We just wrapped it indise a WordPress plugin.
 * Author:          Effective Web
 * Author URI:      https://effective-web.co.il
 * Version:         1.0
 */

function efw_bthn_counter() {
    $lang = ('he_IL' == get_locale() ? 'he' : 'en' );
    $output = '<div id="bthn" lang="' . $lang . '"></div><script>
(function () {
   var script = document.createElement("script");
   script.type = "text/javascript";
   script.src = "https://bringthemhomenow.net/1.0.8/hostages-ticker.js";
   script.setAttribute(
     "integrity",
     "sha384-jQVW0E+wZK5Rv1fyN+b89m7cYY8txH4s3uShzHf1T51hdBTPo7yKL6Yizgr+Gp8C"
   );
   script.setAttribute("crossorigin", "anonymous");
   document.getElementsByTagName("head")[0].appendChild(script);
 })();
</script>';
    
    echo $output;
}

add_action( 'wp_body_open', 'efw_bthn_counter' );