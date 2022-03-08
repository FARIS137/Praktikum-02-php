<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form method="POST" action="nilai_siswa.php" >
	<table style="width: 80%; border: 1px solid black;">
    <h3 style=" ">Form Nilai Siswa</h3>
	<tr>
		<td><label>Nama</label></td>
		<td>: <input  type="text" name="name" value="" size="30"></td>
	</tr>
	<tr>
		<td><label>Mata kuliah</label></td>
    	<td>:
		<select name="matkul">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
		</select></label>	
		</td>	
	</tr>

	<tr>
		<td><label>Nilai UTS</label></td>
		<td>: <input type="text" name="Nilai_uts" value="" size="6"/></td>
	</tr>
	<tr>
		<td><label>Nilai UAS</label></td>
		<td>: <input type="text" name="Nilai_uas" value="" size="6"/></td>
	</tr>
	<tr>
		<td><label>Nilai Tugas Praktikum</label></td>
		<td>: <input type="text" name="Nilai_tugas" value="" size="6"/></td>
	</tr>
	<tr>
		<td><input style="margin-top:10px;" type="submit" value="simpan" name="proses" /></td>
	</tr>
</table>
  
	<?php

	 
	 $nama_siswa = $_POST['name'];
	 echo '<br/>Nama : '.$nama_siswa;
	 $mata_kuliah = $_POST['matkul'];
	 echo '<br/>Mata Kuliah : '.$mata_kuliah;
	//  $nilai_uts = $_POST['Nilai_uts'];
	// echo '<br/>Nilai UTS : '.$nilai_uts;
	// if($nilai_uts >= 85 and $nilai_uts <= 100) {
	// 	echo ' Grade (A)';
	// } elseif($nilai_uts >= 70 and $nilai_uts <= 84 ) {
	// 	echo ' Grade (B)';
	// } elseif($nilai_uts >= 56 and $nilai_uts <= 69 ) {
	// 	echo ' Grade (C)';
	// } elseif($nilai_uts >= 36 and $nilai_uts <= 55 ) {
	// 	echo ' Grade (D)';
	// } elseif($nilai_uts >= 0 and $nilai_uts <= 35 ) {
	// 	echo ' Grade (E)';
	// } else {
	// 	echo ' Grade (I)';
	// }
	//  $nilai_uas = $_POST['Nilai_uas'];
	//  echo '<br/>Nilai UAS : '.$nilai_uas;
	//  if($nilai_uas >= 85 and $nilai_uas <= 100) {
	// 	echo ' Grade (A)';
	// } elseif($nilai_uas >= 70 and $nilai_uas <= 84 ) {
	// 	echo ' Grade (B)';
	// } elseif($nilai_uas >= 56 and $nilai_uas <= 69 ) {
	// 	echo ' Grade (C)';
	// } elseif($nilai_uas >= 36 and $nilai_uas <= 55 ) {
	// 	echo ' Grade (D)';
	// } elseif($nilai_uas >= 0 and $nilai_uas <= 35 ) {
	// 	echo ' Grade (E)';
	// } else {
	// 	echo ' Grade (I)';
	// }
	//  $nilai_tugas = $_POST['Nilai_tugas'];
	//  echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
	//  if($nilai_tugas >= 85 and $nilai_tugas <= 100) {
	// 	echo ' Grade (A)';
	// } elseif($nilai_tugas >= 70 and $nilai_tugas <= 84 ) {
	// 	echo ' Grade (B)';
	// } elseif($nilai_tugas >= 56 and $nilai_tugas <= 69 ) {
	// 	echo ' Grade (C)';
	// } elseif($nilai_tugas >= 36 and $nilai_tugas <= 55 ) {
	// 	echo ' Grade (D)';
	// } elseif($nilai_tugas >= 0 and $nilai_tugas <= 35 ) {
	// 	echo ' Grade (E)';
	// } else {
	// 	echo ' Grade (I)';
	// }

	$nilai_uts = $_POST['Nilai_uts'];
	echo '<br/>Nilai UTS : '.$nilai_uts;
	switch($nilai_uts){
		case $nilai_uts >= 85 and $nilai_uts <= 100;
			echo " Sangat Memuaskan";
			break;
			case $nilai_uts >= 70 and $nilai_uts <= 84;
			echo " = Memuaskan";
			break;
			case $nilai_uts >= 56 and $nilai_uts <= 69;
			echo " = Cukup";
			break;
			case $nilai_uts >= 36 and $nilai_uts <= 55;
			echo " = Kurang";
			break;
			case $nilai_uts >= 0 and $nilai_uts <= 35;
			echo " = Sangat Kurang";
			break;
	}

	$nilai_uas = $_POST['Nilai_uas'];
	echo '<br/>Nilai UAS : '.$nilai_uas;
	switch($nilai_uas){
		case $nilai_uas >= 85 and $nilai_uas <= 100;
			echo " = Sangat Memuaskan";
			break;
			case $nilai_uas >= 70 and $nilai_uas <= 84;
			echo " = Memuaskan";
			break;
			case $nilai_uas >= 56 and $nilai_uas <= 69;
			echo " = Cukup";
			break;
			case $nilai_uas >= 36 and $nilai_uas <= 55;
			echo " = Kurang";
			break;
			case $nilai_uas >= 0 and $nilai_uas <= 35;
			echo " = Sangat Kurang";
			break;
	}

	$nilai_tugas = $_POST['Nilai_tugas'];
	 echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
	switch($nilai_tugas){
			case $nilai_tugas >= 85 and $nilai_tugas <= 100;
			echo " = Sangat Memuaskan";
			break;
			case $nilai_tugas >= 70 and $nilai_tugas <= 84;
			echo " = Memuaskan";
			break;
			case $nilai_tugas >= 56 and $nilai_tugas <= 69;
			echo " = Cukup";
			break;
			case $nilai_tugas >= 36 and $nilai_tugas <= 55;
			echo " = Kurang";
			break;
			case $nilai_tugas >= 0 and $nilai_tugas <= 35;
			echo " = Sangat Kurang";
			break;
	}
	

	
	?>
	</form>
</body>
</html>