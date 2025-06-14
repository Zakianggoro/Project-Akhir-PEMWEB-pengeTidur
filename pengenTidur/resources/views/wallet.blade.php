<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wallet</title>
@vite('resources/css/walletS.css')
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

<main class="wallet-section">
    <h1>Wallet</h1>
    <div class="wallet-container">
    <div class="wallet-card">
        <div class ="container">
            <div class="user">
                <img src="{{ asset('images/wallet.png') }}" style="width: 60px; height: auto; margin-right: 8px;">
                <h3>User1</h3>
            </div>
            <div class="wallet">
                <p><strong>Rp {{ number_format($saldo,2,',','.') }}</strong></p>
            </div>
        </div>
    </div>
    </div>
    <button class="transfer-button">Transfer</button>
    </div>
</main>

<section class="history-section">
    <h2>History transfer</h2>
    <div class="history-dummy">
    <p>Transfer ke Budi - Rp10.000</p>
    <p>Transfer dari Susi - Rp15.000</p>
    </div>
</section>
</body>
</html>
