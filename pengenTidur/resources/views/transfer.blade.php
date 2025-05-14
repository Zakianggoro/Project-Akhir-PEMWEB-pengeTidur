<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Transfer</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
@vite('resources/css/transferS.css')
</head>
<body>

<nav class="navbar">
    <div class="navbar-left">
    <a href="#" class="logo">Logo</a>
    </div>
    <div class="navbar-right">
        <a href="#">Home</a>
        <a href={{ route('wallet') }}>Wallet</a>
        <a href={{ route('transfer') }}>Transfer</a>
        <a href={{ route('trashpedia') }}>Trashpedia</a>
        <a href="#" class="cta">Recycle</a>
        <a href={{ route('profile') }}>Profile</a>
    </div>
</nav>

<main class="transfer-section">
<h2 class="transfer-title">Transfer</h2>

<div class="current-balance-label">Saldo saat ini</div>
<div class="wallet-balance">
    <span class="material-symbols-outlined wallet-icon">account_balance_wallet</span>
    <span class="balance-amount">Rp 500.000</span>
</div>

<div class="target-balance-label">Pilih bank untuk transfer</div>
<div class="balance-options">
    <div class="balance-option">BCA</div>
    <div class="balance-option">Gopay</div>
</div>
</main>


</body>
</html>
