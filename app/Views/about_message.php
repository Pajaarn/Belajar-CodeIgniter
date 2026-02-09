<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Berita</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            width: 100%;
            padding: 50px;
            animation: slideUp 0.6s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .header h1 {
            color: #667eea;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #666;
            font-size: 1.1em;
        }
        
        .content {
            line-height: 1.8;
            color: #333;
            margin-bottom: 30px;
        }
        
        .content h2 {
            color: #764ba2;
            margin: 25px 0 15px;
            font-size: 1.5em;
        }
        
        .content p {
            margin-bottom: 15px;
            text-align: justify;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .feature-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-card h3 {
            margin-bottom: 10px;
            font-size: 1.2em;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
        }
        
        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #eee;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🗞️ Portal Berita</h1>
            <p>Informasi Terkini dan Terpercaya</p>
        </div>
        
        <div class="content">
            <h2>Tentang Kami</h2>
            <p>
                Selamat datang di Portal Berita, sumber informasi terpercaya Anda untuk berita terkini 
                dari berbagai kategori. Kami berkomitmen untuk menyajikan berita yang akurat, berimbang, 
                dan up-to-date untuk membantu Anda tetap terinformasi.
            </p>
            
            <h2>Mengapa Memilih Kami?</h2>
            <div class="features">
                <div class="feature-card">
                    <h3>⚡ Cepat</h3>
                    <p>Update berita real-time</p>
                </div>
                <div class="feature-card">
                    <h3>✅ Akurat</h3>
                    <p>Informasi terverifikasi</p>
                </div>
                <div class="feature-card">
                    <h3>🌍 Lengkap</h3>
                    <p>Berita dari seluruh dunia</p>
                </div>
            </div>
            
            <p>
                Dengan tim jurnalis profesional dan jaringan sumber yang luas, kami menghadirkan 
                berita dari berbagai kategori seperti politik, ekonomi, teknologi, olahraga, 
                hiburan, dan masih banyak lagi.
            </p>
            
            <div style="text-align: center;">
                <a href="/berita/details/1" class="cta-button">Baca Berita Terbaru</a>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; <?= date('Y') ?> Portal Berita. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
