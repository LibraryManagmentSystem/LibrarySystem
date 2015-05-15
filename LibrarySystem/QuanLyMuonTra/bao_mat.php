<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Management System</title>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/myStyle.css">
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/style.css">
        <script src="http://localhost/LibrarySystem/Script/google_jquery.min.js"></script>
        <script src="http://localhost/LibrarySystem/Script/bootstrap.min.js"></script>
        <script src="http://localhost/LibrarySystem/Script/Ajax.js"></script>
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
                    <li id="menu-item-821" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-821">
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
                    <li id="menu-item-1116" class="menu-item menu-item-type-taxonomy   menu-item-object-category menu-item-has-children menu-item-1116">
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
                    <li id="menu-item-1113" class="menu-item menu-item-type-taxonomy current_page_item menu-item-object-category menu-item-has-children menu-item-1113">
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
        
        <!--Tab bên phải-->
        <div class="content-wrap">
            <div class="content">

                <article class="excerpt">
                    <form method="POST">
                    <header>
                        <a class="label label-important" href="#">Hot
                            <i class="label-arrow"> 
                            </i>
                        </a>
                        <h2>
                            <a target="_blank" href="#" >Đền bù mất sách</a>
                            <a style="float:right" href="show.php"><input name="back" value="Quay lại" type="button" class="button"></a>
                    </header>

                    <div id="menu1">
                            <?php
                            include '../Databases/db_connect.php';

                            $db = new DB_CONNECT();
                            $mahoivien=$_SESSION['mahoivien'];
                            $ten=mysql_query("select * from doc_gia where ma_doc_gia=$mahoivien");
                            $ro=mysql_fetch_array($ten);
                            echo "Độc giả: <b>".$ro['ho_ten']."</b><br>";
                            echo "<br>Danh sách Sách phải đền bù cho thư viện<br><br>";
                            $sql="select * from sach s inner join dau_sach ds on s.ma_dau_sach=ds.ma_dau_sach
                            where s.ma_nguoi_lam_mat=$mahoivien and s.ngay_xoa=curdate()";
                            $result = mysql_query($sql) or die(mysql_error());
                            $i=1;
                            $count=0;
                            echo "<table width='500'>";
                            echo "<tr><td>STT</td>
                            <td width='200'>Tên sách</td>
                            <td> Mã sách</td>
                            <td>Giá tiền</td>
                            <td>Tiền phạt</td>
                            ";
                            while($row=mysql_fetch_array($result)){
                                ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['ten_dau_sach']; ?></td>
                                <td><?php echo $row['ma_sach']; ?></td>
                                <td><?php echo $row['gia']; ?></td>
                                <td><?php echo $row['gia']*3; ?></td>
                            </tr>
                                <?php
                                $i++;
                                $count=$count+$row['gia']*3;
                            }
                            echo "<tr><td colspan='5'><b style='float:right'>Tổng:".$count."</b></td></tr>";
                            echo "</table>";
                            ?>
                        
                    </div>
                    <input class="submit" type="button" value="In ấn" onclick="PrintElem_phat('#menu1')" />
                    </form>
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
                            <a target="_blank" href="#" >Danh sách mượn quá hạn
                            </a>
                        </h2>
                    </header>

                    <div>
                        <table width="100%">
                            <tr>
                                <th>Độc giả</th>
                                <th>Ngày quá hạn</th>
                            </tr>
                            <?php
                            $sql="SELECT dg.ho_ten,mt.ngay_muon,ds.thoi_han_muon, (datediff(curdate(),mt.ngay_muon)-ds.thoi_han_muon) as thoigian
                             from doc_gia dg inner join muon_tra mt on mt.ma_doc_gia=dg.ma_doc_gia inner join sach s on s.ma_sach=mt.ma_sach inner join dau_sach ds on ds.ma_dau_sach=s.ma_dau_sach
                                where ngay_tra is null
                                group by mt.ma_sach
                                order by  thoigian desc
                            ";
                            $result=mysql_query($sql) or die(mysql_error());
                        ?>
                        
                        <?php
                            if ($result){
                                $i=0;
                                while ($row=mysql_fetch_array($result)) {
                                if ($row['thoigian']>0){
                                    $i++;
                            ?>
                            <tr>
                                <td><?php echo $row['ho_ten']; ?></td>
                                <td><p style="color:red"><?php echo $row['thoigian']; ?></p></td>
                            </tr>
                            <?php
                                }}
                                if ($i==0){
                                    echo "<tr><td colspan='2'>Trống</td></tr>";
                                }
                            }
                            ?>
                        </table>
                        
                    </div>

                </article>
            </div>
        </aside>

</body>
</html>

