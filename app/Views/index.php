<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Data Buku</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Data Buku📚</h1>
    <a href="/create" class="btn">+ Tambah Buku</a>
    <table>
      <thead>
        <tr>
         <th>No</th>
          <th>ISBN</th>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Tahun</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($buku as $b): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= esc($b['ISBN']) ?></td>
          <td><?= esc($b['judul']) ?></td>
          <td><?= esc($b['penulis']) ?></td>
          <td><?= esc($b['penerbit']) ?></td>
          <td><?= esc($b['tahun']) ?></td>
          <td>
            <a href="/edit/<?= $b['ISBN'] ?>" class="btn-edit">Edit</a>
            <a href="/delete/<?= $b['ISBN'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>
