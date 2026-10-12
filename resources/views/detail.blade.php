<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $game['nama'] }} - ZNA Games</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

</head>

<body>

<nav class="navbar">

    <div class="logo">
        <span class="logo-icon">🎮</span>
        ZNA <span>GAMES</span>
    </div>

    <div class="nav-menu">

        <a href="/">
            Beranda
        </a>

        <a href="/games" class="active">
            Game
        </a>

    </div>

    
</nav>


<main class="container detail-wrapper">

    <a href="/games" class="back-btn">
        ← Kembali ke Daftar Game
    </a>


    <div class="detail">

        <div class="detail-image">

            <img
                src="{{ asset($game['gambar']) }}"
                alt="{{ $game['nama'] }}"
            >

        </div>


        <div class="detail-content">

            <span class="badge">
                {{ $game['genre'] }}
            </span>


            <h1>
                {{ $game['nama'] }}
            </h1>


            <p>
                {{ $game['deskripsi'] }}
            </p>


            <div class="detail-boxes">

                <div class="detail-box">

                    <small>Genre</small>

                    <strong>
                        {{ $game['genre'] }}
                    </strong>

                </div>


                <div class="detail-box">

                    <small>Platform</small>

                    <strong>
                        {{ $game['platform'] }}
                    </strong>

                </div>


                <div class="detail-box">

                    <small>Tahun Rilis</small>

                    <strong>
                        {{ $game['tahun'] }}
                    </strong>

                </div>

            </div>

        </div>

    </div>

</main>


<footer>
    © 2026 ZNA Games — Praktikum Laravel
</footer>

</body>

</html>