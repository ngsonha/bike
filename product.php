<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

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

    <title>Khang Thi's Product</title>

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
    <?php $cart=(isset($_SESSION['cart']))? $_SESSION['cart']:[] ; $SoLuong=0; foreach ($cart as $key => $value): $SoLuong++?>
    <?php endforeach ?>

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
                    <span>B???ng ??i???u khi???n</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                T???ng quan
            </div>

            <!-- Nav Item - Store Info Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-user"></i>
                    <span>Th??ng tin c???a h??ng</span>
                </a>
                <div id="collapseInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="storeinfo.php">Th??ng tin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-signature"></i>
                    <span>Qu???n l?? h???p ?????ng</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="contract.php">Th??ng tin h???p ?????ng</a>
                        <a class="collapse-item" href="contract.php">Ch??a thanh to??n</a>
                        <a class="collapse-item" href="contract.php">???? thanh to??n</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-motorcycle"></i>
                    <span>Qu???n l?? xe</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="product.php">T???t c??? xe</a>
                        <a class="collapse-item" href="productready.php">Xe s???n s??ng</a>
                        <a class="collapse-item" href="productrented.php">Xe ??ang thu??</a>
                        <a class="collapse-item" href="productdeadline.php">Xe t???i h???n tr???</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Term -->
            <li class="nav-item">
                <a class="nav-link" href="term.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>??i???u kho???n d???ch v???</span></a>
            </li>

            <!-- Nav Item - Wallet -->
            <li class="nav-item">
                <a class="nav-link" href="property.php">
                    <i class="fas fa-wallet"></i>
                    <span>T??i s???n c???a h??ng</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="revenue.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Th???ng k?? doanh thu</span></a>
            </li>

            <!-- Nav Item - Support -->
            <li class="nav-item" style="margin-left: 3px;">
                <a class="nav-link" href="support.php">
                    <i class="fas fa-info-circle"></i>
                    <span>H??? tr???</span></a>
            </li>


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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="T??m ki???m..."
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

                        <!-- cart  -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="cartProducts" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo $SoLuong?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                style="width: 28rem !important;" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Th??ng tin gi??? h??ng
                                </h6>
                                <?php $TongTien=0;foreach ($cart as $key => $value) : ?>
                                <?php $TienTungXe=0;?>
                                <div class="dropdown-item d-flex align-items-center"
                                    style="justify-content: space-between;">

                                    <div class="col-3">
                                        <img style="height:60px; width:80px" src="<?php echo $value['HinhAnh'] ?>"
                                            alt="">
                                    </div>
                                    <div class="col-3">
                                        <div><?php echo $value['TenXe']?></div>
                                    </div>
                                    <div style="text-align: right" class="col-3">
                                        <?php 
                                        $NgayBatDau = new DateTime($value['NgayBatDau']);
                                        $NgayKetThuc = new DateTime($value['NgayKetThuc']);
                                        $interval = $NgayBatDau->diff($NgayKetThuc);
                                        if($interval->m !==0){
                                            $TienTungXe=$TienTungXe+($interval->m * $value['GiaTheoThang']+$interval->d* $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            echo '
                                            <span class="font-weight-bold small text-gray-700">
                                              '.$interval->m.' Tha??ng '.$interval->d.' Nga??y '.$interval->h.' Gi???? <br>'. $TienTungXe.'??</br></span>
                                             </div>';
                                            $TongTien=$TongTien+($interval->m * $value['GiaTheoThang']+$interval->d* $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                        }
                                        elseif($interval->d !==0){
                                            $TienTungXe=$TienTungXe+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            echo '
                                            <span class="font-weight-bold small text-gray-700">
                                              '.$interval->d.'Nga??y  '.$interval->h.' Gi???? <br>'. $TienTungXe.'??</br></span>
                                            </div>';
                                            $TongTien=$TongTien+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            
                                        }else if ($interval->h !==0){
                                            $TienTungXe=$TienTungXe+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                           echo'
                                            <span class="font-weight-bold small text-gray-700">
                                              '.$interval->h.' Gi???? <br>'. $TienTungXe.'??</br></span>
                                             </div>';
                                             $TongTien=$TongTien+($interval->d * $value['GiaTheoNgay']+$interval->h*$value['GiaTheoGio']);
                                            }?>

                                        <a href="Cart.php?MaXe=<?php echo $value['MaXe'] ?>&action=delete" title=""
                                            class="btn btn-danger">Xo??a</a>


                                    </div>

                                    <?php endforeach  ?>

                                    <div class="dropdown-item d-flex align-items-center">


                                        <div class="col-4">
                                            <h5 class="text-gray-700">T???ng </h5>


                                        </div>
                                        <div class="col-4" style="text-align: center">
                                            <h5 class="text-gray-700"> x<?php echo $SoLuong ?> </h5>
                                        </div>

                                        <div class="col-4" style="text-align: right">
                                            <h5 class="text-gray-700"><?php echo $TongTien ?>??</h5>

                                        </div>

                                    </div>
                                    <div style="text-align:right;margin: 10px 10px 10px 10px"><button type="button"
                                            class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalLong2">Thanh to??n</button>
                                        <a href="product.php">
                                            <button type="button" class="btn btn-secondary">Quay
                                                l???i</button>
                                        </a></div>

                                </div>

                                <form action="rentproduct.php" method="post" enctype="multipart/form-data"
                                    class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    Th??ng
                                                    tin kh??ch h??ng thu?? </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="card-body_item">
                                                    <label for="">Nh???p t??n kh??ch
                                                        h??ng<sup>*</sup></label>
                                                    <input class="card-body_input" type="text" id="namecus"
                                                        name="namecus" required>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">?????a ch???<sup>*</sup></label>
                                                    <input class="card-body_input" type="text" id="address"
                                                        name="address" required>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">Ng??y thu?? xe<sup>*</sup></label>
                                                    <input class="card-body_input" type="datetime-local" id="datestart"
                                                        name="datestart" required>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">Ng??y tr??? xe<sup>*</sup></label>
                                                    <input class="card-body_input" type="datetime-local" id="datefinish"
                                                        name="datefinish" required>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">CMND m???t tr?????c<sup>*</sup></label>
                                                    <input class="card-body_input" type="file" id="frontimg"
                                                        name="frontimg" required>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">CMND m???t sau<sup>*</sup></label>
                                                    <input class="card-body_input" type="file" id="backimg"
                                                        name="backimg" required>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">H??nh th???c thanh
                                                        to??n<sup>*</sup></label>
                                                    <select name="select_item-bank" id="select_item-bank">
                                                        <option value="Thanh to??n tr???c tuy???n">Thanh
                                                            to??n
                                                            tr???c tuy???n</option>
                                                        <option value="Thanh to??n tr???c ti???p">Thanh
                                                            to??n
                                                            tr???c ti???p</option>
                                                    </select>
                                                </div>
                                                <div class="card-body_item">
                                                    <label for="">Ghi ch??<sup>*</sup></label>
                                                    <input style="margin-left:1px" class="card-body_input" type="text"
                                                        id="note" name="note" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">????ng</button>
                                                <button type="submit" id="submit" name="submit"
                                                    class="btn btn-primary">X??c nh???n</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>






                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo htmlspecialchars($_SESSION["email"]); ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Th??ng tin
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    C??i ?????t
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Nh???t k?? ho???t ?????ng
                                </a>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ????ng xu???t
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php $result1 =$link->query("SELECT count(chitietxe.Maxe) as Number  FROM (chitietxe inner join loaixe on chitietxe.MaLoaiXe = loaixe.MaLoaiXe) ")?>
                    <?php ($row1=$result1->fetch_assoc())?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh S??ch T????t Ca?? Xe /
                        <?php echo'<span style=" color: blue">'.$row1['Number'].'</span>'?> Xe
                    </h1>
                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 card-product">
                            <div class="sub-card-product">
                                <h6 class="m-0 font-weight-bold text-primary">Loa??i Xe</h6>
                                <select name="Loaixe" id="Loaixe" class="card-select-product">
                                    <option value="0">T???t c???</option>

                                </select>
                            </div>

                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#exampleModalLong">Th??m xe </button>

                            <form action="addproduct.php" method="post" enctype="multipart/form-data" class="modal fade"
                                id="exampleModalLong" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Th??m xe</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body_item">
                                                <label for="">Ch???n h??nh ???nh xe<sup>*</sup></label>
                                                <input class="card-body_input" type="file" id="HinhAnh" name="HinhAnh"
                                                    multiple require>
                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">T??n xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="TenXe" name="TenXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Bi???n s??? xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="BienSoXe" name="BienSoXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Khung xe<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="KhungXe" name="KhungXe"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">M??u s???c<sup>*</sup></label>
                                                <input class="card-body_input" type="text" id="MauSac" name="MauSac"
                                                    required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">N??m ????ng k??<sup>*</sup></label>
                                                <input class="card-body_input" type="date" id="NamDangKy"
                                                    name="NamDangKy" required>

                                            </div>
                                            <?php 
                                            
                                            $sql = "select * from loaixe"; 
                                            $result=$link->query($sql);
                                            ?>
                                            <div class="card-body_item ">
                                                <label for="">Lo???i xe<sup>*</sup></label>
                                                <select name="TenLoaiXe" id="TenLoaiXe">

                                                    <?php 
                                                     foreach($result as $tl){
                                                    echo " <option value=".$tl['MaLoaiXe'].">".$tl['TenLoaiXe']."</option>";
                                                }
                                                ?>

                                                </select>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">T??nh tr???ng xe<sup>*</sup></label>
                                                <select onchange="ColorFunction(this.value)" id="TrangThai"
                                                    name="TrangThai" style="color: green;">
                                                    <option value="S????n Sa??ng" style="color: green">S????n
                                                        Sa??ng
                                                    </option>
                                                    <option value="??ang ????????c Thu??" style="color: yellow">??ang ????????c
                                                        Thu??</option>
                                                    <option value="T????i Ha??n Tra??" style="color: red">T????i Ha??n Tra??

                                                    </option>
                                                </select>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Gi?? Thu?? Theo Gi????<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThueTheoGio"
                                                    name="GiaThueTheoGio" min="0" required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Gi?? Thu?? Theo Nga??y<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThueTheoNgay"
                                                    name="GiaThueTheoNgay" min="0" required>

                                            </div>
                                            <div class="card-body_item ">
                                                <label for="">Gi?? Thu?? Theo Tha??ng<sup>*</sup></label>
                                                <input class="card-body_input" type="number" id="GiaThueTheoThang"
                                                    name="GiaThueTheoThang" min="0" required>

                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">????ng</button>
                                            <input type="submit" id="submit" name="submit" class="btn btn-primary"
                                                value="Th??m m???i">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                // if (isset($errors)) {
                                // echo implode('<br/>', $errors);
                                // exit();
                                // }
                                // Include config file
                                require_once 'config.php';
                                // Attempt select query execution
                                
                                    
                                $sql = "SELECT chitietxe.MaXe,chitietxe.TenXe,chitietxe.MaLoaiXe,chitietxe.BienSoXe,chitietxe.KhungXe,chitietxe.MauSac,chitietxe.NamDangKy,chitietxe.TrangThai,chitietxe.HinhAnh,chitietxe.GiaThueTheoGio,chitietxe.GiaThueTheoNgay,chitietxe.GiaThueTheoThang,loaixe.TenLoaiXe,loaixe.SoLuong FROM (chitietxe inner join loaixe on chitietxe.MaLoaiXe = loaixe.MaLoaiXe)";
                                
                                if($result = mysqli_query($link, $sql)  ){
                                    if(mysqli_num_rows($result)  > 0){
                                        echo "<table class='table table-bordered ' id='dataTable' width='100%' cellspacing='0'>" ;
                                            echo "<thead>";
                                                echo "<tr>";
                                                    echo "<th>M?? xe</th>";
                                                    echo "<th>T??n xe</th>";
                                                    echo "<th>Loa??i Xe</th>";
                                                    echo "<th>H??nh ???nh</th>";
                                                    echo "<th>T??nh tr???ng xe</th>";
                                                    echo "<th>Gia?? Gi????</th>";
                                                    echo "<th>Gia?? Nga??y</th>";
                                                    echo "<th>Gia?? Tha??ng</th>";
                                                    echo "<th>Thao t??c</th>";
                                                    
                                                echo "</tr>";
                                                echo "</thead>";
                                                ?>
                                <tbody id="chitietxe" name="chitietxe">
                                    <?php while($row = mysqli_fetch_array($result) ){ ?>
                                    <tr>
                                        <td><?php echo $row['MaXe'];?></td>
                                        <td><?php echo $row['TenXe'];?></td>

                                        <td><?php echo $row['TenLoaiXe'];?></td>
                                        <td style="text-align:center"> <img src='<?php echo $row['HinhAnh'];?>'
                                                style='width:150px; height:80px; border-radius:10px;'> </td>
                                        <td class='card-status-ready' id="ShowTrangThai" name="ShowTrangThai" value="<?php  echo $row['TrangThai'];?>
">
                                            <?php echo $row['TrangThai'];?>
                                        </td>
                                        <td><?php echo $row['GiaThueTheoGio']."??";?></td>
                                        <td><?php echo $row['GiaThueTheoNgay']."??";?></td>
                                        <td><?php echo $row['GiaThueTheoThang']."??";?></td>
                                        <td class='card-table-item'>
                                            <a class='card-table-link'
                                                href='detailproductready.php?MaXe=<?php echo $row ['MaXe']; ?>'
                                                title='View Record' data-toggle='tooltip'><i
                                                    class='fas fa-info-circle card-table-icon'></i></a>
                                            <p class='card-table-link'
                                                style='margin-bottom:0;margin-left:15px;cursor:pointer'
                                                title='Update Record'
                                                data-target='#exampleModalLong<?php echo $row ['MaXe']; ?>'
                                                data-toggle='modal'><i
                                                    class='fas fa-edit card-table-icon update-config'></i>
                                                <form action='updateproduct.php?MaXe=<?php echo $row ['MaXe']; ?>'
                                                    method='post' enctype='multipart/form-data' class='modal fade'
                                                    id='exampleModalLong<?php echo $row ['MaXe']; ?>' tabindex='-1'
                                                    role='dialog'
                                                    aria-labelledby='exampleModalLongTitle<?php echo $row ['MaXe']; ?>'
                                                    aria-hidden='true'>
                                                    <div class='modal-dialog' role='document'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title'
                                                                    id='exampleModalLongTitle<?php echo $row ['MaXe']; ?>'>
                                                                    C???p
                                                                    nh???t xe</h5>
                                                                <button type='button' class='close' data-dismiss='modal'
                                                                    aria-label='Close'>
                                                                    <span aria-hidden='true'>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class='modal-body'>
                                                                <div class='card-body_item'>
                                                                    <label for=''>Ch???n h??nh ???nh xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='file'
                                                                        name='HinhAnh'
                                                                        value=' <?php echo $row ['HinhAnh']; ?>'
                                                                        multiple require>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>T??n xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='TenXe'
                                                                        value='<?php echo $row ['TenXe']; ?>' required>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Bi???n s??? xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='BienSoXe'
                                                                        value='<?php echo $row ['BienSoXe']; ?>'
                                                                        required>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Khung Xe<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='KhungXe'
                                                                        value='<?php echo $row ['KhungXe']; ?>'
                                                                        required>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>M??u S???c<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='MauSac'
                                                                        value='<?php echo $row ['MauSac']; ?>' required>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>N??m ????ng k??<sup>*</sup></label>
                                                                    <input class='card-body_input' type='text'
                                                                        name='NamDangKy'
                                                                        value='<?php echo $row ['NamDangKy']; ?>'
                                                                        required>

                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Lo???i xe<sup>*</sup></label>
                                                                    <select name='TenLoaiXe1' id='TenLoaiXe1'>
                                                                        <option
                                                                            value='<?php echo $row ['MaLoaiXe']; ?>'>
                                                                            <?php echo $row ['TenLoaiXe']; ?></option>
                                                                        <?php
                                                                $MaLoaiXe=$row ['MaLoaiXe']; 
                                                                  $sql1="SELECT MaLoaiXe,TenLoaiXe FROM `loaixe` where MaLoaiXe NOT in (SELECT MaLoaiXe from `loaixe` where MaLoaiXe=$MaLoaiXe)";
                                                                 $result1=$link->query($sql1);                                                        
                                                                ?>
                                                                        <?php 
                                                             foreach($result1 as $tl1){
                                                             ?>
                                                                        <option
                                                                            value="<?php echo $tl1 ['MaLoaiXe']; ?>">
                                                                            <?php echo $tl1 ['TenLoaiXe']; ?></option>
                                                                        <?php
                                                                }
                                                             ?>
                                                                    </select>
                                                                </div>
                                                                <div class="card-body_item ">
                                                                    <label for="">T??nh tr???ng xe<sup>*</sup></label>
                                                                    <select id="TrangThai" name="TrangThai"
                                                                        <?php  if ($row ['TrangThai']=="S????n Sa??ng") echo 'style="color: green"';
                                                                        else if ($row ['TrangThai']=="??ang ????????c Thu??") echo 'style="color: yellow"';
                                                                        else if ($row ['TrangThai']=="T????i Ha??n Tra??") echo 'style="color: red"';?>>
                                                                        <?php   
                                                                 $TrangThai=$row ['TrangThai'];
                                                                $array=['S????n Sa??ng','??ang ????????c Thu??','T????i Ha??n Tra??'];
                                                             foreach($array as $tt){
                                                             ?>
                                                                        <option value="<?php echo $tt;?>" <?php  if ($tt=="S????n Sa??ng") echo 'style="color: green"';
                                                                        else if ($tt=="??ang ????????c Thu??") echo 'style="color: yellow"';
                                                                        else if ($tt=="T????i Ha??n Tra??") echo 'style="color: red"';
                                                                         if($tt==$TrangThai) {echo 'selected';
                                                                       }
                                                                        ?>>
                                                                            <?php echo $tt;?>
                                                                        </option>
                                                                        <?php
                                                                }
                                                             ?>
                                                                    </select>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Gi?? Gi????<sup>*</sup></label>
                                                                    <input class='card-body_input' type='number'
                                                                        name='GiaThueTheoGio' min='0'
                                                                        value='<?php echo $row ['GiaThueTheoGio']; ?>'
                                                                        required>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Gi?? Nga??y<sup>*</sup></label>
                                                                    <input class='card-body_input' type='number'
                                                                        name='GiaThueTheoNgay' min='0'
                                                                        value='<?php echo $row ['GiaThueTheoNgay']; ?>'
                                                                        required>
                                                                </div>
                                                                <div class='card-body_item '>
                                                                    <label for=''>Gi?? Tha??ng<sup>*</sup></label>
                                                                    <input class='card-body_input' type='number'
                                                                        name='GiaThueTheoThang' min='0'
                                                                        value='<?php echo $row ['GiaThueTheoThang']; ?>'
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-secondary'
                                                                    data-dismiss='modal'>????ng</button>
                                                                <input type='submit' name='submit'
                                                                    class='btn btn-primary' value='C???p nh???t'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </p>
                                            <a class='card-table-link'
                                                href='deleteproduct.php?MaXe=<?php echo $row ['MaXe']; ?>'
                                                title='Delete Record' data-toggle='tooltip'><i
                                                    class='fas fa-trash-alt card-table-icon'></i></a>
                                            <?php if($row['TrangThai']=="S????n Sa??ng") {?>
                                            <button type="button
                                                " class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalLong1<?php echo $row ['MaXe']; ?>">Thu??
                                                xe</button>
                                            <form action="Cart.php?MaXe=<?php echo $row ['MaXe']; ?>" method="POST"
                                                id="exampleModalLong1<?php echo $row ['MaXe']; ?>"
                                                enctype="multipart/form-data" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLongTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="card-body_item">
                                                                <label for="">Ng??y thu?? xe<sup>*</sup></label>
                                                                <input class="card-body_input" type="datetime-local"
                                                                    id="datestart" name="datestart" required>
                                                            </div>
                                                            <div class="card-body_item">
                                                                <label for="">Ng??y tr??? xe<sup>*</sup></label>
                                                                <input class="card-body_input" type="datetime-local"
                                                                    id="datefinish" name="datefinish" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">????ng</button>
                                                            <button type="submit" class="btn btn-primary">X??c
                                                                nh???n</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <?php   
                                        }
                                        ?>

                                    </table>
                                    <?php
                                        mysqli_free_result($result);
                                        } else{
                                            echo "<p class='lead'><em>Kh??ng c?? xe n??o t???i c???a h??ng.</em></p>";
                                        }
                                        } else{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                        }
                                            ?>
                                    <?php
                                        // Close connection
                                        mysqli_close($link);
                                
                                        ?>


                                    <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>M?? xe</th>
                                            <th>T??n xe</th>
                                            <th>T??nh tr???ng xe</th>
                                            <th>Gi??</th>
                                            <th>M?? t???</th>
                                            <th>Thao t??c</th>
                                        </tr>
                                    </thead>
                                    
                                    
                                    <tbody>
                                        <tr>
                                            <td>< echo $productId; ?></td>
                                            <td>< echo $productName; ?></td>
                                            <td class="card-status-ready">< echo $productStatus; ?></td>
                                            <td>< echo $productPrice; ?></td>
                                            <td>< echo $productDescription; ?></td>
                                            <td class="card-table-item">
                                                <a href="product.php?id=< echo $lastInsertId; ?>" class="card-table-link">
                                                    <i class="fas fa-info-circle card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-edit card-table-icon"></i>
                                                </a>
                                                <a href="" class="card-table-link">
                                                    <i class="fas fa-trash-alt card-table-icon"></i>
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
                        <span>B???n quy???n &copy; Khang Th??? Company</span>
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
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        function loadData(type, MaLoaiXe) {
            $.ajax({
                url: "loadtatcaxe.php",
                type: "POST",
                data: {
                    type: type,
                    id: MaLoaiXe
                },
                success: function(data) {
                    if (type == "Loadtatcaxe") {
                        $("#chitietxe").html(data);

                    } else {
                        $("#Loaixe").append(data);

                    }
                }
            });
        }
        loadData();
        $("#Loaixe").on("change", function() {
            var Loaixe = $("#Loaixe").val();
            loadData("Loadtatcaxe", Loaixe);
        });
    });
    </script>
    <script type="text/javascript" src="js/Color.js"></script>

</body>

</html>