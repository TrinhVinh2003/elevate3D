<!-- Đăng ký tài khoản -->
<?php
if (!defined('_CODE')) {
    die('Access denied');
}
$title = ['pageTitle' => 'Thêm hình ảnh'];

layouts('header-admin', $title);

if (isPost()) {
    $filterAll = filter();
    $errors = []; // Mảng chứa lỗi

    if (empty($_FILES['path_img']['name'][0])) {
        $errors['path_img']['required'] = 'Vui lòng upload ít nhất một ảnh.';
    } else {
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif']; // Định dạng cho phép
        $targetDir = _WEB_PATH_TEMPLATE . '/image/';

        // Duyệt qua từng file được tải lên
        foreach ($_FILES['path_img']['name'] as $key => $imageName) {
            $imageSize = $_FILES['path_img']['size'][$key];
            $imageTemp = $_FILES['path_img']['tmp_name'][$key];
            $fileExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            $targetFilePath = $targetDir . basename($imageName);

            // Kiểm tra định dạng file
            if (!in_array($fileExtension, $allowedTypes)) {
                $errors['path_img']['type'][$key] = 'File ' . $imageName . ' không đúng định dạng (JPG, JPEG, PNG, GIF).';
            }

            // Kiểm tra kích thước file (5MB tối đa)
            if ($imageSize > 5 * 1024 * 1024) {
                $errors['path_img']['size'][$key] = 'Dung lượng ảnh ' . $imageName . ' không được vượt quá 5MB.';
            }

            // Kiểm tra nếu file đã tồn tại
            if (file_exists($targetFilePath)) {
                $errors['path_img']['exists'][$key] = 'File ' . $imageName . ' đã tồn tại. Vui lòng đổi tên.';
            }

            // Nếu không có lỗi, di chuyển file đến thư mục đích
            if (empty($errors)) {
                if (move_uploaded_file($imageTemp, $targetFilePath)) {
                    $dataInsert = [
                        'path_img' => basename($imageName),
                        'category_id' => $filterAll['id'],
                    ];
                    insert('cate_img', $dataInsert);
                } else {
                    $errors['path_img']['upload'][$key] = 'Không thể upload ảnh ' . $imageName . '.';
                }
            }
        }
    }

    if (empty($errors)) {
        setFlashData('smg', 'Tất cả hình ảnh đã được tải lên thành công!');
        setFlashData('smg_types', 'success');
        redirect('?module=admin&action=cate_img_management');
    } else {
        setFlashData('smg', 'Vui lòng kiểm tra lại thông tin.');
        setFlashData('smg_types', 'danger');
        setFlashData('errors', $errors);
        redirect('?module=admin&action=cate_img_add');
    }
}


$smg = getFlashData('smg');
$smg_types = getFlashData('smg_types');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>

<body>
    <div class="header-color sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left text-light fs-4 me-5" id="menu-toggle"></i>
                <a href="?module=user&action=home"><img src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/66744c049cf374a519ff48b1_logo-digitalhomesio.svg" width="200px"></a>
            </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?module=admin&action=setting">Cấu hình</a></li>
                            <li><a class="dropdown-item" href="?module=auth&action=logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">

            <div class="list-group list-group-flush fw-bold">
                <a
                    href="?module=admin&action=dashboard"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                <a
                    href="?module=admin&action=email_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fa-solid fa-envelope me-2"></i>Quản lý email</a>
                <a
                    href="?module=admin&action=category_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fas fa-chart-line me-2"></i>Quản lý danh mục</a>
                <a
                    href="?module=admin&action=cate_img_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold active"><i class="fa-solid fa-image me-2"></i>Quản lý hình ảnh</a>
                <a
                    href="?module=auth&action=logout"
                    class="list-group-item list-group-item-action px-4 py-3 text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid px-4 pt-3 border">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?module=admin" style="text-decoration: none"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item"><a href="?module=admin&action=cate_img_management" style="text-decoration: none">Danh sách hình ảnh</a></li>
                    <li class="breadcrumb-item active"> Thêm hình ảnh </li>
                </ul>
            </div>

            <div class="container-fluid px-4">
                <h1 class="mt-4">Thêm hình ảnh</h1>
            </div>

            <div class="container-fluid px-4">
                <div class="row" style="margin: 50px auto">
                    <?php
                    if (!empty($smg)) {
                        getSmg($smg, $smg_types);
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group mg-form">
                            <label for="">Hình ảnh</label>
                            <input class="form-control" type="file" name="path_img[]" multiple />
                            <?php echo form_error('path_img', '<p class="text-danger">', '</p>', $errors); ?>
                        </div>
                        <div class="form-group mg-form">
                            <label for="id"> Danh mục
                            </label>
                            <select class="form-control" name="id">
                                <?php
                                $category = getRaw("SELECT * FROM category");
                                foreach ($category as $value):
                                ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo (old('id', $old) == $value['id']) ? 'selected' : false; ?><?= $value['name'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="row d-grid gap-2 justify-content-center">
                            <button class="btn btn-primary" type="submit">Thêm hình ảnh</button>
                            <a href="?module=admin&action=cate_img_management" class="btn btn-success" type="button">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</body>


<?php
layouts('footer-admin');
?>