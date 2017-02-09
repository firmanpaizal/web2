
<body bgcolor="darkslategray">

<?php

if(isset($_GET['id'])){
	
include('koneksi.php');

	
$id = $_GET['id'];	
$cek = mysql_query("SELECT id FROM member WHERE id='$id'") or die(mysql_error());
	

if(mysql_num_rows($cek) == 0){
		
	echo '<script>window.history.back()</script>';
	
}else{
		
$del = mysql_query("DELETE FROM member WHERE id='$id'");
		
		
if($del){
			
	echo '<center><img src="img/d.png" width="350" height="350"></center>';
	echo '<center><a href="read.php"><img src="img/b.png" width="70" height="50"></a></center>';	
			
}else{
			
	echo 'Delete Failed';		
	echo '<a href="read.php"><img src="img/b.png" width="70" height="50"></a>';	
		
	}
		
	}
	
}else{
	
	echo '<script>window.history.back()</script>';
	
}
?>