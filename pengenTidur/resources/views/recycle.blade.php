<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recycle</title>
  <link rel="stylesheet" href="recycle.css">
  <style>
    body {
        margin: 0;
        font-family: sans-serif;
        background-color: #ccc;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #eee;
        padding: 10px 20px;
    }

    .navbar a {
        text-decoration: none;
        color: #333;
        margin-left: 15px;
        font-weight: 600;
    }

    .navbar .logo {
        font-size: 1rem;
        font-weight: bold;
    }

    .navbar .cta {
        background-color: #90ee90;
        padding: 4px 10px;
        border-radius: 4px;
    }

    .wallet-section {
        text-align: center;
        padding: 30px 0;
    }

    .wallet-section h1 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .wallet-container {
        width: 90%;
        max-width: 900px;
        margin: 0 auto;
        background-color: #bfbfbf;
        border-radius: 8px;
        padding: 20px;
        display: flex;
        gap: 20px;
    }

    .trash-picker {
        width: 30%;
        background-color: #ddd;
        padding: 10px;
        border-radius: 8px;
    }

    .trash-picker h3 {
        text-align: center;
        margin-bottom: 15px;
    }

    .trash-item {
        background-color: white;
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 12px;
        text-align: center;
        position: relative;
    }

    .trash-item img {
        width: 40px;
        height: 40px;
        margin-bottom: 5px;
    }

    .trash-item button {
        position: absolute;
        right: 10px;
        background: #eee;
        border: none;
        font-size: 16px;
        cursor: pointer;
        width: 25px;
        height: 25px;
        border-radius: 50%;
    }

    .trash-item .plus {
        top: 10px;
    }

    .trash-item .minus {
        bottom: 10px;
    }

    .item-list {
        flex: 1;
        background-color: #eee;
        border-radius: 8px;
        padding: 10px;
    }

    .item-list h3 {
        margin-bottom: 10px;
    }

    .item-box {
        background-color: white;
        height: 70px;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .action-buttons button {
        background-color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: bold;
        cursor: pointer;
    }

    .history-section {
        margin: 40px auto;
        width: 90%;
        max-width: 800px;
        border-top: 2px solid black;
        padding-top: 20px;
    }

    .history-section h2 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .history-dummy p {
        background: #f0f0f0;
        padding: 8px;
        margin: 6px 0;
        border-radius: 4px;
    }
    .scrollable-list {
  max-height: 300px;
  overflow-y: auto;
  margin-bottom: 10px;
}

.item-box {
  background-color: white;
  height: auto;
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 10px;
  text-align: left;
  font-weight: bold;
}

  </style>
  <script>
  const items = {};

  function renderItems() {
    const itemList = document.getElementById("item-list-display");
    itemList.innerHTML = "";

    for (const [name, count] of Object.entries(items)) {
      if (count > 0) {
        const div = document.createElement("div");
        div.className = "item-box";
        div.textContent = `${name} x${count}`;
        itemList.appendChild(div);
      }
    }
  }

  function setupButtons() {
    const plusButtons = document.querySelectorAll(".plus");
    const minusButtons = document.querySelectorAll(".minus");

    plusButtons.forEach(button => {
      button.addEventListener("click", () => {
        const name = button.parentElement.querySelector("div").textContent;
        items[name] = (items[name] || 0) + 1;
        renderItems();
      });
    });

    minusButtons.forEach(button => {
      button.addEventListener("click", () => {
        const name = button.parentElement.querySelector("div").textContent;
        if (items[name]) {
          items[name]--;
          if (items[name] <= 0) delete items[name];
          renderItems();
        }
      });
    });
  }

  document.addEventListener("DOMContentLoaded", setupButtons);
</script>

</head>
<body>

<!-- Navbar -->
<div class="navbar">
  <div class="logo">🔵 Logo</div>
  <div>
    <a href={{ route('home') }}>Home</a>
    <a href={{ route('wallet') }}>Wallet</a>
    <a href={{ route('transfer') }}>Transfer</a>
    <a href={{ route('trashpedia') }}>Trashpedia</a>
    <a href={{ route('recycle') }} class="cta">Recycle</a>
    <a href={{ route('profile') }}>Profile</a>
  </div>
</div>

<!-- Section Title -->
<div class="wallet-section">
  <h1>Recycle</h1>

  <!-- Main Container -->
  <div class="wallet-container">

    <!-- Left Trash Picker -->
    <div class="trash-picker">
      <h3>Pick your trash</h3>

      <div class="trash-item">
        <img src="botolplastik.png" alt="Botol Plastik">
        <div>Botol Plastik</div>
        <button class="plus">+</button>
        <button class="minus">−</button>
      </div>

      <div class="trash-item">
        <img src="minyakjelantah.png" alt="Minyak Jelatah">
        <div>Minyak Jelatah</div>
        <button class="plus">+</button>
        <button class="minus">−</button>
      </div>

      <div class="trash-item">
        <img src="botolkaca.png" alt="Botol Kaca">
        <div>Botol Kaca</div>
        <button class="plus">+</button>
        <button class="minus">−</button>
      </div>
    </div>

    <!-- Right Items List -->
    <div class="item-list">
  <h3>Items</h3>
  <div id="item-list-display" class="scrollable-list"></div>

  <div class="action-buttons">
    <button>Next</button>
    <div>
      <button onclick="Object.keys(items).forEach(k => delete items[k]); renderItems();">Empty</button>
      <button>History</button>
    </div>
  </div>
</div>

  </div>
</div>

<!-- Optional: Riwayat Dummy -->
<div class="history-section">
  <h2>History</h2>
  <div class="history-dummy">
    <p>Botol Plastik x2</p>
    <p>Minyak Jelatah x1</p>
  </div>
</div>

</body>
</html>