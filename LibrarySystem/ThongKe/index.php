<!DOCTYPE HTML>
<?php
 session_start();
 include '../Databases/db_connect.php';
 $db = new DB_CONNECT();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Management System</title>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/myStyle.css">
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/style.css">
        <script src="http://localhost/LibrarySystem/Script/google_jquery.min.js"></script>
        <script src="http://localhost/LibrarySystem/Script/bootstrap.min.js"></script>
        <script src="../Script/ajax.js"></script>
        <script type="text/javascript" src="http://localhost/LibrarySystem/Script/print.js"></script>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/font-awesome-4.3.0/css/font-awesome.min.css">
    </head>
    <body >

        <!--Vùng header bao gồm picture + menu nav-->

        <header id="header" class="header">

            <!--Picture, Logo, Text-->
            <div class="container-inner">
                <div class="yusi-logo">
                    <a href="#">
                        <h1>
                            <span class="yusi-mono">Library Management System</span>
                            <span class="yusi-bloger">UET &#8211 VNU</span>
                        </h1>
                    </a>
                </div>
            </div>

            <!--Menu nav-->
            <div id="nav-header" class="navbar">

                <ul class="nav">

                    <!--Item trang chủ-->
                    <li id="menu-item-821" class="menu-item menu-item-type-custom menu-item-object-custom   menu-item-home menu-item-821">
                        <a href="http://localhost/LibrarySystem/index.php">
                            <i class="fa fa-home" style="font-size: 1.3em;">
                            </i> Trang chủ
                        </a>
                    </li>

                    <!--Item Quản lý bạn đọc-->
                    <li id="menu-item-1112" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1112">
                        <a href="http://localhost/LibrarySystem/QuanLySach/index.php">
                            <i class="fa fa-group">
                            </i> Quản lý bạn đọc
                        </a>
                        <ul class="sub-menu">
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Mới tham gia
                                </a>
                            </li>
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Thành viên tích cực
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!--Item quản lý sách-->
                    <li id="menu-item-1116" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1116">
                        <a href="http://localhost/LibrarySystem/QuanLySach/index.php">
                            <i class="fa fa-book">

                            </i> Quản lý sách
                        </a>
                        <ul class="sub-menu">
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Sách mượn nhiều
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Item Quản lý mượn trả -->
                    <li id="menu-item-1113" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1113">
                        <a href="http://localhost/LibrarySystem/QuanLyMuonTra/index.php">
                            <i class="fa fa-bank">

                            </i> Quản lý mượn trả
                        </a>
                        <ul class="sub-menu">
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Mượn sách
                                </a>
                            </li>
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Trả sách
                                </a>
                            </li>
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Quá hạn
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!--Item thống kê-->
                    <li id="menu-item-1803" class="menu-item menu-item-type-custom  current_page_item menu-item-object-custom menu-item-has-children menu-item-1803">
                        <a href="http://localhost/LibrarySystem/ThongKe/index.php" ><i class="fa fa-cog">

                            </i>Thống kê
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <section class="container">

        <!--Chạy chữ giới thiệu-->
        <div class="speedbar">
            <div class="toptip">
                <marquee width="100%" behavior="scroll" direction="left" scrollamount="7">
                    <a target="_blank" href="#">Hệ thống quản lý thư viện: Quản lý các đầu sách, nhà xuất bản  - Quản lý bạn đọc - Quản lý việc mượn, trả sách - Thống kê</a>
                </marquee>
            </div>
        </div>

        <article class="excerpt">
            <header>
                <a class="label label-important" href="#">Hot
                <i class="label-arrow"></i>
                </a>
                <h2>
                    <a target="_blank" href="#" >Báo cáo - Thống kê
                    </a>
                    </h2>
            </header>

            <!-- Nội dung báo cáo thống kê-->
            <ul class="nav nav-tabs">
                <li class="active"><a class="btn2" data-toggle="tab" href="#menu0" >In thẻ thư viện</a></li>
                <li><a class="btn1" data-toggle="tab" href="#menu1">Tác giả</a></li>
                <li><a class="btn1" data-toggle="tab" href="#menu2" >Nhà xuất bản</a></li>
                <li><a class="btn2"data-toggle="tab" href="#menu3" >Ngày mượn</a></li>
                <li><a class="btn2"data-toggle="tab" href="#menu4" >Số lượng mượn</a></li>

            </ul>

            
            
            <div class="tab-content" id="menu"style="">

            <!-- Nội dung In thẻ thư viên-->
                <div id="menu0" class="tab-pane fade in active">
                    <!-- tìm kiếm theo ngày-->
                    <form name="search0">
                        <tr>
                            <td><input type="date" id="date1"  required></td>
                            <td>---</td>
                            <td><input type="date" id="date2" required></td>
                            <td><input class="submit" type="button" value="Tìm kiếm" onclick="showUser()"></td>
                        </tr>
                            
                    </form>
                    <!-- kết quả tìm kiếm -->
                    <div id="in_the"></div> 
              
                </div>

            <!-- Nội dung Thống kê theo tác giả-->
                <div id="menu1" class="tab-pane fade">
                    <?php
                        require_once 'theoTacGia.php';
                    ?>
                    <input class="submit" type="button" value="In ấn" onclick="PrintElem('#menu1')" />
                </div>

            <!-- Nội dung Thống kê theo nhà xuất bản-->
                <div id="menu2" class="tab-pane fade">
                    <?php
                        require_once 'theoNXB.php';
                    ?>
                    <input class="submit" type="button" value="In ấn" onclick="PrintElem('#menu2')" />
                </div>

            <!-- Nội dung Thống kê theo ngày mượn-->
                <div id="menu3" class="tab-pane fade">
                <!-- tìm kiếm theo ngày-->
                    <form name="search3">               
                        <tr>
                            <td><input type="date" id="date3" value="Từ ngày" required></td>
                            <td>---</td>
                            <td><input type="date" id="date4" value="Đến ngày" required></td>
                            <td><input class="submit" type="button" value="Tìm kiếm" onclick="showNgayMuon()"></td>
                        </tr>
                    </form>
                    <!-- kết quả tìm kiếm -->                    
                    <div id="ngay_muon"></div>
                </div>

            <!-- Nội dung Thống kê theo số lượng mượn-->
                <div id="menu4" class="tab-pane fade">
                <!-- tìm kiếm theo ngày-->
                    <form name="search4">
                        <tr>
                            <td><input type="date" id="date5" value="Từ ngày" required></td>
                            <td>---</td>
                            <td><input type="date" id="date6" value="Đến ngày" required></td>
                            <td><input class="submit" type="button" value="Tìm kiếm" onclick="showSoLuongMuon()"></td>
                        </tr>
                    </form>
                    <!-- kết quả tìm kiếm -->                    
                    <div id="soluong_muon"></div>
                </div>
            </div>  
        </article>
    </section>

       
</body>
</html>
