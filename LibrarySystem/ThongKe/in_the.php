<!DOCTYPE HTML>
<?php
 session_start();
 require_once '../Databases/db_connect.php';
 $db4 = new DB_CONNECT();
 
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

<?php
    $date1 = $_GET['date1'];
    $date2 = $_GET['date2'];
    $sql="call in_the_thuvien('$date1','$date2')";
    $result=mysql_query($sql) or die(mysql_error());

?>
<div id="memu0">
   <h3>Thư viện Trường Đại học Công Nghệ - Đại học Quốc Gia Hà Nội</h3>
    <h4><?php echo "Danh sách bạn đọc được cấp thẻ trong khoảng thời gian: <b>".$date1." đến ngày ".$date2."</b>"; ?></h4>
    <table>
    <tr>
        <td>Mã bạn đọc</td>
        <td>Họ tên</td>
        <td>Ngày cấp thẻ</td>
    </tr>
                
<?php
while($rows=mysql_fetch_array($result)){
?>
    <tr>
        <td><?php echo $rows['ma_doc_gia']; ?></td>
        <td><?php echo $rows['ho_ten']; ?></td>
        <td><?php echo $rows['ngay_them']; ?></td>                    
    </tr>
<?php
}
mysql_close();
?>
    </table>
    <input class="submit" type="button" value="In ấn" onclick="PrintElem('#menu0')" />  
</div>
       
</body>
</html>
