<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data</h1>
    
    <form action="/store" method="post">
        <?= csrf_field() ?>
        
        <div>
            <label for="nama">Nama Lengkap:</label><br>
            <input type="text" id="nama" name="nama" required>
        </div>
        <br>
        
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        
        <div>
            <label for="pesan">Pesan:</label><br>
            <textarea id="pesan" name="pesan" rows="5" cols="50" required></textarea>
        </div>
        <br>
        
        <button type="submit">Simpan Data</button>
    </form>
    
    <br>
    <a href="/home">Lihat Data yang Tersimpan</a>
</body>
</html>