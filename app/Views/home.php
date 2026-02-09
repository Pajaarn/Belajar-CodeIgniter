<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master</title>
</head>
<body>
    <h1>Data Master</h1>
    
    <a href="/create">Tambah Data Baru</a>
    
    <br><br>
    
    <?php if(session()->getFlashdata('success')): ?>
        <p><strong><?= session()->getFlashdata('success') ?></strong></p>
        <br>
    <?php endif; ?>
    
    <?php if(empty($dataList)): ?>
        <p>Belum ada data.</p>
    <?php else: ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($dataList as $item): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($item['nama']) ?></td>
                        <td><?= esc($item['email']) ?></td>
                        <td><?= esc($item['pesan']) ?></td>
                        <td><?= date('d-m-Y H:i', strtotime($item['tanggal'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
