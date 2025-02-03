<?php
if (!defined('_CODE')) {
    die('Access denied');
}

$filterAll = filter();

if (!empty($filterAll['cate_img_id'])) {
    $cate_img_id = $filterAll['cate_img_id'];
    $productDetail = oneRaw("SELECT * FROM cate_img WHERE cate_img_id = $cate_img_id");
    if (!empty($productDetail)) {
        $imagePath = _WEB_PATH_TEMPLATE . '/image/' . $productDetail['p_image'];
        $deletePrododuct = delete('cate_img', "cate_img_id = '$cate_img_id'");
        if ($deletePrododuct) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
                setFlashData('smg', 'Xóa sản phẩm thành công');
                setFlashData('smg_types', 'success');
            } else {
                setFlashData('smg', 'Lỗi hệ thống');
                setFlashData('smg_types', 'danger');
            }
        } else {
            setFlashData('smg', 'Lỗi hệ thống');
            setFlashData('smg_types', 'danger');
        }
    }
} else {
    setFlashData('smg', 'Liên kết không tồn tại');
    setFlashData('smg_types', 'danger');
}

redirect('?module=admin&action=cate_img_management');
