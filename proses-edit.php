<?php

require 'functions.php';

// ambil data url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$siswa = query("SELECT * FROM tb_pendaftaran WHERE id_daftar = $id")[0];


// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

   // cek apakah data berhasil di Edit atau tidak
   if (edit($_POST) > 0) {
      echo "
         <script>
            alert('Data berhasil diedit!');
            document.location.href = 'index.php';
         </script>
      ";
   } else {
      echo "
         <script>
            alert('Data gagal diedit!');
            document.location.href = 'index.php';
         </script>";
   }
}
