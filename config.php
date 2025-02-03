<?php
// Các hằng số chung của project

// Điều hướng file
const _MODULE = 'user';
const _ACTION = 'dashboard';

// Cấp quyền truy cập cho file
const _CODE = true;

// Thiết lập host
define('_WEB_HOST', 'http://' . $_SERVER['HTTP_HOST'] . '/3Delevate');
define('_WEB_HOST_TEMPLATE', _WEB_HOST . '/templates');

// Thiết lập path
define('_WEB_PATH', __DIR__);
define('_WEB_PATH_TEMPLATE', 'D:\xampp\htdocs\3Delevate\templates');

// Thông tin kết nối
const _HOST = 'localhost';
const _DB = 'web';
const _USER = 'vinh';
const _PASS = '534473';

// Thời gian tại Việt Nam
date_default_timezone_set('Asia/Ho_Chi_Minh');

const _TIME = 20;
