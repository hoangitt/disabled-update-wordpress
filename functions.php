<?php 
/* Disabled update core */
$func = function ($a) {
    global $wp_version;
    return (object) array(
                'last_checked' => time(),
                'version_checked' => $wp_version,
    );
};
add_filter('pre_site_transient_update_core', $func);
add_filter('pre_site_transient_update_plugins', $func);
add_filter('pre_site_transient_update_themes', $func);
