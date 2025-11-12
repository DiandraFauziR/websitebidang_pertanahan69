<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan</title>
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
            background-color: #ffffff;
            color: var(--text);
            margin: 0;
        }

        .agenda-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1rem;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            color: var(--primary);
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

        .agenda-list {
            margin-top: 2rem;
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .agenda-item {
            background-color: #ffffff;
            border-left: 4px solid var(--primary);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(93, 123, 111, 0.1);
            display: flex;
            gap: 1.5rem;
            align-items: flex-start;
            transition: all 0.3s ease;
        }

        .agenda-item:hover {
            background-color: var(--secondary);
        }

        .agenda-date {
            min-width: 80px;
            text-align: center;
        }

        .agenda-date .day {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary);
        }

        .agenda-date .month {
            font-size: 1rem;
            text-transform: uppercase;
            color: var(--accent);
        }

        .agenda-content h4 {
            margin: 0 0 0.5rem;
            color: var(--primary);
        }

        .agenda-content p {
            margin: 0;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .agenda-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .agenda-date {
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <section class="agenda-section">
        <h2 class="section-title">Agenda Kegiatan</h2>
        <div class="agenda-list">
            <div class="agenda-item">
                <div class="agenda-date">
                    <div class="day">21</div>
                    <div class="month">SEP</div>
                </div>
                <div class="agenda-content">
                    <h4>Sosialisasi Pendaftaran Tanah Sistematis Lengkap (PTSL)</h4>
                    <p>Kegiatan sosialisasi kepada warga terkait pentingnya pendaftaran tanah dan proses PTSL yang sedang berjalan di kecamatan Majalengka.</p>
                </div>
            </div>

            <div class="agenda-item">
                <div class="agenda-date">
                    <div class="day">25</div>
                    <div class="month">SEP</div>
                </div>
                <div class="agenda-content">
                    <h4>Pelayanan Pertanahan Keliling</h4>
                    <p>Tim pertanahan turun langsung ke desa-desa untuk memberikan layanan pengukuran, konsultasi, dan informasi pertanahan.</p>
                </div>
            </div>

            <div class="agenda-item">
                <div class="agenda-date">
                    <div class="day">30</div>
                    <div class="month">SEP</div>
                </div>
                <div class="agenda-content">
                    <h4>Rapat Koordinasi Internal</h4>
                    <p>Pembahasan rencana kerja triwulan IV dan evaluasi program pertanahan di aula kantor Dinas Pertanahan.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>