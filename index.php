<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form pendaftaran</title>
	<style media="screen">
	body{
	background: linear-gradient(to right, #808080,#FFE4E1,#808080);
	}
	.wrap{
	width: 40%;
	margin: auto;
	border-radius: 10px;
	font-family: comic sans ms;
	background-color: #FF7F50;
	}
	.container{
	padding: 5px;
	margin: 10%;
	}
	h1{
	text-align: center;
	}
	table{
	margin: auto;
	padding-bottom: 5px;
	}
	table td{
	padding: 5px;
	}
	button{
	width: 50px;
	font-family: comic sans ms;
	height: 30px;
	background-color: #00ffff;
	border-radius: 7px;
	}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="container">
		<form action="konek.php">
	<h1>Form Pendaftaran</h1>
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><input type="number" name="no_telepon"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" name="kirim">Kirim</button>
					<button type="reset" name="reset">Reset</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
</body>
</html>