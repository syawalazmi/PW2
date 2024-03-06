<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    
      <!-- <form method="GET" action="form_nilai.php"> -->
      <form method="POST" action="nilai_siswa.php">
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
          <div class="col-8">
            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
          <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select">
              <option value="DDP">Dasar - Dasar Pemrograman</option>
              <option value="BDI">Basis Data 1</option>
              <option value="WEB1">Pemrograman Web</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
          <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Prakktikum</label> 
          <div class="col-8">
            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas Prakktikum" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>

<?php
if (isset($_GET['submit'])) {
    $proses = $_GET['submit'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];
    echo 'Proses :';
    echo '<br/>Nama :'.$nama_siswa;   
    echo '<br/>Mata Kuliah :'. $mata_kuliah;   
    echo '<br/>Nilai UTS :'. $nilai_uts;   
    echo '<br/>Nilai UAS :'. $nilai_uas;   
    echo '<br/>Nilai Tugas Praktikum :'. $nilai_tugas;  
    } 
?>

</body>
</html>