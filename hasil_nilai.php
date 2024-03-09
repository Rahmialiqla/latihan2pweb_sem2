<?php


require_once 'model.php';


if( !isset($_GET["submit"])    ){
    header("Location: index.php");
    exit;
}

$proses = $_GET["submit"];
$nama = $_GET["nama"];
$matkul = $_GET["matakuliah"];
$hasil_uts = $_GET["uts"];
$hasil_uas = $_GET["uas"];
$hasil_tugas = $_GET["tugas"];
$hasil_akhir = ($hasil_uts + $hasil_uas + $hasil_tugas) / 3;


echo 'Nama Siswa : '  . $nama;
echo '<br> Mata Kuliah : ' . $matkul;
echo '<br> Hasil UTS : ' . $hasil_uts;
echo '<br> Hasil UAS : ' . $hasil_uas;
echo '<br> Hasil Tugas : ' . $hasil_tugas;

echo '<br> Hasil Akhir : ' . $hasil_akhir;
echo '<br> DINYATAKAN : ' . kelulusan($hasil_akhir);
echo '<br> GRADE : ' . grade($hasil_akhir);









?>