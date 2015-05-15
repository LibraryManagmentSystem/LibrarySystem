<?php
session_start();
include '../Databases/db_connect.php';
$db = new DB_CONNECT();
?>
<?php
// Array with names
// có thể thay thế mảng a=mysql_fetch_array($result);
$a = array();
$i=0;
    $query = mysql_query("select ma_doc_gia from doc_gia")or die(mysql_error());
    while($rows = mysql_fetch_array($query)){
        
        $a[$i]=$rows['ma_doc_gia'];
        $i++;
    }
// get the q parameter from URL

$q =$_REQUEST['q'];
$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
        foreach($a as $name) {
            if($q==$name){
                   $hint ="Đã tồn tại.";
             }
        }
    }

}

// Output "no suggestion" if no hint was found or output correct values 
//echo $hint === "" ? "no suggestion" : $hint;
echo $hint === "" ? "Có thể sử dụng." : $hint;
?>