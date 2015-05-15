<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Management System</title>
        <link rel="stylesheet" href="../Style/style.css">
        <link rel="stylesheet" href="../Style/myStyle.css">
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
                            <a target="_blank" href="#" >Quản lý mượn trả</a>
                    </header>

                    <div>
                        Nhập mã hội viên<br>
                        <input type="number" name="mahoivien">
                        <input type="submit" name="check" value="Kiểm tra" class="check">
                    </div>
                    <div>
                        
                            <?php
                            include '../Databases/db_connect.php';

                            $db = new DB_CONNECT();
                            if(isset($_POST['check'])){
                            $ma=$_POST['mahoivien'];
                            $_SESSION['mahoivien']=$ma;
                            echo "<meta http-equiv=\"refresh\" content=\"0;URL=show.php\">";
                            }
                            ?>
                        </table>
                    </div>
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
                            $sql="SELECT dg.ho_ten,mt.ngay_muon,ds.thoi_han_muon, (datediff(curdate(),mt.ngay_muon)-ds.thoi_han_muon) as thoigian from doc_gia dg inner join muon_tra mt on mt.ma_doc_gia=dg.ma_doc_gia inner join sach s on s.ma_sach=mt.ma_sach inner join dau_sach ds on ds.ma_dau_sach=s.ma_dau_sach
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

