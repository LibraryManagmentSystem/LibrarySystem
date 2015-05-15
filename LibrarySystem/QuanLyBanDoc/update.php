<!DOCTYPE HTML>
<?php
session_start();
include '../Databases/db_connect.php';
$db = new DB_CONNECT();
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Library Management System</title>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/style.css">
        <link rel="stylesheet" href='http://localhost/LibrarySystem/Style/myStyle.css'>

        <link rel="stylesheet" href="http://localhost/LibrarySystem/font-awesome-4.3.0/css/font-awesome.min.css">
    </head>
    <body >
    <?php
  
             if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        ?>
        <?php
        
            if($_SESSION['user']) {
 
            } else {      
                header("location:http://localhost/LibrarySystem/login.php");
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
                    <li id="menu-item-821" class="menu-item menu-item-type-custom menu-item-object-custom   menu-item-home menu-item-821">
                        <a href="http://localhost/LibrarySystem/index.php">
                            <i class="fa fa-home" style="font-size: 1.3em;">
                            </i> Trang chủ
                        </a>
                    </li>

                    <!--Item Quản lý bạn đọc-->
                    <li id="menu-item-1112" class="menu-item menu-item-type-taxonomy current_page_item  menu-item-object-category menu-item-has-children menu-item-1112">
                        <a href="http://localhost/LibrarySystem/QuanLyBanDoc/index.php">
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
        <div class="content-wrap">
            <div class="content">

                <article class="excerpt">
                    <header>
                        <a class="label label-important" href="#">Hot
                            <i class="label-arrow"> 
                            </i>
                        </a>
                        <h2>
                            <a target="_blank" href="#" >Sửa thông tin độc giả
                            </a>
                        </h2>
                    </header>
                    <div>
                            <?php 
                            $id = $_GET['id'];
                            $sql = "Select *From doc_gia
                                    where ma_doc_gia = $id";
                            $result = mysql_query($sql);
                            $row = mysql_fetch_array($result);
                            ?>
                            <form method="POST">
                            
                            <br/>
                            Họ tên<br />
                            <input type="text" name="ho_ten" value="<?php echo $row['ho_ten']; ?>" required/><br />
                            Số điện thoại<br />
                            <input type="text" name="so_dien_thoai" value="<?php echo $row['so_dien_thoai']; ?>"/><br />
                            Địa chỉ<br />
                            <input type="text" name="dia_chi" value="<?php echo $row['dia_chi']; ?>"/><br/>
                            Email<br />
                            <input type="text" name="email" value="<?php echo $row['email']; ?>"/><br />
                            <input type="submit" class="btn btn-primary " name="sua" value="Cập nhật"/>
                            </form>
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
                            <a target="_blank" href="#" >Thành viên tích cực.
                            </a>
                        </h2>
                    </header>

                    <div>
                        <?php
                            
                            echo "<form method = 'POST'>";
                            $result = mysql_query("Select dg.ho_ten as ho_ten, count(*) as so_luong_muon  
                            from muon_tra mt 
                            Inner join doc_gia dg  on dg.ma_doc_gia=mt.ma_doc_gia
                            group by mt.ma_doc_gia
                            Order by so_luong_muon desc
                            Limit 10;");
                            if(mysql_num_rows($result)>0){
                                echo '<table style ="width:100%">';
                                echo "<tr>";
                                    echo "<th>STT</th>";
                                    echo "<th>Họ tên</th>";
                                    echo "<th>Số lượng</th>";
                                echo "</tr>";
                                $i=1;
                                while($row = mysql_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>".$i."</td>";
                                    echo "<td>".$row['ho_ten']."</td>";
                                    echo "<td>".$row['so_luong_muon']."</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                                echo '</table>';
                            }
                            echo "</form>";
                        ?>
                    </div>
                </article>
            </div>
        </aside>
</body>
</html>
<?php
if(isset($_POST['them'])){
        $ma_doc_gia=$_POST['ma_doc_gia'];
        $ten = $_POST['ho_ten'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $dia_chi = $_POST['dia_chi'];
        $email = $_POST['email'];
        //echo $ma_doc_gia;
        $sql = "insert into doc_gia(ma_doc_gia,ho_ten,so_dien_thoai,dia_chi,email,ngay_them)values($ma_doc_gia,'$ten','$so_dien_thoai','$dia_chi','$email',curdate())";
        $query=mysql_query($sql);
        header("Location: index.php");       
}
?>

<?php
if(isset($_POST['sua'])){
        $ma_thu_thu = $_SESSION['user_id'];
        $ten = $_POST['ho_ten'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $dia_chi = $_POST['dia_chi'];
        $email = $_POST['email'];
      
        $sql = "update doc_gia set ho_ten='$ten',so_dien_thoai='$so_dien_thoai', dia_chi='$dia_chi',email='$email',ma_nguoi_sua='$ma_thu_thu',ngay_sua=curdate() where ma_doc_gia=$id";
        $query=mysql_query($sql)or die(mysql_error());
        if($query){
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
        }
}
?>