<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trashpedia</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  @vite('resources/css/trashpediaS.css')
</head>
<body>

  <nav class="navbar">
    <div class="navbar-left">
      <a href="#" class="logo">Logo</a>
    </div>
    <div class="navbar-right">
        <a href={{ route('home') }}>Home</a>
        <a href={{ route('wallet') }}>Wallet</a>
        <a href={{ route('transfer') }}>Transfer</a>
        <a href={{ route('trashpedia') }}>Trashpedia</a>
        <a href="#" class="cta">Recycle</a>
        <a href={{ route('profile') }}>Profile</a>
    </div>
  </nav>

<main class="trashpedia-section">
  <h2 class="page-title">Trashpedia</h2>

  <div class="poster-gallery">
    <img src="{{ asset('images/poster tes.jpg') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster tes.jpg') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster tes.jpg') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster tes.jpg') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster tes.jpg') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
  </div>

  <hr class="divider">

  <div class="info-cards">
    <div class="info-card">
      <img src="{{ asset('images/poster tes.jpg') }}" alt="Banner 1" style="width: 200px; height: 100px; margin: 20px;">
      <div class="info-text">
        <h3>Heading</h3>
        <p class="subheading">Subheading</p>
        <p class="body-text">
          Aku suka bocchi the rock, dan aku suka sekali dengan lagu-lagu yang ada di anime ini. Aku juga suka sekali dengan karakter-karakter yang ada di anime ini. Aku sangat merekomendasikan anime ini kepada kalian semua.
          Aku juga suka sekali dengan lagu-lagu yang ada di anime ini. Aku sangat merekomendasikan anime ini kepada kalian semua.
        </p>
      </div>
    </div>

    <div class="info-card">
      <img src="{{ asset('images/poster tes.jpg') }}" alt="Banner 1" style="width: 200px; height: 100px; margin: 20px;">
      <div class="info-text">
        <h3>Heading</h3>
        <p class="subheading">Subheading</p>
        <p class="body-text">
          Aku suka bocchi the rock, dan aku suka sekali dengan lagu-lagu yang ada di anime ini. Aku juga suka sekali dengan karakter-karakter yang ada di anime ini. Aku sangat merekomendasikan anime ini kepada kalian semua.
          Aku juga suka sekali dengan lagu-lagu yang ada di anime ini. Aku sangat merekomendasikan anime ini kepada kalian semua.
        </p>
      </div>
    </div>
  </div>
</main>

</body>
</html>
