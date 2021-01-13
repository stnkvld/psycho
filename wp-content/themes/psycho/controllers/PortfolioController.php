<?php
if (empty($wp)) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');
}

if (isset($_POST['name']) && isset($_POST['industry']) && isset($_POST['year']) && isset($_POST['category']) && isset($_POST['description-work'])
    && isset($_POST['link']) && isset($_POST['description-company']) && isset($_POST['work-image']) && isset($_POST['index-image'])){

    // Переменные с формы
    $name = $_POST['name'];
    $industry = $_POST['industry'];
	$year = $_POST['year'];
	$category = $_POST['category'];
	$description_work = $_POST['description-work'];
	$link = $_POST['link'];
	$description_company = $_POST['description-company'];
	$work_image = $_POST['work-image'];
	$index_image = $_POST['index-image'];

	$wpdb->insert("wp_works", array(
	    "name" => $name,
        "industry" => $industry,
        "year" => $year,
        "category" => $category,
        "description_work" => $description_work,
        "link" => $link,
        "description_company" => $description_company,
        "work_image" => $work_image,
        "index_image" => $index_image
    ), array(
        "%s",
        "%s",
        "%d",
        "%s",
        "%s",
        "%s",
        "%s",
        "%s",
        "%s",
        )
    );
}
?>
