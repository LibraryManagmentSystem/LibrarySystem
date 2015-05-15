<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Management System</title>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/style.css">
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/myStyle.css">
        <link rel="stylesheet" href="http://localhost/LibrarySystem/font-awesome-4.3.0/css/font-awesome.min.css">
		<style>
            input.xoaChon{
                margin-left: 0px;
                height: auto;
                background:#999;
                
            }
            input.suaChon{
                margin-left: 238px;
                height: auto;
                background:#999;
                
            }
            input.themChon{
                margin-left: 240px;
                height: auto;
                background:#999;
                
            }
        </style>
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
                    <li id="menu-item-1116" class="menu-item menu-item-type-taxonomy current_page_item menu-item-object-category menu-item-has-children menu-item-1116">
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
            <form method="POST" >

                <input class="btn" type="text" name="s" onblur="if (this.value == '')
                            this.value = 'Tìm kiếm...';" onfocus="if (this.value == 'Tìm kiếm...')
                                        this.value = '';" value="Tìm kiếm..."/>

                <select class="btn" name="choice">
                    <option value="2">Tất cả các sách</option>
					<option value="3">Mã sách</option>
                    <option value="4">Tên sách</option>
                </select>
                <input name="search" type="submit"  value="Tìm kiếm"class="btn"/>
            </form>
        </div>
        <!--Tab bên phải-->
        <div class="content-wrap">
            <div class="content">

                <article class="excerpt">
                    <header>
                        <a class="label label-important" href="#">Hot
                            <i class="label-arrow"> 
                            </i>
                        </a>
                        <h2>
                            <a target="_blank" href="#" >Danh sách các sách
                            </a>
                        </h2>
                    </header>

                    <div>
                        <!--Thực hiện các lệnh php cần thiết để in ra bảng-->
                          
                        <?php
                        include '../Databases/db_connect.php';


                        $db = new DB_CONNECT();
                        $id_sach = $_SESSION['ma_sach_search'];
                            $result = "select sach.ma_sach as ma_sach, sach.ngay_them as ngay_them,dau_sach.ten_dau_sach as ten_dau_sach from sach join dau_sach on
                                sach.ma_dau_sach = dau_sach.ma_dau_sach
                                where ma_sach = $id_sach";
                        if(isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $result = "select sach.ma_sach as ma_sach, sach.ngay_them as ngay_them,dau_sach.ten_dau_sach as ten_dau_sach from sach join dau_sach on
                                sach.ma_dau_sach = dau_sach.ma_dau_sach
                                where dau_sach.ma_dau_sach = '$id'";
                        }
                        
                       
                            
                            

                        
                            //search
                            if(isset($_POST['search'])){
                                if(isset($_POST['choice']) && isset($_POST['s'])){
                                    $selected = $_POST['choice'];
                                    $searchName = $_POST['s'];
                                    //$sql1 = "";
                                    if($selected == 2){
                                        
                                        $result = $result = "select sach.ma_sach as ma_sach, sach.ngay_them as ngay_them,dau_sach.ten_dau_sach as ten_dau_sach from sach join dau_sach on
                                        sach.ma_dau_sach = dau_sach.ma_dau_sach";
                                    }
									if($selected == 3){
                                        $result = "select sach.ma_sach as ma_sach, sach.ngay_them as ngay_them,dau_sach.ten_dau_sach as ten_dau_sach from sach join dau_sach on
                                        sach.ma_dau_sach = dau_sach.ma_dau_sach
                                        where ma_sach = $searchName";
                                    }
                                    if($selected == 4){
                                        $result = "select sach.ma_sach as ma_sach, sach.ngay_them as ngay_them,dau_sach.ten_dau_sach as ten_dau_sach from sach join dau_sach on
                                        sach.ma_dau_sach = dau_sach.ma_dau_sach
                                        where ten_dau_sach like '%$searchName%'";
                                    }
                                }
                            }
                            //in bang
                        $query = mysql_query($result) or die(mysql_error());
                        
						?>
                        <form method="POST" onsubmit="return checkForm(this);">
                            <input type="submit" class="btn btn-primary" name="xoa3" value="Xóa "  />
							<input type="submit" class="btn btn-primary" name="them" value="Thêm sách"/>
                            <br/>
                            <table style="width:100%">
                            <!--    <tr><input type="submit" class='xoaChon' name="xoa1" value="Xóa" /></td> -->
                                <tr>
                                    <td>Xóa</td>
                                   <td>STT</td>
                                    <th>Mã sách</th>
                                    <th>Tên sách</th>
									<th>Ngày thêm</th>
                                    
                                </tr>
                                <?php
                                $i=1;
                                while($row = mysql_fetch_array($query)){
                                //echo "<td><input type = 'checkbox' name = 'cb' value = 'cb' /></td>";
                                echo "<tr>";
                                ?>
                                   <td> <input type='checkbox' name='cb[]' value="<?php echo $row['ma_sach'];?>"/></td>
                                <?php
                                    echo"<td>".$i."</td>";
                                    echo "<td>".$row['ma_sach']."</td>";
                                    echo "<td>".$row['ten_dau_sach']."</td>";
                                    echo "<td>".$row['ngay_them']."</td>";
                                echo "</tr>";
                                    //echo "<td><input type ='radio' name='rd' value = 'rd'/></td>";
                                    $i++;
                                }
                                ?>
                            </table>
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
                        <!--Thực hiện các lệnh php cần thiết để in ra bảng-->
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

</body>
</html>
<?php
	if(isset($_POST['xoa3'])){
	   $id=implode(",",$_POST['cb']);
		$sql = "delete from sach where ma_sach in ($id)";
        $result = mysql_query($sql)or die(mysql_error());
		if ($result){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=sach.php\">"; 
		}
	}
	if(isset($_POST['them'])){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=themsach.php\">";
	}
?>