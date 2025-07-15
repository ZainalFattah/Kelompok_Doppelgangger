<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah Buku</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Tambah Buku</h1>
    <form action="/store" method="post">
    <label>ISBN:</label>
    <input type="text" name="ISBN" required>

      <label>Judul:</label>
      <input type="text" name="judul" required>

      <label>Penulis:</label>
      <input type="text" name="penulis" required>

      <label>Penerbit:</label>
      <input type="text" name="penerbit" required>

      <label>Tahun:</label>
      <input type="text" name="tahun" required>

      <button type="submit" class="btn">Simpan</button>
      <a href="/" class="btn-back">Kembali</a>
    </form>
  </div>
</body>
</html>
