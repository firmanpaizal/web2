<!DOCTYPE html>
<html>
<head><title>Read Database</title></head>

<body bgcolor="teal">

<center>

<h1><img src="img/bn.png"></h1>
	
	<table cellpadding="9" cellspacing="5" border="1" bgcolor="greenyellow" width="1000">
	<tr bgcolor="darkslategray">
	<th>No</th>
	<th>Kode Member</th>
	<th>Nama Band</th>
	<th>Genre Music</th>
	<th>Band Idola</th>
	<th>Opsi</th></tr>
		
<?php

include('koneksi.php');
$query = mysql_query("SELECT * FROM member ORDER BY kd_band DESC") or die(mysql_error());
		
if(mysql_num_rows($query) == 0){echo '<tr><td colspan="6"><center>Data Kosong!!!</center></td></tr>';}

else {$no = 1;	
while($data = mysql_fetch_assoc($query)){	
				
	
	echo '<tr align=center>';
	echo '<td>'.$no.'</td>';	
	echo '<td>'.$data['kd_band'].'</td>';	
	echo '<td>'.$data['nama_band'].'</td>';	
	echo '<td>'.$data['genre'].'</td>';	
	echo '<td>'.$data['idola'].'</td>';	
	echo '<td>

<a href="update.php?id='.$data['id'].'"><font color="green">Edit</font></a> / 
<a href="delete.php?id='.$data['id'].'" onclick="return confirm(\'Are you sure ?\')">

					<font color="red">Delete</a></font></td>';	
	echo '</tr>';
	
				
	$no++;	
				
}
			
}
?>
</table>

</center>
</body>
</html>