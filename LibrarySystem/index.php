<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Library Management System</title>
        <link rel="stylesheet" href='http://localhost/LibrarySystem/Style/style.css'>
        <link rel="stylesheet" href='http://localhost/LibrarySystem/Style/myStyle.css'>
        <script type='text/javascript' src='http://localhost/LibrarySystem/Script/jquery.min.js'></script>
        <script type='text/javascript' src='http://localhost/LibrarySystem/Script/jquery.js'></script>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/font-awesome-4.3.0/css/font-awesome.min.css">
        
    </head>
    <body >
        <?php
  
             session_start();
        ?>
        <?php
        
            if($_SESSION['user']) {
 
            } else {      
                header("location:login.php");
            }

        ?>
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
                    <li id="menu-item-821" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-821">
                        <a href="http://localhost/LibrarySystem/index.php">
                            <i class="fa fa-home" style="font-size: 1.3em;">
                            </i> Trang chủ
                        </a>
                    </li>

                    <!--Item Quản lý bạn đọc-->
                    <li id="menu-item-1112" class="menu-item menu-item-type-taxonomy  menu-item-object-category menu-item-has-children menu-item-1112">
                        <a href="http://localhost/LibrarySystem/QuanLyBanDoc/index.php">
                            <i class="fa fa-group" > 
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
                    <li id="menu-item-1803" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1803">
                        <a href="http://localhost/LibrarySystem/ThongKe/index.php"><i class="fa fa-cog">

                            </i> Thống kê
                        </a>
                        <ul class="sub-menu">
                            <li = class="menu-item menu-item-type-post_type menu-item-object-page ">
                                <a href="#">In thẻ thư viện
                                </a>
                            </li>
                            <li = class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Tác giả
                                </a>
                            </li>
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Ngày mượn
                                </a>
                            </li>
                            <li i= class="menu-item menu-item-type-custom menu-item-object-custom ">
                                <a href="#">Nhà xuất bản
                                </a>
                            </li>
                            <li  class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="#">Lượng sách mượn
                                </a>
                            </li>
                        </ul>
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




        <div >
            <form  >

                <input class="btn" type="text" name="s" onblur="if (this.value == '')
                            this.value = 'Tìm kiếm...';" onfocus="if (this.value == 'Tìm kiếm...')
                                        this.value = '';" value="Tìm kiếm..."/>

                <select class="btn">
                    <option>Tất cả</option>
                    <option>Bạn đọc</option>
                    <option>Mã đầu sách</option>
                </select>
                <input type="submit"  value="Tìm kiếm"class="btn"/>
                <div style="float:right">
                    <?php
                        echo "<font size='4'>" ;
                        echo "<a href='http://localhost/LibrarySystem/ThuThu/profile.php'>";
                        echo $_SESSION['ho_ten'];
                        echo "</a>";
                        echo "&nbsp;&nbsp;";
                        echo "<a href='http://localhost/LibrarySystem/logout.php'><i class='fa fa-sign-out'></i></a>";
                        echo "</font>";
                    ?>
                     
                </div>
            </form>
        </div>
        <!--Tab bên phải-->
        <div class="content-wrap">
            <div class="content">

                <article class="excerpt">
                    <header>
                        <a class="label label-important" href="#">New
                            <i class="label-arrow"> 
                            </i>
                        </a>
                        <h2>
                            <a target="_blank" href="#" >Danh sách mượn mới nhất
                            </a>
                        </h2>
                    </header>


                    <div>

                        <?php
                        include '/Databases/db_connect.php';


                        $db = new DB_CONNECT();


                        $result = mysql_query("Select dg.ho_ten, ds.ten_dau_sach,s.ma_sach, mt.ngay_muon  
                            from muon_tra mt inner join doc_gia dg on mt.ma_doc_gia=dg.ma_doc_gia
                            Inner join sach s on mt.ma_sach=s.ma_sach 
                            Inner join dau_sach ds on s.ma_dau_sach=ds.ma_dau_sach
                            Order by mt.ngay_muon desc
                            Limit 10;
                            ") or die(mysql_error());

                        if (mysql_num_rows($result) > 0) {

                            echo '<table style="width:100%" >';
                            echo '<tr>';
                            echo '<th>';
                            echo 'Họ tên';
                            echo '</th>';
                            echo '<th>';
                            echo 'Tên đầu sách';
                            echo '</th>';
                            echo '<th>';
                            echo 'Mã sách';
                            echo '</th>';
                            echo '<th>';
                            echo 'Ngày mượn';
                            echo '</th>';
                            echo '</tr>';
                            while ($row = mysql_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>';
                                echo $row['ho_ten'];
                                echo '</td>';
                                echo '<td>';
                                echo $row['ten_dau_sach'];
                                echo '</td>';
                                echo '<td>';
                                echo $row['ma_sach'];
                                echo '</td>';
                                echo '<td>';
                                echo $row['ngay_muon'];
                                echo '</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        } else {
                            
                        }
                        ?>

                    </div>

                </article>

            </div>
        </div>

        <!--Tab bên trái-->
        <aside class="sidebar">	
            <div class="widget widget_text">

                <article class="excerpt">
                    <header>
                        <a class="label label-important" href="#">Hot
                            <i class="label-arrow"> 
                            </i>
                        </a>
                        <h2>
                            <a target="_blank" href="#" >Sách mượn nhiều nhất
                            </a>
                        </h2>
                    </header>

                    <div>
                        <?php
                        $result = @mysql_query("Select ds.ten_dau_sach, count(*) as so_luong_muon  
                                           from muon_tra mt 
                                           Inner join sach s on mt.ma_sach=s.ma_sach 
                                           Inner join dau_sach ds on s.ma_dau_sach=ds.ma_dau_sach
                                           group by s.ma_dau_sach
                                           Order by so_luong_muon desc
                                           Limit 10;
                                        ") or die(mysql_error());

                        if (mysql_num_rows($result) > 0) {

                            echo '<table style="width:100%" >';
                            echo '<tr>';
                            echo '<th>';
                            echo 'Tên đầu sách';
                            echo '</th>';
                            echo '<th>';
                            echo 'Số lượng';
                            echo '</th>';

                            echo '</tr>';
                            while ($row = mysql_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>';
                                echo $row['ten_dau_sach'];
                                echo '</td>';
                                echo '<td>';
                                echo $row['so_luong_muon'];
                                echo '</td>';

                                echo '</tr>';
                            }
                            echo '</table>';
                        } else {
                            
                        }
                        ?>

                    </div>

                </article>
            </div>
        </aside>
    </section>

</body>
</html>