<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home</title>
    @vite(['resources/js/app.js'])
    @vite('resources/css/home.css')
</head>
<body>

<div class="header">
  <div><strong>Logo</strong></div>
  <div style="display: flex; align-items: center; gap: 15px;">
    <a href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
    <a href="{{ route('profile') }}">
      <img src="{{ Auth::user()->profile_picture ?? asset('default-profile.png') }}" alt="Profile" class="profile-image">
    </a>
  </div>
</div>

  <div class="container">
    <div class="sidebar">
      <a class="sidebar-button" href="{{ route('home') }}"><img src="{{ asset('images/home.png') }}"><br/>Home</a>
      <a class="sidebar-button" href="{{ route('wallet') }}"><img src="{{ asset('images/wallet.png') }}"><br/>Wallet</a>
      <a class="sidebar-button" href="{{ route('transfer') }}"><img src="{{ asset('images/transfer.png') }}"><br/>Transfer</a>
      <a class="sidebar-button" href="{{ route('trashpedia') }}"><img src="{{ asset('images/trashpedia.png') }}"><br/>Trashpedia</a>
      <a class="sidebar-button" href="{{ route('recycle') }}"><img src="{{ asset('images/recycle.png') }}"><br/>Recycle</a>
    </div>
<div class="main-content">
  <div class="content-block">
    <div class="greetings">
      <h2>Welcome back, User1!</h2>
    </div>

  <div class="section">
    <div class="balance">
      <div class="money">
        <img src="{{ asset('images/wallet.png') }}" style="width: 40px; height: auto; margin-right: 8px;">
        RP {{ number_format($saldo,2,',','.') }}</strong>
        <br>Exchange your trash
      </div>
      <div class="history">
        History

      </div>
    </div>
    <div class = "section-horizontal-container" id = "section-horizontal">
        <img src="{{ asset('images/poster7.png') }}" alt="Cara Mengolah Sampah Organik"/>
        <img src="{{ asset('images/poster7.png') }}" alt="Cara Mengolah Sampah Organik"/>
        <img src="{{ asset('images/poster7.png') }}" alt="Cara Mengolah Sampah Organik"/>
        <img src="{{ asset('images/poster7.png') }}" alt="Cara Mengolah Sampah Organik"/>
    </div>
    </div>

      <div class="section">
    <h2>Choose your type of trash</h2>
    <div class="trash-options">
      <div class="item" style="background-color:#a7e8a3">
        <img src="{{ asset('images/botolplastik.png') }}" width="40" /><br/>
          <p>Botol Plastik</p>
          <small style="color: gray;">Rp3.000/kg</small>
      </div>
      <div class="item" style="background-color:#a7e8a3">
        <img src="{{ asset('images/minyakjelantah.png') }}" width="40" /><br/>
        <p>Minyak Jelantah</p>
        <small style="color: gray;">Rp6.000/L</small>
      </div>
      <div class="item" style="background-color:#a7e8a3">
        <img src="{{ asset('images/botolkaca.png') }}" width="40" /><br/>
        <p>Botol Kaca</p>
        <small style="color: gray;">Rp5.000/kg</small>
      </div>
      <div class="item" style="background-color:#a7e8a3">
        <img src="{{ asset('images/koran.png') }}" width="40" /><br/>
        <p>Koran Bekas</p>
        <small style="color: gray;">Rp2.500/kg</small>
      </div>
    </div>
  </div>
</div>


  <div class="section">
    <h2>User1, let's take a look</h2>
    <div class="education-cards">
      <img src="{{ asset('images/poster1.png') }}" alt="Edukasi 1"/>
      <img src="{{ asset('images/poster2.png') }}" alt="Edukasi 2"/>
      <img src="{{ asset('images/poster3.png') }}" alt="Edukasi 3"/>
      <img src="{{ asset('images/poster4.png') }}" alt="Edukasi 4"/>
      <img src="{{ asset('images/poster5.png') }}" alt="Edukasi 5"/>
    </div>
  </div>
</div>

</div>

</body>
</html>
