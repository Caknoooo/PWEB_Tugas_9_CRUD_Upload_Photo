<!DOCTYPE html>
<html>

<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Data Siswa</h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
      <table class="w-full">
        <tr>
          <td class="py-2">NIS</td>
          <td class="py-2"><input type="text" name="nis" class="border border-gray-400 px-4 py-2 w-full"></td>
        </tr>
        <tr>
          <td class="py-2">Nama</td>
          <td class="py-2"><input type="text" name="nama" class="border border-gray-400 px-4 py-2 w-full"></td>
        </tr>
        <tr>
          <td class="py-2">Jenis Kelamin</td>
          <td class="py-2">
            <label class="mr-4">
              <input type="radio" name="jenis_kelamin" value="Laki-laki" class="mr-2">
              <span class="ml-2">Laki-laki</span>
            </label>
            <label>
              <input type="radio" name="jenis_kelamin" value="Perempuan" class="mr-2">
              <span class="ml-2">Perempuan</span>
            </label>
          </td>
        </tr>
        <tr>
          <td class="py-2">Telepon</td>
          <td class="py-2"><input type="text" name="telp" class="border border-gray-400 px-4 py-2 w-full"></td>
        </tr>
        <tr>
          <td class="py-2">Alamat</td>
          <td class="py-2"><textarea name="alamat" class="border border-gray-400 px-4 py-2 w-full"></textarea></td>
        </tr>
        <tr>
          <td class="py-2">Foto</td>
          <td class="py-2"><input type="file" name="foto" class="border border-gray-400 px-4 py-2"></td>
        </tr>
      </table>

      <hr class="my-4">

      <input type="submit" value="Simpan" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      <a href="index.php"><input type="button" value="Batal" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2"></a>
    </form>
  </div>
</body>

</html>