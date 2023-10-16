<?php

require 'functions.php';

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

   // cek apakah data berhasil di tambahkan atau tidak
   if (daftar($_POST) > 0) {
      echo "
         <script>
            alert('Pendaftaran berhasil dilakukan!');
            document.location.href = 'index.php';
         </script>
      ";
   } else {
      echo "
         <script>
            alert('Pendaftaran gagal dilakukan!');
            document.location.href = 'index.php';
         </script>";
   }
}
