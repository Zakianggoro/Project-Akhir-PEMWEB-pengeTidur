<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    @vite(['resources/js/app.js'])
    @vite('resources/css/profileS.css')
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <a href="#">Logo</a>
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

    <div class="container">
        <div class="profile">
            <div class="avatar">
                <span class="material-symbols-outlined">account_circle</span>
            </div>
            <h2>User</h2>
            <p>useremail@gmail.com</p>
        </div>

        <div class="stats">
            <div class="stat-box">
                <p>Total Raised in 1 Year</p>
                <h3>Rp 1.770.130</h3>
            </div>
            <div class="stat-box">
                <p>Trash Collected</p>
                <h3>555 kg</h3>
            </div>
        </div>

        <div class="diagram">
            <h3>Diagram Sampah</h3>
        </div>

        <div class="general">
            <h3>General</h3>

            <div class="menu-item">
                <span><span class="material-symbols-outlined">developer_guide</span> Guide</span>
                <span class="material-symbols-outlined">chevron_right</span>
            </div>

            <div class="menu-item">
                <span><span class="material-symbols-outlined">phone_in_talk</span> Help Center</span>
                <span class="material-symbols-outlined">chevron_right</span>
            </div>

            <div class="menu-item">
                <span><span class="material-symbols-outlined">settings</span> Settings</span>
                <span class="material-symbols-outlined">chevron_right</span>
            </div>

            <div class="menu-item">
                <span><span class="material-symbols-outlined">logout</span> Logout</span>
                <span class="material-symbols-outlined">chevron_right</span>
            </div>
        </div>
    </div>
</body>
</html>