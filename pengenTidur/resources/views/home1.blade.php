<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home</title>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html, body {
    height: 100%;
    font-family: Arial, sans-serif;
    background-color: #1c1c1c;
    color: #333;
  }

  .header {
    background-color: #ccc;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #999;
  }

  .container {
    display: flex;
    height: calc(100vh - 50px); /* Full screen minus header height */
  }

  .sidebar {
    width: 120px;
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 10px;
    padding-right: 5px;
    border-right: 2px solid #999;
  }

  .sidebar button {
    background: none;
    border: none;
    margin: 50px 0;
    text-align: center;
    cursor: pointer;
    font-size: 18px;
    width: 200px;
  }

  .main-content {
    flex: 1;
    background-color: white;
    padding: 20px;
    overflow-y: auto;
    border-left: 2px solid #ccc;
  }

  .contet-block {
    display: flex; 
    flex-direction: row;
  }

  .section {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 8px;
  }
  .trash-options {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  .trash-options .item {
    background-color: #eee;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    border: 1px solid #bbb;
  }

  .balance {
    background-color: #a7e8a3;
    padding: 10px;
    border-radius: 5px;
    margin: 15px 0;
    font-weight: bold;
  }

  .banner img {
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  .education-cards {
    display: flex;
    gap: 10px;
    overflow-x: auto;
    padding-top: 10px;
    
  }

  .education-cards img {
    width: 150px;
    height: auto;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-right: 100px;
  }

  .sidebar-button {
  display: block;
  background: none;
  border: none;
  margin: 10px 0;
  text-align: center;
  cursor: pointer;
  font-size: 18px;
  width: 60px;
  text-decoration: none;
  color: black;
}

.profile-image {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #90ee90;
  cursor: pointer;
}

</style>

  </style>
</head>
<body>

<div class="header">
  <div><strong>Logo</strong></div>
  <div style="display: flex; align-items: center; gap: 15px;">
    <a href="#">About Us</a>
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
  <div class="section">
    <h2>Choose your type of trash</h2>
    <div class="trash-options">
      <div class="item">
        <img src="{{ asset('images/botolplastik.png') }}" width="40" /><br/>
        Botol Plastik
      </div>
      <div class="item">
        <img src="{{ asset('images/minyakjelantah.png') }}" width="40" /><br/>
        Minyak Jelantah
      </div>
      <div class="item">
        <img src="{{ asset('images/botolkaca.png') }}" width="40" /><br/>
        Botol Kaca
      </div>
      <div class="item">
        <img src="{{ asset('images/koran.png') }}" width="40" /><br/>
        Koran Bekas
      </div>
    </div>
  </div>

  <div class="section">
    <div class="balance"><strong>RP {{ number_format($saldo,2,',','.') }}</strong></div>
    <img src="{{ asset('images/poster7.png') }}" alt="Cara Mengolah Sampah Organik"/>
  </div>
</div>


  <div class="section">
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
