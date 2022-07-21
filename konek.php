<?php 
	extract($_REQUEST);
	$file=fopen("datapendaftar.txt","a");

	fwrite($file,"Nama			:");
	fwrite($file, $nama_lengkap ."\n");
	fwrite($file,"Alamat 		:");
	fwrite($file, $alamat ."\n");
	fwrite($file,"Tempat Lahir	:");
	fwrite($file, $tempat_lahir ."\n");
	fwrite($file,"Tanggal Lahir :");
	fwrite($file, $tanggal_lahir ."\n");
	fwrite($file,"Jenis Kelamin	:");
	fwrite($file, $jk ."\n");
	fwrite($file,"No Telepon	:");
	fwrite($file, $no_telepon ."\n");
	fwrite($file,"Email			:");
	fwrite($file, $email ."\n");
	fclose($file);
	header("location: index.php");
?>