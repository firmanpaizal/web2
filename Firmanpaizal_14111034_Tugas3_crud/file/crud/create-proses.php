<body bgcolor="darkslategray">
<?php


if(isset($_POST['tambah'])){
	
include('koneksi.php');
	
	$kd	= $_POST['kd_band'];	
	$nama	= $_POST['nama_band'];	
	$genre	= $_POST['genre'];	
	$idola	= $_POST['idola'];	
	
	
$input = mysql_query("INSERT INTO member VALUES(NULL, '$kd', '$nama', '$genre', '$idola')") or die(mysql_error());
	
if($input){
		
	echo '<center><img src="img/c.png" width="350" height="350"></center>';		
	echo '<center><a href="create.php"><img src="img/b.png" width="70" height="50"></a></center>';	
		
	}else{
		
	echo 'Create Data Failed! ';		
	echo '<a href="create.php"><img src="img/b.png" width="70" height="50"></a>';	
		
	}

}else{	
	
	echo '<script>window.history.back()</script>';

}
?>