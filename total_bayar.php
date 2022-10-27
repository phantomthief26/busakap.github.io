<?php
if (isset($_POST["syarat"])) {
   if (isset($_POST["total"])) {
      // ISI TOTAL BAYAR
      // Deklarasi variabel
      $kelasBus = $_POST["kelasBus"];
      $penumpang = $_POST["penumpang"];
      $lansia = $_POST["lansia"];

      if ($kelasBus == "Ekonomi") {
         // Jika memilih kelas ekonomi
         $ekonomi = 100000;
         $bayarTiket = penumpang($penumpang, $ekonomi) + penumpangLansia($lansia, $ekonomi);
         echo $bayarTiket;
      } elseif ($kelasBus == "Bisnis") {
         // Jika memilih kelas bisnis
         $bisnis = 300000;
         $bayarTiket = penumpang($penumpang, $bisnis) + penumpangLansia($lansia, $bisnis);
         echo $bayarTiket;
      } elseif ($kelasBus == "Eksekutif") {
         // Jika memilih kelas eksekutif
         $eksekutif = 500000;
         $bayarTiket = penumpang($penumpang, $eksekutif) + penumpangLansia($lansia, $eksekutif);
         echo $bayarTiket;
      }
   }
}