<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZNA Games</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar">

    <div class="logo">
        <span class="logo-icon">🎮</span>
        ZNA <span>GAMES</span>
    </div>

    <div class="nav-menu">
        <a href="/" class="active">Beranda</a>
        <a href="/games">Game</a>
    </div>

    

</nav>

<main class="container">

    <section class="hero">

        <div class="hero-content">

            <div class="badge">
                🎮 KATALOG GAME
            </div>

            <h1>
                Temukan Game<br>
                <span>Favoritmu.</span>
            </h1>

            <p>
                Jelajahi berbagai game populer dari berbagai
                genre dan platform dalam satu katalog sederhana.
            </p>

            <a href="/games" class="btn-primary">
                Jelajahi Game →
            </a>

            <div class="stats">

                <div class="stat">
                    <strong>6+</strong>
                    <span>Game Pilihan</span>
                </div>

                <div class="stat">
                    <strong>5+</strong>
                    <span>Genre</span>
                </div>

                <div class="stat">
                    <strong>4+</strong>
                    <span>Platform</span>
                </div>

            </div>

        </div>

        <div class="hero-art">

            <div style="background-image:url('{{ asset('images/Minecraft.png') }}')"></div>

            <div style="background-image:url('{{ asset('images/GTAV.png') }}')"></div>

            <div style="background-image:url('{{ asset('images/Valorant.png') }}')"></div>

            <div style="background-image:url('{{ asset('images/EldenRing.png') }}')"></div>

        </div>

    </section>

</main>

<footer>
    © 2026 ZNA Games — Praktikum Laravel
</footer>

</body>
</html>