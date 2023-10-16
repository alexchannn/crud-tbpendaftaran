<?php

require 'functions.php';
$siswa = query("SELECT * FROM tb_pendaftaran");

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Halaman Admin</title>
<style>
   * {
      font-family: Arial, Helvetica, sans-serif;
   }

   th {
      background-color: #252525;
      color: white;
   }
</style>
</head>

<body>

   <h1>Pendaftaran Siswa</h1>

   <a href="form-daftar.php">Daftar data siswa baru</a>
   <br><br>

   <table border="1" cellpadding="10" cellspacing="0">

      <tr>
         <th>ID Daftar</th>
         <th>Aksi</th>
         <th>Nama Siswa</th>
         <th>Alamat</th>
         <th>Jenis Kelamin</th>
         <th>Agama</th>
         <th>Asal Sekolah</th>
      </tr>


      <?php foreach ($siswa as $row) : ?>
         <tr>
            <td> <?= $row["id_daftar"]; ?> </td>
            <td>
               <a href="edit.php?id=<?= $row["id_daftar"]; ?>">Edit</a> |
               <a href="hapus.php?id=<?= $row["id_daftar"]; ?>" onclick="return confirm('Anda yakin?');">hapus</a>
            </td>
            <td> <?= $row["nama_siswa"]; ?> </td>
            <td> <?= $row["alamat"]; ?> </td>
            <td> <?= $row["jenis_kelamin"]; ?> </td>
            <td> <?= $row["agama"]; ?> </td>
            <td> <?= $row["asal_sekolah"]; ?> </td>
         </tr>
      <?php endforeach; ?>

   </table>

</body>

</html>