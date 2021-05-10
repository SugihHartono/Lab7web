<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
 <h1>Belajar PHP Dasar</h1>
 <?php
 echo "Hello World";
 ?>
<br>
<h2>Menggunakan Variable</h2>
<?php
$nim = "311910736";
$nama = 'Sugih Hartono';
echo "NIM : " . $nim . "<br>";
echo "Nama :  $nama";
?>
<br>
<h3>Predefine Variable</h3>
<?php
echo 'Selamat Datang ' . $_GET ['nama'] = 'Sugih Hartono';
?>
 <br>
 <!-- FORM INPUT-->
 <h4>Form Input</h4>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
 <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
<hr>

<!-- Operator -->
<h5>Operator</h5>
<?php
$gaji = 4800000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
<br>
<!-- Kondisi IF -->
<h6>Kondisi If</h6>
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
 echo "Minggu";
} elseif ($nama_hari == "Monday") {
 echo "Senin";
} else {
 echo "Selasa";
}
?>
<br>
<!--Perulangan For-->
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
 echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
 echo "Perulangan ke: " . $i . '<br />';
}
?>
<br>
<!--Perulangan while-->
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
}
?>
<br>
<!--Perulangan dowhile-->
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
} while ($i<=10);
?>
</body>
</html>