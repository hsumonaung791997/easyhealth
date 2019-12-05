<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
// Define the status type
define("STATUS_ACTIVE", 1);
define("STATUS_INACTIVE", 0);
define("STATUS_PENDING", 2);

define("MALE", 1);
define("FEMALE", 0);

// define Date time
define('DB_DATE', 'Y-m-d H:i:s');

// Media File Upload
define('CATEGORY_MEDIA_UPLOAD', 16);
define('BLOG_MEDIA_UPLOAD', 19);
define('SERVICE_MEDIA_UPLOAD', 20);
define('LOCATION_MEDIA_UPLOAD', 21);
define('DOCTOR_MEDIA_UPLOAD', 22);
define('WHYUS_MEDIA_UPLOAD', 23);

define('PAGINATE', 25);

define('MEDIA_PATH', json_encode(
    array(
        16 => 'upload/categories',
        19 => 'upload/blogs',
        20 => 'upload/services',
        21 => 'upload/locations',
        22 => 'upload/doctors',
        23 => 'upload/whyus'
    )
));

define('MEDIA_TYPE', json_encode(
    array(
      'image' => array('field_name' => 'image_media', 'extension' => array("jpg", "gif", "png", "jpeg"), 'max_size' => 5000000),
    )
));

define('SERVICE_TYPE', json_encode(
	array(
		11 => 'GP Service',
		12 => 'Health Assessments',
		13 => 'Other'
	)
));

define('BLOG', json_encode(
    array(
        17 => 'PressRelease',
        18 => 'HealthBlog',
    )
));



