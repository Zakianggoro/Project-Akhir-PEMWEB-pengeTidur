<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Transfer</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  @vite('resources/css/transferS.css')
  @vite(['resources/js/app.js', 'resources/css/transferOVOS.css'])
</head>
<body>

<nav class="navbar">
  <div class="navbar-left">
    <a href="#" class="logo">Logo</a>
  </div>
  <div class="navbar-right">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('wallet') }}">Wallet</a>
    <a href="{{ route('transfer') }}">Transfer</a>
    <a href="{{ route('trashpedia') }}">Trashpedia</a>
    <a href="{{ route('recycle') }}" class="cta">Recycle</a>
    <a href="{{ route('profile') }}">Profile</a>
  </div>
</nav>

<main class="transfer-section">
  <h2 class="transfer-title">Transfer</h2>

  <div class="current-balance-label">Saldo saat ini</div>
  <div class="wallet-balance">
    <span class="material-symbols-outlined wallet-icon">account_balance_wallet</span>
    <span class="balance-amount"><strong>Rp {{ number_format($saldo,2,',','.') }}</strong></span>
  </div>

  <div class="target-balance-label">Pilih bank untuk transfer</div>
    <div class="balance-options">
        <div class="balance-option">
            <a href="#" onclick="togglePopup(); return false;">OVO</a>
        </div>
        <div class="balance-option">Gopay</div>
</div>
  <button onclick="togglePopup()" class="open-popup-button">Pilih Bank</button>
</main>

<!-- 🧾 Slide-Up Popup (Overlay Modal) -->
<div class="popup-overlay" id="popup">
  <div class="popup-content">
    <span class="close-button" onclick="togglePopup()">&times;</span>

    <div class="transfer-container">
      <div class="logo-title">
        <img src="/images/logo.png" alt="Daur Logo" class="logo" />
        Transfer
      </div>

      <div class="send-to-box">
        <div class="send-label">Send to</div>
        <div class="send-content">
          <span><strong>OVO</strong></span>
          <div class="recipient-info">
            Ivaaden Febbs<br />
            62851****6789
          </div>
        </div>
        <br><div class="change-account">Change Account</div>
      </div>

        <div class="amount-buttons">
        <button class="amount" onclick="selectAmount(this, '10000')">Rp 10.000</button>
        <button class="amount" onclick="selectAmount(this, '20000')">Rp 20.000</button>
        <button class="amount" onclick="selectAmount(this, '25000')">Rp 25.000</button>
        <button class="amount" onclick="selectAmount(this, '30000')">Rp 30.000</button>
        <button class="amount" onclick="selectAmount(this, '50000')">Rp 50.000</button>
        <button class="amount" onclick="selectAmount(this, '100000')">Rp 100.000</button>
        </div>
        <div id="error-message" style="color: red; margin-bottom: 10px; display: none;">
          Saldo tidak mencukupi.
        </div>
        <div class="nominal-box">
        <label>Nominal</label>
        <div class="nominal-input">
            <span>Rp</span>
            <input type="number" id="nominal" value="0" />
        </div>
        </div>


      <button class="send-button" onclick="handleSend()">SEND</button>

    </div>
  </div>
</div>

<script>
  function togglePopup() {
    document.getElementById('popup').classList.toggle('active');
  }

  function openOVOModal() {
    document.getElementById('ovoModal').style.display = 'flex';
    document.getElementById('popup').classList.remove('active'); // close popup
  }

  function closeOVOModal() {
    document.getElementById('ovoModal').style.display = 'none';
  }

  function selectAmount(button, amount) {
    document.querySelectorAll('.amount').forEach(btn => btn.classList.remove('selected'));
    button.classList.add('selected');
    document.getElementById('nominal').value = amount;
  }
  const saldoSaatIni = @json($saldo);

  function handleSend() {
    const nominal = parseInt(document.getElementById('nominal').value);
    const errorMsg = document.getElementById('error-message');
    errorMsg.style.display = 'none';

    if (isNaN(nominal) || nominal <= 0) {
      errorMsg.textContent = "Nominal tidak valid.";
      errorMsg.style.display = 'block';
      return;
    }

    if (nominal > saldoSaatIni) {
      errorMsg.textContent = "Saldo tidak mencukupi.";
      errorMsg.style.display = 'block';
      return;
    }

    // Kirim data ke server
    fetch("{{ route('transfer.send') }}", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
  },
  body: JSON.stringify({
    tujuan: "Ivaaden Febbs",
    nominal: nominal
  })
})
.then(async response => {
  const contentType = response.headers.get("content-type");
  if (!response.ok) {
    if (contentType && contentType.includes("application/json")) {
      const errorData = await response.json();
      throw new Error(errorData.error || 'Gagal transfer');
    } else {
      const errorText = await response.text();
      throw new Error("Server error: " + errorText.slice(0, 100));
    }
  }

  if (contentType && contentType.includes("application/json")) {
    return response.json();
  } else {
    throw new Error("Respon bukan JSON");
  }
})
.then(data => {
  alert("Transfer berhasil!");
  window.location.href = "{{ route('wallet') }}";
})
.catch(error => {
  errorMsg.textContent = error.message;
  errorMsg.style.display = 'block';
});
    }
</script>

</body>
</html>