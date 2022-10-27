<?php
if (isset($_POST["syarat"])) {
   if (isset($_POST["total"])) {
      // ISI HARGA TIKET
      // Deklarasi variabel
      $kelasBus = $_POST["kelasBus"];
      // Harga Tiket Bus per kelas
      $ekonomi = 100000;
      $bisnis = 300000;
      $eksekutif = 500000;

      if ($kelasBus == "Ekonomi") {
         echo $ekonomi;
      } elseif ($kelasBus == "Bisnis") {
         echo $bisnis;
      } elseif ($kelasBus == "Eksekutif") {
         echo $eksekutif;
      }
   }
}