<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Daftar Siswa</title>
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: Arial, Helvetica, sans-serif;
      }

      body {
         margin: 200px;
      }

      h1 {
         display: flex;
         justify-content: center;
         margin-bottom: 25px;
         font-size: 48px;
      }

      form {
         display: flex;
         justify-content: center;
      }

      li {
         list-style: none;
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 15px;
      }

      label {
         font-size: 18px;
         margin-right: 25px
      }

      input {
         width: 280px;
         height: 40px;
         border-radius: 5px;
         font-size: 18px;
         padding: 10px;
      }

      button {
         display: flex;
         justify-content: flex-end;
         padding: 10px 15px;
         border-radius: 5px;
         font-size: 18px;
         color: white;
         background: #252525;
         transition: 0.3s ease-in-out;
      }

      button:hover {
         color: #252525;
         background: white;
      }
   </style>
</head>

<body>

   <h1>Form Daftar Siswa</h1>

   <form action="proses-pendaftaran.php" method="post">
      <ul>
         <!-- <li>
            <label for="id_daftar">ID Daftar: </label>
            <input type="text" name="id_daftar" id="id_daftar">
         </li> -->
         <li>
            <label for="nama_siswa">Nama Siswa </label>
            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="nama" required>
         </li>
         <li>
            <label for="alamat">Alamat </label>
            <input type="text" name="alamat" id="alamat" placeholder="alamat">
         </li>
         <li>
            <label for="jenis_kelamin">Jenis Kelamin </label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="jenis kelamin">
         </li>
         <li>
            <label for="agama">Agama </label>
            <input type="text" name="agama" id="agama" placeholder="agama">
         </li>
         <li>
            <label for="asal_sekolah">Asal Sekolah </label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="asal sekolah">
         </li>
         <button type="submit" name="submit">Tambah Data</button>
      </ul>
   </form>

</body>

</html>