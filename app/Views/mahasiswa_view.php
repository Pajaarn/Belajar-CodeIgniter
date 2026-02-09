<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['jurusan'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


