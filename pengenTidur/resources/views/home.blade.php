<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/home.css'])
</head>
<body>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="navbar">
            <div class="logo">Logo</div>
            <nav>
                <a href={{ route('home') }} class="active">🏠 Home</a>
                <a href={{ route('wallet') }}>👛 Wallet</a>
                <a href={{ route('transfer') }}>🔁 Transfer</a>
                <a href={{ route('trashpedia') }}>📖 Trashpedia</a>
                <a href="#">♻️ Recycle</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4">
            <!-- Top Bar -->
            <div class="flex justify-between items-center navbar">
                <div></div>
                <div>
                    <a href="#" class="about">Contact us!</a>
                    <a href="#" class="cta"></a>
                </div>
            </div>

            <!-- Trash Selection & Wallet -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Trash Selection -->
                <div>
                    <h2 class="hero-title">Choose your type of trash</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <button class="trash-item">🧴<br>Botol Plastik</button>
                        <button class="trash-item">🛢️<br>Minyak Jelantah</button>
                        <button class="trash-item">🍾<br>Botol Kaca</button>
                        <button class="trash-item">📰<br>Koran Bekas</button>
                    </div>
                </div>

                <!-- Wallet Section -->
                <div class="space-y-4">
                    <div class="card">
                        <p><strong>Rp {{ number_format($saldo,2,',','.') }}</strong></p>
                        <p class="card-title">Saldo Anda</p>
                    </div>
                    <div class="card">
                        <h3>Cara Mengolah Sampah Organik</h3>
                        <p class="card-title">Solusi Ramah Lingkungan untuk Mengurangi Sampah</p>
                    </div>
                </div>
            </div>

            <!-- Card Carousel -->
            <div class="card-container">
                @foreach(['Buanglah Sampah', 'Buanglah Sampah 2', 'Hari Peduli Sampah', 'Jenis-Jenis Sampah', 'Manfaat Kota'] as $title)
                <div class="card">
                    <img src="https://via.placeholder.com/150x200?text={{ urlencode($title) }}" alt="{{ $title }}">
                    <p class="card-title">{{ $title }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>


