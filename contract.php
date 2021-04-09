<?php
session_start();
include 'config.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Khang Thi's Contract</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Khang Thi Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng điều khiển</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tổng quan
            </div>

            <!-- Nav Item - Store Info Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-user"></i>
                    <span>Thông tin cửa hàng</span>
                </a>
                <div id="collapseInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="storeinfo.php">Thông tin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-signature"></i>
                    <span>Quản lý hợp đồng</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="contract.php">Thông tin hợp đồng</a>
                        <a class="collapse-item" href="contract.php">Chưa thanh toán</a>
                        <a class="collapse-item" href="contract.php">Đã thanh toán</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-motorcycle"></i>
                    <span>Quản lý xe</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="product.php">Tất cả xe</a>
                        <a class="collapse-item" href="productready.php">Xe sẵn sàng</a>
                        <a class="collapse-item" href="productrented.php">Xe đang thuê</a>
                        <a class="collapse-item" href="productdeadline.php">Xe tới hạn trả</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Term -->
            <li class="nav-item">
                <a class="nav-link" href="term.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Điều khoản dịch vụ</span></a>
            </li>

            <!-- Nav Item - Wallet -->
            <li class="nav-item">
                <a class="nav-link" href="property.php">
                    <i class="fas fa-wallet"></i>
                    <span>Tài sản cửa hàng</span></a>
            </li>
            
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="revenue.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Thống kê doanh thu</span></a>
            </li>

            <!-- Nav Item - Support -->
            <li class="nav-item"  style="margin-left: 3px;">
                <a class="nav-link" href="support.php">
                    <i class="fas fa-info-circle"></i>
                    <span>Hỗ trợ</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo htmlspecialchars($_SESSION["email"]); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thông tin
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Nhật ký hoạt động
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Quản lý hợp đồng</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 card-product" >
                            <h6 class="m-0 font-weight-bold text-primary">Tất cả hợp đồng</h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php 
                            require_once 'config.php';
                            $sql = "SELECT * FROM rentalinfo";
                            // $sql = "SELECT rentalinfo.idhd,rentalinfo.idxe,rentalinfo.namecus,rentalinfo.address,rentalinfo.frontimg,rentalinfo.backimg,rentalinfo.datestart,rentalinfo.datefinish,products.name FROM rentalinfo, products WHERE rentalinfo.idxe = products.idxe";
                            //rentalinfo.id,rentalinfo.namecus,rentalinfo.datestart,rentalinfo.datefinish,rentalinfo.namecus, products.name FROM rentalinfo, products where rentalinfo.id = products.id
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table class='table table-bordered ' id='dataTable' width='100%' cellspacing='0'>" ;
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>Mã hợp đồng</th>";
                                                // echo "<th>Mã xe</th>";
                                                // echo "<th>Tên xe</th>";
                                                echo "<th>Thuê xe lúc</th>";
                                                echo "<th>Trả xe lúc</th>";
                                                echo "<th>Khách hàng</th>";
                                                echo "<th>Thao tác</th>";
                                            echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td>" . "HD00" . $row['idhd'] . "</td>";
                                            // echo "<td>" . "XE00" . $row['idxe'] . "</td>";                       
                                            // echo "<td>" . $row['name'] . "</td>";
                                            // action='updatecontract.php?id=" . $row['id'] . "'
                                            echo "<td>" . $row['datestart'] . "</td>";
                                            echo "<td>" . $row['datefinish'] . "</td>";
                                            echo "<td>" . $row['namecus'] . "</td>";
                                            echo "<td class='card-table-item'>";
                                                echo "<a class='card-table-link' href='detailcontract.php?idhd=". $row['idhd'] ."' title='View Record' data-toggle='tooltip'><i class='fas fa-info-circle card-table-icon'></i></a>";
                                                echo "
                                                <p class='card-table-link' style='margin-bottom:0;margin-left:15px;cursor:pointer'  title='Update Record' data-target='#exampleModalLong".$row['idhd']."' data-toggle='modal'><i class='fas fa-edit card-table-icon update-config' ></i>
                                                
                                                <form action='updatecontract.php?idhd=" . $row['idhd'] . "' method='post' enctype='multipart/form-data' class='modal fade' id='exampleModalLong".$row['idhd']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle".$row['idhd']."' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                  <div class='modal-content'>
                                                    <div class='modal-header'>
                                                      <h5 class='modal-title' id='exampleModalLongTitle".$row['idhd']."'>Cập nhật thông tin hợp đồng</h5>
                                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        
                                                        <div class='card-body_item '>
                                                            <label for=''>Tên khách hàng<sup>*</sup></label>
                                                            <input class='card-body_input' type='text' id='namecus' name='namecus' value='" . $row['namecus'] . "' required>
                                                            
                                                        </div>
                                                        <div class='card-body_item '>
                                                            <label for=''>Địa chỉ<sup>*</sup></label>
                                                            <input class='card-body_input' type='text' id='address' name='address' value='" . $row['address'] . "' required>       
                                                        </div>
                                                        <div class='card-body_item'>
                                                            <label for=''>Ngày bắt đầu thuê<sup>*</sup></label>
                                                            <input class='card-body_input' type='date' id='datestart' name='datestart' value=' " . $row['datestart'] . "' multiple require>
                                                        </div>
                                                        <div class='card-body_item'>
                                                            <label for=''>Ngày trả xe<sup>*</sup></label>
                                                            <input class='card-body_input' type='date' id='datefinish' name='datefinish' value=' " . $row['datestart'] . "' multiple require>
                                                        </div>
                                                        <div class='card-body_item'>
                                                            <label for=''>Chọn cmnd mặt trước<sup>*</sup></label>
                                                            <input class='card-body_input' type='file' id='frontimg' name='frontimg' value=' " . $row['frontimg'] . "' multiple require>
                                                        </div>
                                                        
                                                        <div class='card-body_item'>
                                                            <label for=''>Chọn cmnd mặt sau<sup>*</sup></label>
                                                            <input class='card-body_input' type='file' id='backimg' name='backimg' value=' " . $row['backimg'] . "' multiple require>
                                                        </div>
                                                        <div class='card-body_item'>
                                                            <label for=''>Note<sup>*</sup></label>
                                                            <input class='card-body_input' type='text' id='note' name='note' value=' " . $row['note'] . "' multiple require>
                                                        </div>
                                                        

                                                        
                                                    </div>
                                                    <div class='modal-footer'>
                                                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                                                      <input type='submit' id='submit' name='submit' class='btn btn-primary' value='Cập nhật'>
                                                    </div>
                                                  </div>
                                                </div>
                                              </form>
                                            </p>";
                                                echo "<a class='card-table-link' href='deletecontract.php?idhd=". $row['idhd'] ."' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash-alt card-table-icon'></i></a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";    

                                    echo "</table>";
                                    // Free result set
                                    mysqli_free_result($result);
                                    } else{
                                        echo "<p class='lead'><em>Không có hợp đồng nào tại cửa hàng.</em></p>";
                                    }
                                    } else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
        
                                    // Close connection
                                    mysqli_close($link);
                            ?>
                                <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã hợp đồng</th>
                                            <th>Tên xe</th>
                                            <th>Thuê xe lúc</th>
                                            <th>Trả xe lúc</th>
                                            <th>Khách hàng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Mã hợp đồng</th>
                                            <th>Tên xe</th>
                                            <th>Thuê xe lúc</th>
                                            <th>Trả xe lúc</th>
                                            <th>Khách hàng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>SH 2020</td>
                                            <td>21/04/2020</td>
                                            <td>23/04/2020</td>
                                            <td>Pé Toàn</td>
                                            <td class="card-table-item">
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-info-circle card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-edit card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-trash-alt card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="far fa-check-circle done card-table-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Air Blade 2020</td>
                                            <td>23/04/2020</td>
                                            <td>27/04/2020</td>
                                            <td>Pé Tâm</td>
                                            <td class="card-table-item">
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-info-circle card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-edit card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-trash-alt card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="far fa-check-circle card-table-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Winner 2020</td>
                                            <td>14/04/2020</td>
                                            <td>20/04/2020</td>
                                            <td>Pé Thơ</td>
                                            <td class="card-table-item">
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-info-circle card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-edit card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-trash-alt card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="far fa-check-circle card-table-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Bản quyền &copy; Khang Thị Company</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    
</body>

</html>