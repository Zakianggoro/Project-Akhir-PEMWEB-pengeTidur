<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    @vite('resources/css/profileS.css')
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

    <!-- Main Profile Container -->
    <div class="bg-gray-300 min-h-screen py-10 px-4">
        <div class="max-w-5xl mx-auto bg-gray-200 rounded-xl p-6 shadow-lg">

            <!-- Profile Picture & Info -->
            <div class="flex flex-col items-center text-center mb-8">
                <div class="w-24 h-24 rounded-full bg-gray-400 flex items-center justify-center">
                    <span class="material-symbols-outlined text-6xl text-white">account_circle</span>
                </div>
                <h2 class="text-xl font-semibold mt-4">User</h2>
                <p class="text-gray-700">useremail@gmail.com</p>
            </div>

            <!-- Statistic Info -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 mb-8">
                <div class="bg-white rounded-lg p-4 w-full sm:w-1/2 shadow text-center">
                    <p class="text-sm text-gray-500">Total Raised in 1 Year</p>
                    <p class="text-xl font-bold text-gray-800">Rp 1.770.130</p>
                </div>
                <div class="bg-white rounded-lg p-4 w-full sm:w-1/2 shadow text-center">
                    <p class="text-sm text-gray-500">Trash Collected</p>
                    <p class="text-xl font-bold text-gray-800">555 kg</p>
                </div>
            </div>

            <!-- Diagram Placeholder -->
            <div class="bg-white h-60 rounded-lg shadow flex items-center justify-center mb-10">
                <h3 class="text-2xl font-semibold text-gray-600">Diagram Sampah</h3>
            </div>

            <!-- General Section -->
            <div class="max-w-2xl mx-auto">
                <h3 class="text-xl font-semibold mb-4">General</h3>
                <div class="space-y-4">

                    <!-- Guide -->
                    <div class="flex items-center justify-between bg-white rounded-lg p-4 shadow hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-2xl">developer_guide</span>
                            <span class="text-gray-800 font-medium">Guide</span>
                        </div>
                        <span class="material-symbols-outlined">chevron_right</span>
                    </div>

                    <!-- Help Center -->
                    <div class="flex items-center justify-between bg-white rounded-lg p-4 shadow hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-2xl">phone_in_talk</span>
                            <span class="text-gray-800 font-medium">Help Center</span>
                        </div>
                        <span class="material-symbols-outlined">chevron_right</span>
                    </div>

                    <!-- Settings -->
                    <div class="flex items-center justify-between bg-white rounded-lg p-4 shadow hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-2xl">settings</span>
                            <span class="text-gray-800 font-medium">Settings</span>
                        </div>
                        <span class="material-symbols-outlined">chevron_right</span>
                    </div>

                    <!-- Logout -->
                    <div class="flex items-center justify-between bg-white rounded-lg p-4 shadow hover:bg-gray-100 cursor-pointer">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-2xl">logout</span>
                            <span class="text-gray-800 font-medium">Logout</span>
                        </div>
                        <span class="material-symbols-outlined">chevron_right</span>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
</html>