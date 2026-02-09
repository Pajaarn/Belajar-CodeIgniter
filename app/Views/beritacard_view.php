<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Card Design</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(to bottom, #00bfff, #1e90ff);
            min-height: 100vh;
            padding: 40px 0;
        }
        .header-title {
            background-color: #00bfff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-bottom: 40px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .card-img-top {
            border-radius: 15px 15px 0 0;
            height: 200px;
            object-fit: cover;
        }
        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid white;
            margin-top: -40px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="header-title">
        <h1>BERITA TERKINI</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($BeritaList as $index => $berita): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://picsum.photos/400/200?random=<?= $index ?>" class="card-img-top" alt="<?= $berita['judul'] ?>">
                    <div class="card-body text-center">
                        <img src="https://i.pravatar.cc/80?img=<?= $index + 1 ?>" class="profile-img" alt="Profile">
                        <h5 class="card-title mt-3 fw-bold"><?= $berita['judul'] ?></h5>
                        <p class="card-text text-muted"><?= $berita['isi'] ?></p>
                        <div class="social-icons">
                            <a href="#" class="text-primary me-2"><i class="bi bi-facebook"></i>📘</a>
                            <a href="#" class="text-info me-2"><i class="bi bi-linkedin"></i>💼</a>
                            <a href="#" class="text-dark me-2"><i class="bi bi-pinterest"></i>📌</a>
                            <a href="#" class="text-info"><i class="bi bi-twitter"></i>🐦</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
