<?php

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbsmk");

function query($query)
{
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

function daftar($data)
{
   global $conn;

   $nama_siswa = htmlspecialchars($data["nama_siswa"]);
   $alamat = htmlspecialchars($data["alamat"]);
   $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
   $agama = htmlspecialchars($data["agama"]);
   $asal_sekolah = htmlspecialchars($data["asal_sekolah"]);

   $query = "INSERT INTO tb_pendaftaran
               VALUES
               ('', '$nama_siswa', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')
            ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

function hapus($id)
{
   global $conn;
   mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_daftar = $id");

   return mysqli_affected_rows($conn);
}

function edit($data)
{
   global $conn;

   $id_daftar = $data["id_daftar"];
   $nama_siswa = htmlspecialchars($data["nama_siswa"]);
   $alamat = htmlspecialchars($data["alamat"]);
   $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
   $agama = htmlspecialchars($data["agama"]);
   $asal_sekolah = htmlspecialchars($data["asal_sekolah"]);

   $query = "UPDATE tb_pendaftaran SET
               nama_siswa = '$nama_siswa',
               alamat = '$alamat',
               jenis_kelamin = '$jenis_kelamin',
               agama = '$agama',
               asal_sekolah = '$asal_sekolah'
            WHERE id_daftar = $id_daftar
            ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}
