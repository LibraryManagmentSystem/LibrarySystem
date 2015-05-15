<?php 

 $username = $password = "";

     if(!isset($_POST['username']) || $_POST['username'] == NULL){
         
     }else{
           $username = $_POST['username'];
		  
     }
     if(!isset($_POST['password']) || $_POST['password'] == NULL){
           
     }else{
           $password = $_POST['password'];
     }
     if($username && $password){
        
        $connect = @mysql_connect("localhost","root","") or die("Disconnect database");
        mysql_set_charset("utf8");
        mysql_select_db("quan_li_thu_vien",$connect);
        $sql = "SELECT * FROM thu_thu 
                WHERE username='".$username."' and password='".$password."'";

        $query = mysql_query($sql);
        $total = mysql_num_rows($query);
        
        if($total != 0){
                session_start();
                $userInfo = mysql_fetch_assoc($query);
                $_SESSION['user_id'] = $userInfo['ma_thu_thu'];
				$_SESSION['user'] = $userInfo['username'];
                $_SESSION['ho_ten'] = $userInfo['ho_ten'];
                header("location:index.php");
        }else{
            echo "<p>Username or password không đúng !!!</p>";  
			
        }
    }

?>