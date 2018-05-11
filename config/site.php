<?php
define('LIMIT_ROW', 10);
define('LIMIT_FRONT_ROW', 16);
define('LIMIT_ROW_AJAX', 30);
define('ROLE_ADMIN', 'administrator');
define('ROLE_MANAGE', 'manage');
define('DATETIME_FORMAT', 'Y-m-d H:i:s');
define('VERSION', '1.2');
define('DATE_FORMAT', 'Y-m-d');
define('MAX_PREMIUM_FILE_DOWNLOAD', 2);
return [
    'roles' => array(
        'administrator' => 1,
        'manage'        => 2,
    ),
    'user_status' => array(
        'label' => array(
            1 => 'Đang hoạt động',
            0 => 'Đang khoá',
        ),
        'value' => array(
            'active'   => 1,
            'inactive' => 0
        ),
    ),
    'match_status' => array(
        'label' => array(
            0 => 'Sắp diễn ra',
            1 => 'Đang diễn ra',
            2 => 'Kết thúc',
            3 => 'Đã trả kết quả'
        ),
        'value' => array(
            'coming'         => 0,
            'playing'        => 1,
            'match_status'   => 2,
            'updated_result' => 2
        )
    ),
];
