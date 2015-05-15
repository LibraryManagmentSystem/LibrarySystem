 <?php
    require_once '../Databases/db_connect.php';
    $db1 = new DB_CONNECT();
    $sql1="select nxb.ma_nha_xuat_ban as ma_nxb, nxb.ten as ten_nxb, count(ds.ma_dau_sach) as sl_dausach, count(s.ma_sach) as tong_sach
    from nha_xuat_ban nxb
    inner join xuat_ban xb on nxb.ma_nha_xuat_ban =xb.ma_nha_xuat_ban
    left join dau_sach ds on xb.ma_dau_sach=ds.ma_dau_sach
    left join sach s on s.ma_dau_sach=ds.ma_dau_sach
    group by nxb.ma_nha_xuat_ban";
   

    $result1=mysql_query($sql1) or die(mysql_error());

    echo "
                     <h3>Thư viện Trường Đại học Công Nghệ - Đại học Quốc Gia Hà Nội</h3>
                    <h4>Thống kê theo nhà xuất bản</h4>
                    <table>
                    <tr>
                        <td> Mã Nhà Xuất Bản</td>
                        <td> Nhà Xuất Bản</td>
                        <td>Số lượng đầu sách</td>
                        <td>Số lượng sách</td>
                    </tr>";

while($rows1=mysql_fetch_array($result1)){
    echo "
                    <tr>
                        <td>".$rows1['ma_nxb']."</td>
                        <td>".$rows1['ten_nxb']."</td>  
                        <td>".$rows1['sl_dausach']."</td>
                        <td>".$rows1['tong_sach']."</td>                
                    </tr>";
}
echo"
                    </table>";
?>