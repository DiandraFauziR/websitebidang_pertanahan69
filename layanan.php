<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Dinas Pertanahan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #5D7B6F;
            --secondary: #E9F0EB;
            --text: #4A4A4A;
            --light: #F8F9FA;
            --accent: #D4B483;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
            margin: 0;
            background-color: #ffffff;
        }

        .layanan-section {
            padding: 3rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--accent);
        }

        .layanan-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .layanan-card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            border-left: 4px solid var(--primary);
            box-shadow: 0 4px 12px rgba(93, 123, 111, 0.1);
            transition: all 0.3s ease;
        }

        .layanan-card:hover {
            background-color: var(--secondary);
            transform: translateY(-5px);
        }

        .layanan-card i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .layanan-card h4 {
            font-size: 1.2rem;
            margin-bottom: 0.8rem;
            color: var(--primary);
        }

        .layanan-card p {
            font-size: 0.95rem;
            color: var(--text);
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .layanan-section {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <section class="layanan-section" id="layanan">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="layanan-grid">
            <div class="layanan-card">
                <i class="fas fa-ruler-combined"></i>
                <h4>Pengadaan Tanah</h4>
                <p>Pengadaan tanah adalah proses pemerintah mengambil tanah untuk kepentingan umum (seperti infrastruktur) dengan kompensasi adil</p>
            </div>
            
            
        </div>
    </section>
</body>
</html>