<!DOCTYPE html>
<html>

<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ubah Data Siswa</h1>

    <?php
    // Load file koneksi.php
    include "koneksi.php";

    // Ambil data NIS yang dikirim oleh index.php melalui URL
    $id = $_GET['id'];

    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
    $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute(); // Eksekusi query insert
    $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
    ?>

    <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
      <table class="w-full">
        <tr>
          <td class="py-2">NIS</td>
          <td class="py-2"><input type="text" name="nis" value="<?php echo $data['nis']; ?>" class="border border-gray-400 px-4 py-2 w-full"></td>
        </tr>
        <tr>
          <td class="py-2">Nama</td>
          <td class="py-2"><input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="border border-gray-400 px-4 py-2 w-full"></td>
        </tr>
        <tr>
          <td class="py-2">Jenis Kelamin</td>
          <td class="py-2">
            <label class="mr-4">
              <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($data['jenis_kelamin'] == 'Laki-laki') {
                                                                            echo 'checked';
                                                                          } ?>>
              <span class="ml-2">Laki-laki</span>
            </label>
            <label>
              <input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') {
                                                                            echo 'checked';
                                                                          } ?>>
              <span class="ml-2">Perempuan</span>
            </label>
          </td>
        </tr>
        <tr>
          <td class="py-2">Telepon</td>
          <td class="py-2"><input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="border border-gray-400 px-4 py-2 w-full"></td>
        </tr>
        <tr>
          <td class="py-2">Alamat</td>
          <td class="py-2"><textarea name="alamat" class="border border-gray400 px-4 py-2 w-full"><?php echo $data['alamat']; ?></textarea></td>
        </tr>
        <tr>
          <td class="py-2">Foto</td>
          <td class="py-2">
            <input type="file" name="foto" class="border border-gray-400 px-4 py-2">
          </td>
        </tr>
      </table>

      <hr class="my-4">

      <input type="submit" value="Ubah" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      <a href="index.php"><input type="button" value="Batal" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2"></a>
    </form>
  </div>
</body>

</html>