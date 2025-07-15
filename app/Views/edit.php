<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Buku</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Edit Buku</h1>
    <form action="/update/<?= $buku['ISBN'] ?>" method="post">
      <label>ISBN:</label>
      <input type="text" name="ISBN" value="<?= esc($buku['ISBN']) ?>" required>

      <label>Judul:</label>
      <input type="text" name="judul" value="<?= esc($buku['judul']) ?>" required>

      <label>Penulis:</label>
      <input type="text" name="penulis" value="<?= esc($buku['penulis']) ?>" required>

      <label>Penerbit:</label>
      <input type="text" name="penerbit" value="<?= esc($buku['penerbit']) ?>" required>

      <label>Tahun:</label>
      <input type="text" name="tahun" value="<?= esc($buku['tahun']) ?>" required>

      <button type="submit" class="btn">Update</button>
      <a href="/" class="btn-back">Kembali</a>
    </form>
  </div>
</body>
</html>
