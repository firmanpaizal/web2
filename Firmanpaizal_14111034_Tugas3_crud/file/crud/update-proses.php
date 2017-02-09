<body bgcolor="darkslategray">
<?php

if(isset($_POST['simpan'])){
	
include('koneksi.php');
	
	
	$id	= $_POST['id'];	
	$kd	= $_POST['kd_band'];	
	$nama	= $_POST['nama_band'];	
	$genre	= $_POST['genre'];	
	$idola	= $_POST['idola'];
	
	
$update = mysql_query ("UPDATE member SET kd_band='$kd', nama_band='$nama', genre='$genre', 
		idola='$idola' WHERE id='$id'") or die(mysql_error());
	
	
if($update){
		
	echo '<center><img src="img/s.png" width="350" height="350"></center>';
	echo '<center><a href="read.php?id='.$id.'"><img src="img/b.png" width="70" height="50"></a></center>';	
		
}else{
		
	echo 'Update Failed ';		
	echo '<a href="update.php?id='.$id.'"><img src="img/b.png" width="70" height="50"></a>';	
		
     }

}else{	

	echo '<script>window.history.back()</script>';

}
?>