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
        <a href={{ route('recycle') }} class="cta">Recycle</a>
        <a href={{ route('profile') }}>Profile</a>
    </div>
  </nav>

<main class="trashpedia-section">
  <h2 class="page-title">Trashpedia</h2>

  <div class="poster-gallery">
    <img src="{{ asset('images/poster4.png') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster3.png') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster1.png') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster5.png') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
    <img src="{{ asset('images/poster2.png') }}" alt="Poster 1" style="width: 200px; height: 300px; margin: 20px;">
  </div>

  <hr class="divider">

  <div class="info-cards">
    <div class="info-card">
      <img src="{{ asset('images/poster8.png') }}" alt="Banner 1" style="width: 400px; height: 100px; margin: 20px;">
      <div class="info-text">
        <h3>Selamat Hari Lingkungan Hidup Sedunia</h3>
        <p class="subheading">Lestari Alamku, Sehat Hidupku</p>
        <p class="body-text">
          Dengan menjaga alam melalui hal-hal kecil seperti membuang sampah pada tempatnya,  
  kita turut serta menyelamatkan bumi untuk kelangsungan hidup yang lebih baik.
        </p>
      </div>
    </div>

    <div class="info-card">
      <img src="{{ asset('images/poster9.png') }}" alt="Banner 1" style="width: 400px; height: 100px; margin: 20px;">
      <div class="info-text">
        <h3>Jenis-Jenis Sampah</h3>
        <p class="subheading">Kenali dan Pilah Sampah dengan Bijak</p>
        <p class="body-text">
          • <strong>Sampah organik</strong>: Sampah yang dapat terurai dan menjadi kompos.<br>
          • <strong>Sampah anorganik</strong>: Sampah yang sulit terurai secara alami namun dapat didaur ulang.<br>
          • <strong>Sampah B3</strong>: Limbah berbahaya yang memerlukan penanganan khusus.
        </p>
      </div>
    </div>
  </div>
</main>

</body>
</html>
