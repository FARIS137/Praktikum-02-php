<!DOCTYPE html>
<html lang="en">
<body>
    <form method="GET" action="form_nilai.php">
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
  
    $nama_siswa = $_GET['name'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['Nilai_uts'];
    $nilai_uas = $_GET['Nilai_uas'];
    $nilai_tugas = $_GET['Nilai_tugas'];

       
        echo '<br/>nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/> Nilai UTS : '.$nilai_uts;
        echo '<br/> Nilai UAS : '.$nilai_uas;
        echo '<br/> Nilai Tugas Praktikum : '.$nilai_tugas;
?>
  </form>
</body>
</html>