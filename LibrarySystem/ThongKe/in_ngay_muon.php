<!DOCTYPE HTML>
<?php
 session_start();
 include '../Databases/db_connect.php';
 $db2 = new DB_CONNECT();
 
?>
<html>
<meta charset="UTF-8">
   <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/myStyle.css">
        <link rel="stylesheet" href="http://localhost/LibrarySystem/Style/style.css">
        <script src="http://localhost/LibrarySystem/Script/google_jquery.min.js"></script>
        <script src="http://localhost/LibrarySystem/Script/bootstrap.min.js"></script>
        <script src="../Script/ajax.js"></script>
        <script type="text/javascript" src="http://localhost/LibrarySystem/Script/print.js"></script>
        <link rel="stylesheet" href="http://localhost/LibrarySystem/font-awesome-4.3.0/css/font-awesome.min.css">
<body>              
<?php
    $date1 = $_GET['date1'];
    $date2 = $_GET['date2'];
    $sql="call in_ngay_muon('$date1','$date2')";
    $result=mysql_query($sql) or die(mysql_error());

?>
<div id="menu3">
    <h3>Thư viện Trường Đại học Công Nghệ - Đại học Quốc Gia Hà Nội</h3>
    <h4><?php echo "Thống kê theo ngày mượn: <b>".$date1."<-->".$date2."</b>"; ?></h4>
    <table>
        <tr>
            <td>Ngày</td>
            <td>Số lượt mượn sách</td>
        </tr>
                
<?php
while($rows=mysql_fetch_array($result)){
?>
        <tr>
            <td><?php echo $rows['ngay_muon']; ?></td>
            <td><?php echo $rows['total']; ?></td>                
        </tr>
<?php
}
?>
</table>
<input class="submit" type="button" value="In ấn" onclick="PrintElem('#menu3')" />     
</div>      
   
</body>
</html>
