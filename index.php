<!DOCTYPE html>
<html>

<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Data Siswa</h1>
    <a href="form_simpan.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Data</a>
    <table class="border-collapse border-2 w-full">
      <thead>
        <tr>
          <th class="border border-gray-400 px-4 py-2">Foto</th>
          <th class="border border-gray-400 px-4 py-2">NIS</th>
          <th class="border border-gray-400 px-4 py-2">Nama</th>
          <th class="border border-gray-400 px-4 py-2">Jenis Kelamin</th>
          <th class="border border-gray-400 px-4 py-2">Telepon</th>
          <th class="border border-gray-400 px-4 py-2">Alamat</th>
          <th class="border border-gray-400 px-4 py-2" colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Load file koneksi.php
        include "koneksi.php";

        // Buat query untuk menampilkan semua data siswa
        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute(); // Eksekusi querynya

        while ($data = $sql->fetch()) { // Ambil semua data dari hasil eksekusi $sql
        ?>
          <tr>
            <td class="border border-gray-400 px-4 py-2"><img src='images/<?php echo $data['foto']; ?>' class='w-20 h-20'></td>
            <td class="border border-gray-400 px-4 py-2"><?php echo $data['nis']; ?></td>
            <td class="border border-gray-400 px-4 py-2"><?php echo $data['nama']; ?></td>
            <td class="border border-gray-400 px-4 py-2"><?php echo $data['jenis_kelamin']; ?></td>
            <td class="border border-gray-400 px-4 py-2"><?php echo $data['telp']; ?></td>
            <td class="border border-gray-400 px-4 py-2"><?php echo $data['alamat']; ?></td>
            <td class="border border-gray-400 px-4 py-2">
              <a href='form_ubah.php?id=<?php echo $data['id']; ?>' class='text-blue-500 hover:text-blue-700'>Ubah</a>
            </td>
            <td class="border border-gray-400 px-4 py-2">
              <a href='proses_hapus.php?id=<?php echo $data['id']; ?>' class='text-red-500 hover:text-red-700'>Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>