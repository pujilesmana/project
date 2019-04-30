<!DOCTYPE html>
<html>
<head>
	<title>Pendataan</title>
</head>
<body>
	<form action="<?php echo base_url()?>Login/daftar" method="post">
		<div>
			<h1>Register</h1>
		</div>
		<div >
			<label>Nama Lengkap</label>
			<input type="text" name="nama" required>
		</div>
		<div style="margin-top: 10px">
			<label>username</label>
			<input type="text" name="username" required>
		</div>
		<div style="margin-top: 10px">
			<label>password</label>
			<input type="password" name="password" required>
		</div>
		<div style="margin-top: 10px">
			<label>Level</label>
			<select name="level" required>
				<option value="">Pilih</option>
				<option value="1">Admin</option>
				<option value="2">Pegawai</option>
			</select>
		</div>
		<div style="margin-top: 10px">
			<button type="submit">Register</button>
		</div>	
	</form>
</body>
</html>