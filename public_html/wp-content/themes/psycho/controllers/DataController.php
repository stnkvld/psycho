<?php
if (empty($wp)) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
}

$results = $wpdb->get_results("SELECT * FROM `wp_works` WHERE `id`=".$_POST['portfolio-id']);

echo JSON_ENCODE($results[0]);
?>