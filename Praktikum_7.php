<!DOCTYPE html>
<html lang="en">
<head>
<title>Biodata</title>
</head>
<body>

<div class=content>
<header>
<h1 class=judul>Biodata Anda</h1>
</header>

</hmtl>

<?php
if (isset($POST['input']));{
$nim=$_POST['nim'];
echo "Nim : <b>$nim</b>" . "<br>";

$nama=$_POST['nama'];
echo "Nama : <b>$nama</b>"."<br>" ;

$alamat=$_POST['alamat'];
echo "Alamat : <b>$alamat</b>" ."<br>";

$jenis_kelamin=$_POST['jenis_kelamin'];
echo "Jenis Kelamin :
<b><font color=blue>$jenis_kelamin</font></b>"."<br>";

$st = $_POST['status'];
echo "Status : <b>$st</b>"."<br>";

$hobby=$_POST['hobby'];
echo "Hobby : <b>$hobby</b>" ."<br>";

$tanggal = $_POST['tanggal'];
echo "Tanggal Lahir : <b>$tanggal</b><br><br>";

function hitung_umur($tanggal){
	$birthDate = new DateTime($tanggal);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	$m = $today->diff($birthDate)->m;
	$d = $today->diff($birthDate)->d;
	return $y." tahun ".$m." bulan ".$d." hari";
}
echo hitung_umur($tanggal) . "<br><br>";

$pekerjaan=$_POST ['pekerjaan'];
echo "Pekerjaan : <b>$pekerjaan</b>". "<br>";


$gaji_OP = 3000000;
$gaji_adm = 3500000;
$gaji_mgr = 10000000;
$gaji_ast_mgr = 7000000;
$pajak = 0.1;
$thp_OP = $gaji_OP - ($gaji_OP*$pajak);
$thp_adm = $gaji_adm - ($gaji_adm*$pajak);
$thp_mgr = $gaji_mgr - ($gaji_mgr*$pajak);
$thp_ast_mgr = $gaji_ast_mgr - ($gaji_ast_mgr*$pajak);

if ($pekerjaan == "Operator Produksi") {
    echo "Gaji sebelum pajak = Rp. $gaji_OP <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp_OP";
} elseif ($pekerjaan == "Administrasi") {
    echo "Gaji sebelum pajak = Rp. $gaji_adm <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp_adm";
} elseif ($pekerjaan == "Assistand Manager") {
    echo "Gaji sebelum pajak = Rp. $gaji_ast_mgr <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp_ast_mgr";
} elseif ($pekerjaan == "Manager") {
    echo "Gaji sebelum pajak = Rp. $gaji_mgr <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp_mgr";
} else {
 echo "Lainnya";
}


echo "<br>";
$file = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

move_uploaded_file($tmp_name, "images".$file);

?>
<table>
<tr>
<td>FOTO ANDA</td>
</tr>

<tr>
<td> <img src=images<?php echo $file ?> style=width:540px></td>

</tr>
</table>

<?php }?>
<a href= 'biodata.php'>Kembali</a>
</body>
</html>