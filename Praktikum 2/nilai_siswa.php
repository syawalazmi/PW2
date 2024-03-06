<?php
if (isset($_POST['submit'])) {
    $proses = $_POST['submit'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    echo 'Proses :';
    echo '<br/>Nama :'.$nama_siswa;   
    echo '<br/>Mata Kuliah :'. $mata_kuliah;   
    echo '<br/>Nilai UTS :'. $nilai_uts;   
    echo '<br/>Nilai UAS :'. $nilai_uas;   
    echo '<br/>Nilai Tugas Praktikum :'. $nilai_tugas;  
    } 
?>