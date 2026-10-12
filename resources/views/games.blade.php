<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Daftar Game - ZNA Games</title>

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


<main class="container">

    <div class="page-header">

        <div class="badge">
            🎮 KOLEKSI GAME
        </div>

        <h1>
            Daftar <span>Game</span>
        </h1>

        <p>
            Pilih game yang ingin kamu lihat informasinya.
        </p>

    </div>


    <div class="game-grid">

        @foreach ($games as $game)

        <div class="game-card">

            <div class="game-image">

                <img
                    src="{{ asset($game['gambar']) }}"
                    alt="{{ $game['nama'] }}"
                >

                <span class="genre">
                    {{ $game['genre'] }}
                </span>

            </div>


            <div class="game-info">

                <h3>
                    {{ $game['nama'] }}
                </h3>

                <p>
                    {{ $game['deskripsi'] }}
                </p>


                <div class="game-meta">

                    <span>
                        🎮 {{ $game['platform'] }}
                    </span>

                    <span>
                        📅 {{ $game['tahun'] }}
                    </span>

                </div>


                <a
                    href="/game/{{ $game['slug'] }}"
                    class="btn-detail"
                >
                    Lihat Detail →
                </a>

            </div>

        </div>

        @endforeach

    </div>

</main>


<footer>
    © 2026 ZNA Games — Praktikum Laravel
</footer>

</body>

</html>