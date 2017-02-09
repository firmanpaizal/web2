<!DOCTYPE html>
<html>
<head><title>Update Database</title></head>

<body bgcolor="teal">
<center>
	
<h1><img src="img/e.png"></h1>
	
	<?php
		
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	$show = mysql_query("SELECT * FROM member WHERE id='$id'");
	
	
	if(mysql_num_rows($show) == 0)

	{ echo '<script>window.history.back()</script>'; }

	
	else{ $data = mysql_fetch_array($show);	}

	?>
	
	<form action="update-proses.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">	

	<table cellpadding="3" cellspacing="0">
			
	<tr>
	<td>Kode Band</td>
	<td>:</td>
	<td><input type="text" name="kd_band" value="<?php echo $data['kd_band']; ?>" required></td>	
	</tr>
			
	<tr>
	<td>Nama Band</td>
	<td>:</td>
	<td><input type="text" name="nama_band" size="30" value="<?php echo $data['nama_band']; ?>" required></td> 
	</tr>
	
	<tr>
	<td>Genre Music</td>
	<td>:</td>
	<td><select name="genre" required>

	<option value="">Select Genre</option>
	<option value="Metalcore" <?php if($data['genre'] == 'Metalcore'){ echo 'selected'; } ?>>Metalcore</option>	
	<option value="Hardcore" <?php if($data['genre'] == 'Hardcore'){ echo 'selected'; } ?>>Hardcore</option>	
	<option value="Kroncong" <?php if($data['genre'] == 'Kroncong'){ echo 'selected'; } ?>>Kroncong</option>	
	</select></td>
	</tr>

	<tr>
	<td>Band Idola</td>
	<td>:</td>
	<td><input type="text" name="idola" size="30" value="<?php echo $data['idola']; ?>" required></td> 
	</tr>
			
	<tr>
	<td>&nbsp;</td>
	<td></td>
	<td><input type="submit" name="simpan" value="Save"></td>
	</tr>
		
</table>
</form>
</center>
</body>
</html>