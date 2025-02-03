<?php
if (!defined('_CODE')) {
    die('Access denied');
}
$title = ['pageTitle' => 'Cập nhật email'];

layouts('header-admin', $title);
$filterAll = filter();

if (!empty($filterAll['id'])) {
    $id = $filterAll['id'];

    $userDetail = oneRaw("SELECT * FROM email WHERE id = $id");
    // echo '<pre>';
    // print_r($userDetail);
    // echo '</pre>';
    if (!empty($userDetail)) {
        // Tồn tại
        setFlashData('user-detail', $userDetail);
    } else {
        redirect('?module=admin&action=email_management');
    }
}

if (isPost()) {
    $filterAll = filter();

    $errors = []; // mảng chứa lỗi\

    // Kiểm tra họ và tên: bắt buộc phải nhập, nhập ít nhất 5 ký tự
    if (empty($filterAll['name'])) {
        $errors['name']['required'] = 'Vui lòng nhập họ và tên';
    } else {
        if (strlen($filterAll['fullname']) < 5) {
            $errors['name']['min'] = 'Vui lòng nhập đầy đủ họ và tên!';
        }
    }


    // Kiểm tra email: bắt buộc phải nhập email, đúng định dạng email, kiểm tra email đã tồn tại trong database chưa
    if (empty($filterAll['email'])) {
        $errors['email']['required'] = 'Vui lòng nhập email';
    } else {
        $email = $filterAll['email'];
        $sql = "SELECT * FROM customer WHERE email = '$email' AND id <> '$userId'";
        if (getRows($sql) > 0) {
            $errors['email']['unique'] = 'Email đã đăng ký';
        }
    }


    // Kiểm tra password confirm: Bắt buộc phải nhập, giống với password
    if (empty($filterAll['phone'])) {
        $errors['phone']['required'] = 'Vui lòng nhập số điện thoại';
    } else {
        if (!isPhone($filterAll['phone'])) {
            $errors['phone']['isPhone'] = 'Số điện thoại không hợp lệ';
        }
    }

    if (empty($filterAll['description'])) {
        $errors['description']['required'] = 'Vui lòng nhập description';
    }

    if (empty($errors)) {
        $dataUpdate = [
            'name' => $filterAll['name'],
            'email' => $filterAll['email'],
            'phone' => $filterAll['phone'],
            'description' => $filterAll['description'],
        ];
        $updateStatus = update('email', $dataUpdate, "id = '$id'");
        if ($updateStatus) {
            setFlashData('smg', 'Chỉnh sửa thông tin email thành công!');
            setFlashData('smg_types', 'success');
        } else {
            setFlashData('smg', 'Hệ thống đang lỗi vui lòng thử lại sau!');
            setFlashData('smg_types', 'danger');
        }
    } else {
        setFlashData('smg', 'Vui lòng kiểm tra lại thông tin');
        setFlashData('smg_types', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $filterAll);
    }
    redirect('?module=admin&action=email_edit&id=' . $id);
}

$smg = getFlashData('smg');
$smg_types = getFlashData('smg_types');
$errors = getFlashData('errors');
$old = getFlashData('old');
$userDetail = getFlashData('user-detail');
if (!empty($userDetail)) {
    $old = $userDetail;
}
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
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold active"><i class="fa-solid fa-envelope me-2"></i>Quản lý email</a>
                <a
                    href="?module=admin&action=category_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fas fa-chart-line me-2"></i>Quản lý danh mục</a>
                <a
                    href="?module=admin&action=cate_img_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fa-solid fa-image me-2"></i>Quản lý hình ảnh</a>
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
                    <li class="breadcrumb-item"><a href="?module=admin&action=email_management" style="text-decoration: none">Quản lý email</a></li>
                    <li class="breadcrumb-item active"> Cập nhật email </li>
                </ul>
            </div>

            <div class="container-fluid px-4">
                <h1 class="mt-4">Cập nhật email</h1>
            </div>

            <div class="container-fluid px-4">
                <div class="row" style="margin: 50px auto">
                    <?php
                    if (!empty($smg)) {
                        getSmg($smg, $smg_types);
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="form-group mg-form">
                                    <label for="">Họ và tên</label>
                                    <input class="form-control" type="fullname" placeholder="Họ và tên" name="fullname"
                                        value="<?php echo old('fullname', $old) ?>" />
                                    <?php
                                    echo form_error('fullname', '<p class="text-danger">', '</p>', $errors);
                                    ?>
                                </div>
                                <div class="form-group mg-form">
                                    <label for="">Email</label>
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                        value="<?php echo old('email', $old) ?>" />
                                    <?php
                                    echo form_error('email', '<p class="text-danger">', '</p>', $errors);
                                    ?>
                                </div>
                                <div class="form-group mg-form">
                                    <label for="phone">Số điện thoại</label>
                                    <input class="form-control" type="phone" placeholder="Số điện thoại" name="phone"
                                        value="<?= old('phone', $old) ?>" />
                                    <?php
                                    echo form_error('phone', '<p class="text-danger">', '</p>', $errors);
                                    ?>
                                </div>
                                <div class="form-group mg-form">
                                    <label for="">Description</label>
                                    <input class="form-control" type="description" placeholder="Description" name="description"
                                        value="<?php echo old('description', $old) ?>" />
                                    <?php
                                    echo form_error('description', '<p class="text-danger">', '</p>', $errors);
                                    ?>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row d-grid gap-2 justify-content-center">
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <button class="btn btn-primary" type="submit">Update email</button>
                    <a href="?module=admin&action=email_management" class="btn btn-success" type="submit">Quay lại</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
</body>

</div>

<?php
layouts('footer-admin');
?>