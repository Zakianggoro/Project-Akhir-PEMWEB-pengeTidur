<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer OVO</title>
    @vite(['resources/js/app.js'])
    @vite('resources/css/transferOVOS.css')
</head>
<body>
<div class="transfer-container">
    <div class="back-button">
        <a href={{ route('transfer') }}></a>
    </div>

    <div class="logo-title">
        <img src="{{ asset('images/logo.png') }}" alt="Daur Logo" class="logo">
        <span>Transfer</span>
    </div>

    <div class="send-to-box">
        <div class="send-label">Send to</div>
        <div class="send-content">
            <strong>OVO</strong>
            <div class="recipient-info">
                Callista Harnit<br>
                62851****6789
            </div>
        </div>
        <br><a href="#" class="change-account">Change Account</a>
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
            <input type="text" id="nominal" value="0">
        </div>
    </div>

    <button class="send-button">SEND</button>
</div>

<script>
    function selectAmount(button, amount) {
        // Remove 'selected' class from all buttons
        document.querySelectorAll('.amount').forEach(btn => btn.classList.remove('selected'));

        // Add 'selected' class to the clicked button
        button.classList.add('selected');

        // Update the input value
        document.getElementById('nominal').value = amount;
    }
</script>

</body>
</html>
