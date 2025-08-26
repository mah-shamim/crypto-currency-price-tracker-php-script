<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Stay updated with live cryptocurrency prices, market caps, and trading volumes using our Cryptocurrency Price Tracker.">
  <meta name="keywords" content="cryptocurrency, price tracker, crypto prices, market cap, crypto updates, live cryptocurrency">
  <meta name="author" content="HITS Agency">
  <meta property="og:title" content="">
  <meta property="og:description" content="Track live cryptocurrency prices, changes, and market data efficiently.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://your-website.com">
  <meta property="og:image" content="https://your-website.com/preview-image.jpg">
 
  
  <!-- Style CSS -->
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgb(120, 120, 120);
    }

    .header {
        background-color: #fff(50, 50, 50);
        color: rgb(255, 255, 255);
        text-align: center;
        width: 100%;
        padding: 20px 0;
    }

    .header h1 {
        font-size: 0px;
    }

    .crypto-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgb(50, 50, 50);
        border-radius: 10px;
        color: rgb(255, 255, 255);
        width: 90%;
        height: 820px;
        overflow-y: auto;
        margin-top: 20px;
    }

    .heading, .crypto {
        display: flex;
        width: 90%;
        padding: 15px;
        border-radius: 10px;
    }

    .heading h4 {
        width: 200px;
        text-align: center;
    }

    .crypto div {
        width: 200px;
        text-align: center;
    }

    .crypto-icon img {
        width: 25px;
    }

    footer {
        background-color: rgb(50, 50, 50);
        color: rgb(255, 255, 255);
        text-align: center;
        padding: 15px 0;
        width: 100%;
    }

    footer p {
        font-size: 14px;
        margin: 0;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Cryptocurrency Price Tracker</h1>
  </header>
  
  <main>
    <section class="crypto-container" aria-live="polite">
      <div class="heading">
        <h4>Coin</h4>
        <h4>Price</h4>
        <h4>Change</h4>
        <h4>24h Volume</h4>
        <h4>Market Cap</h4>
        <h4>Action</h4>
      </div>
      <div class="crypto-list"></div>
    </section>
  </main>


  
  <!-- Script JS -->
  <script>
 document.addEventListener("DOMContentLoaded", function () {
    const cryptoContainer = document.querySelector(".crypto-container");
    const apiKey = "<?php echo $apiKey; ?>";
    const coinsUUID = [
        "Qwsogvtv82FCd",
        "razxDUgYGNAdQ",
        "HIVsRcGKkPFtW",
        "KNS7lFwBX",
        "WcwrkfNI4FUAe",
        "-l8Mn2pVlRs-p",
        "zNZHO_Sjf",
        "aKzUVe4Hh_CON",
        "qzawljRxB5bYu",
        "dvUj0CzDZ",
        "PDKcptVnzJTmN-sV8",
        "a91GCGd_u96cF",
        "25W7FG7om",
        "qUhEFk1I61atv",
        "CiixT63n3",
        "VLqpJwogdhHNb",
        "uW2tk-ILY0ii",
        "Mtfb0obXVh59u",
        "x4WXHge-vvFY",
        "xz24e0BjL",
        "_H5FVG9iW",
        "D7B1x_ks7WhV5",
        "ZlZpzOJo43mIo",
        "Z96jIvLU7",
        "08CsQa-Ov",
        "Knsels4_Ol-Ny",
        "MoTuySvg7",
        "ncYFcP709",
    ];

    coinsUUID.forEach((uuid) => {
        fetch(`https://api.coinranking.com/v2/coin/${uuid}`, {
            headers: {
                'x-access-token': apiKey,
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'fail') {
                console.error(`Error: ${data.message}`);
                return;
            }

            
            const cryptoDiv = document.createElement("div");
            cryptoDiv.className = "crypto";
            

            cryptoDiv.innerHTML = `
                <div class="crypto-icon">
                    <img src="${data.data.coin.iconUrl}" />
                    <span>${data.data.coin.name}</span>
                    <small>${data.data.coin.symbol}</small>
                </div>


                <div class="crypto-price">
                    <span>$${parseFloat(data.data.coin.price).toFixed(2)}</span>
                </div>

                <div class="change">
                    <span>${data.data.coin.change}</span>
                </div>

                <div class="volume">
                    <span>$${data.data.coin['24hVolume']}</span>
                </div>

                <div class="market-cap">
                    <span>$${data.data.coin.marketCap}</span>
                </div>

                <div class="view-more">
                    <a href="${data.data.coin.coinrankingUrl}" target="_blank" />View More</a>
                </div>
            `;
            cryptoContainer.appendChild(cryptoDiv);
        })
        .catch(error => console.error('Fetch error:', error));
    });
});</script>
</body>
</html>
