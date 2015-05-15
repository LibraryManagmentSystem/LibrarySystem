<?php
    require_once '../Databases/db_connect.php';
    $db2 = new DB_CONNECT();
    $sql="select tg.ma_tac_gia as ma_tac_gia,tg.ho_ten as ho_ten, count(*) as soluong_dausach from tac_gia tg
    inner join tac_gia_viet_dau_sach tgv on tg.ma_tac_gia =tgv.ma_tac_gia
    inner join dau_sach ds on tgv.ma_dau_sach=ds.ma_dau_sach
    group by tg.ma_tac_gia;";
    
   

    $result=mysql_query($sql) or die(mysql_error());
    echo"
                    <h3>Thư viện Trường Đại học Công Nghệ - Đại học Quốc Gia Hà Nội</h3>
                    <h4>Thống kê theo tác giả</h4>
                    <table>
                    <tr>
                        <td> Mã Tác Giả</td>
                        <td>Tác Giả</td>
                        <td>Số lượng đầu sách</td>
                    </tr>";                
    while($rows=mysql_fetch_array($result)){
    echo "<tr>
                        <td>".$rows['ma_tac_gia']."</td>  
                        <td>".$rows['ho_ten']."</td>
                        <td>".$rows['soluong_dausach'],"</td>                
                    </tr>";
    }
    echo "              </table>";
?>