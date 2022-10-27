<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Pemesanan - BUS AKAP</title>

   <!-- CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg pt-3 pb-3 navbar-light" style="background-color: #D84F57;">
      <div class="container-fluid">
         <a class="navbar-brand text-white ps-4" href="http://localhost/TIKET_BUS/home.php">BUS AKAP</a>
         <div class="pe-5" id="navbarSupportedContent">
            <ul class="navbar-nav">
               <li class="nav-item ms-3 me-3">
                  <a class="nav-link active text-white" aria-current="page"
                     href="http://localhost/TIKET_BUS/home.php">Home</a>
               </li>
               <li class="nav-item ms-3 me-3">
                  <a class="nav-link text-white" href="form.php">Pesan Tiket</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- Judul Halaman -->
   <h2 class="text-center pt-3 pb-3">Form Pemesanan</h2>

   <!-- Formulir Pemesanan -->
   <div class="container-lg justify-content-center ">
      <form action="" method="post" id="formPemesanan">
         <div class="row mb-3">
            <!-- Nama Lengkap -->
            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6 ms-1">
               <input type="text" name="nama" id="nama" class="form-control" aria-label="Username"
                  aria-describedby="basic-addon1">
            </div>
         </div>
         <div class="row mb-3">
            <!-- Nomor Identitas -->
            <label for="noid" class="col-sm-3 col-form-label">Nomor Identitas</label>
            <div class="col-sm-6 ms-1">
               <input type="number" class="form-control" id="noid" name="noid">
            </div>
         </div>
         <div class="row mb-3">
            <!-- No. HP -->
            <label for="nohp" class="col-sm-3 col-form-label">No. HP</label>
            <div class="col-sm-6 ms-1">
               <input type="number" class="form-control" id="nohp" name="nohp">
            </div>
         </div>
         <div class="row mb-3">
            <!-- Kelas Penumpang -->
            <label for="kelas" class="col-sm-3 col-form-label">Kelas Penumpang</label>
            <div class="col-sm-6 ms-1">
               <select class="form-select" aria-label="Default select example" id="kelasBus" name="kelasBus">
                  <option selected>Pilih Kelas Bus</option>
                  <option value="Ekonomi">Ekonomi</option>
                  <option value="Bisnis">Bisnis</option>
                  <option value="Eksekutif">Eksekutif</option>
               </select>
            </div>
         </div>
         <div class="row mb-3">
            <!-- Jadwal Keberangkatan -->
            <label for="jadwal" class="col-sm-3 col-form-label">Jadwal Keberangkatan</label>
            <div class="col-sm-6 ms-1">
               <input type="date" class="form-control" id="jadwal" name="jadwal">
            </div>
         </div>
         <div class="row mb-3">
            <!-- Penumpang Nonlansia -->
            <label for="penumpang" class="col-sm-3 col-form-label">
               Jumlah Penumpang<br>
               <p class="">Bukan Lansia (Usia < 60)</p>
            </label>
            <div class="col-sm-6 ms-1">
               <input type="number" class="form-control" id="penumpang" name="penumpang">
            </div>
         </div>
         <div class="row mb-3">
            <!-- Penumpang Lansia -->
            <label for="lansia" class="col-sm-3 col-form-label">
               Jumlah Penumpang Lansia<br>
               <p class="">Usia 60 tahun ke atas</p>
            </label>
            <div class="col-sm-6 ms-1">
               <input type="number" class="form-control" id="lansia" name="lansia">
            </div>
         </div>
         <div class="row mb-3">
            <!-- Harga Tiket -->
            <label for="tiket" class="col-sm-3 col-form-label">Harga Tiket</label>
            <div class="col-sm-6 ms-1">
               <input type="number" class="form-control" value="<?php include "harga_tiket.php"; ?>" name="tiket"
                  readonly>
            </div>
         </div>
         <div class="row mb-3">
            <!-- Total Bayar -->
            <label for="bayar" class="col-sm-3 col-form-label">Total Pembayaran</label>
            <div class="col-sm-6 ms-1 d-flex align-items-center">
               <input type="number" class="form-control" value="<?php include "total_bayar.php"; ?>" name="total"
                  readonly>
            </div>
         </div>
         <div class="form-check mb-3">
            <!-- Persetujuan -->
            <input class="form-check-input" type="checkbox" value="" id="syarat" name="syarat">
            <label class="form-check-label ms-2" for="syarat">
               Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan<br>
               ketentuan yang telah ditetapkan
            </label>
         </div>
         <div class="col ps-5">
            <!-- Button -->
            <button class="btn btn-primary me-5" form="formPemesanan" name="total" type="submit">Hitung Total
               Bayar</button>
            <button class="btn btn-primary me-5" form="formPemesanan" type="submit" name="pesan">Pesan Tiket</button>
            <button class="btn btn-primary" name="cancel" type="reset">Cancel</button>
         </div>
   </div>

   </form>
   </div>

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
   </script>
</body>

<?php

// Fungsi menghitung total bayar
function penumpang($jumlahOrang, $hargaTiket)
{
   $totalBayar = $jumlahOrang * $hargaTiket;
   return $totalBayar;
}

function penumpangLansia($jumlahOrang, $hargaTiket)
{
   $diskon = $jumlahOrang * $hargaTiket * 10 / 100;
   $totalBayar = $jumlahOrang * $hargaTiket;
   $totalBayar = $totalBayar - $diskon;
   return $totalBayar;
}

// Database mySQL
$koneksi = mysqli_connect("localhost", "root", "", "vsga");
$tiket = include "harga_tiket.php";
$total_bayar = include "total_bayar.php";
if (isset($_POST['pesan'])) {

   mysqli_query($koneksi, "INSERT INTO bus_akap set 
   nama_pemesan = '$_POST[nama]',
   nomor_identitas = '$_POST[noid]',
   nomor_hp = '$_POST[nohp]',
   kelas_penumpang = '$_POST[kelasBus]',
   jadwal_keberangkatan = '$_POST[jadwal]',
   jumlah_penumpang = '$_POST[penumpang]',
   jumlah_penumpang_lansia = '$_POST[lansia]',
   harga_tiket = '$tiket',
   total_pembayaran = '$total_bayar'
   ");
}
?>

</html>