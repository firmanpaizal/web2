<!DOCTYPE html>
<html>
<head><title>Create Database</title></head>


<body bgcolor="teal">
<center>
	
<h1><img src="img/cr.png"></h1>
	
<form action="create-proses.php" method="post">

<table cellpadding="3" cellspacing="0">

<tr>
   <td>Kode Band</td>
   <td>:</td>
   <td><input type="text" name="kd_band" required></td>
</tr>
			
<tr>
   <td>Nama Band</td>
   <td>:</td>
   <td><input type="text" name="nama_band" size="30" required></td>
</tr>
			
<tr>
   <td>Genre Music</td>
   <td>:</td>
   <td>
	<select name="genre" required>
	<option value="">Select Genre</option>
	<option value="Metalcore">Metalcore</option>
	<option value="Hardcore">Hardcore</option>
	<option value="Kroncong">Kroncong</option>
	</select>
   </td>
</tr>
			
<tr>
   <td>Band Idola</td>
   <td>:</td>
   <td><input type="text" name="idola" size="30" required></td>
</tr>
			
<tr>
   <td>&nbsp;</td>
   <td></td>
   <td><input type="submit" name="tambah" value="Create"></td>
</tr>
		
</table>
</form>
</center>
</body>
</html>