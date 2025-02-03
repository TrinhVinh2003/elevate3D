<?php
if (!defined('_CODE')) {
    die('Access denied');
}

$title = [
    'pageTitle' => 'Dashboard'
];

layouts('header-admin', $title);

// Kiểm tra trạng thái đăng nhập

// if (!isLogin()) {
//     redirect('?module=auth&action=login');
// }
$listEmail = getRows("SELECT * FROM email");
$listCate = getRows("SELECT * FROM category");
$listImage = getRows("SELECT * FROM cate_img");
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
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold active"><i class="fa-solid fa-house me-2"></i>Dashboard</a>
                <a
                    href="?module=admin&action=email_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fa-solid fa-envelope me-2"></i>Quản lý email</a>
                <a
                    href="?module=admin&action=category_management"
                    class="list-group-item list-group-item-action px-4 py-3 fw-bold"><i class="fas fa-chart-line me-2"></i>Quản lý category</a>
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
                    <li class="breadcrumb-item active"> Trang chủ quản trị </li>
                </ul>
            </div>

            <div class="container-fluid px-4">
                <h1 class="mt-4">Trang chủ quản trị</h1>
            </div>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fa-solid fa-envelope fs-1 primary-text"></i>
                            <div>
                                <h3 class="fs-2"><?php echo $listEmail; ?></h3>
                                <p class="fs-5">Email</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fas fa-chart-line fs-1 primary-text"></i>
                            <div>
                                <h3 class="fs-2"><?php echo $listCate; ?></h3>
                                <p class="fs-5">Danh mục</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <i class="fa-solid fa-image fs-1 primary-text"></i>
                            <div>
                                <h3 class="fs-2"><?php echo $listImage; ?></h3>
                                <p class="fs-5">Hình ảnh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

</body>

</html>

<?php
layouts('footer-admin');
?>