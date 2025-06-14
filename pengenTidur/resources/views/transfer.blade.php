<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <div class="balance-option">
            <a href="#" onclick="togglePopup(); return false;">GOPAY</a>
        </div>
</div>
</main>

<!-- Slide-Up Popup (Overlay Modal) -->
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
            Callista Harnit<br />
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

        <div class="nominal-box">
        <label>Nominal</label>
        <div class="nominal-input">
            <span>Rp</span>
            <input type="number" id="nominal" value="0" />
        </div>
        </div>
      <button class="send-button" >SEND</button>
      <div class="success-popup" id="successPopup">
  <div class="success-box">
    <div class="success-header">
      <h2 class="success-message">SENT!</h2>
    </div>

    <div class="success-details">
      <div class="row">
        <span class="label">Transfer Date</span>
        <span id="transferDateTime"></span>
      </div>

      <div class="row">
        <span class="label">Nominal</span>
        <span class="booking-id" id="bookingId"></span>
        <span class="amount">Rp <span id="popupAmount">0</span></span>
      </div>

      <div class="row">
        <span class="label">Send to</span>
        <span class="target-name">OVO</span>
        <span class="target-info">CALLISTAHARNIT<br />6285157446789</span>
      </div>
    </div>

    <button onclick="closePopup()">Close</button>
  </div>
</div>
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

  function generateBookingID() {
  const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  let id = '';
  for (let i = 0; i < 8; i++) {
    id += chars.charAt(Math.floor(Math.random() * chars.length));
  }
  return id;
}

    function showPopup(amount) {
    // Set date and time
    const now = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const date = now.toLocaleDateString('en-GB', options);
    const time = now.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit' });

    document.getElementById('transferDateTime').textContent = `${date} ${time}`;
    document.getElementById('popupAmount').textContent = new Intl.NumberFormat('id-ID').format(amount);
    document.getElementById('bookingId').textContent = generateBookingID();

    document.getElementById('successPopup').style.display = 'flex';
    }

    function closePopup() {
    document.getElementById('successPopup').style.display = 'none';
    }

    // Change send button behavior to show popup
    const sendBtn = document.querySelector('.send-button');
    sendBtn.addEventListener('click', () => {
    const amount = parseInt(document.getElementById('nominal').value);
    if (!isNaN(amount) && amount > 0) {
        showPopup(amount);
    } else {
        alert('Please select or enter a valid amount');
    }
    });

</script>

</body>
</html>
