<?php
if (!defined('_CODE')) {
    die('Access denied');
}

// Kiểm tra id trong database nếu tồn tại thì xóa
// Xóa dữ liệu bảng token_login trước sau đó xóa dữ liệu bảng customer
$filterAll = filter();

if (!empty($filterAll['id'])) {
    $id = $filterAll['id'];
    $userDetail = oneRaw("SELECT * FROM email WHERE id = $id");

    $deleteUser = delete('email', "id = '$id'");
    if ($deleteUser) {
        setFlashData('smg', 'Xóa email thành công');
        setFlashData('smg_types', 'success');
    } else {
        setFlashData('smg', 'Lỗi hệ thống');
        setFlashData('smg_types', 'danger');
    }
} else {
    setFlashData('smg', 'Liên kết không tồn tại');
    setFlashData('smg_types', 'danger');
}

redirect('?module=admin&action=email_management');
