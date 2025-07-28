<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Payment Failed</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .popup-failed {
      width: 90%;
      max-width: 40px;
      padding: 30px 20px;
      background-color: rgba(220, 53, 69, 0.1); /* transparent ko lagi */
      border: 3px solid #dc3545; 
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .popup-failed h1 {
      color: #dc3545;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .popup-failed p {
      font-size: 18px;
      margin: 8px 0;
      color: #333;
    }

    .popup-failed .details {
      margin-top: 20px;
      text-align: left;
      padding-left: 30px;
    }

    .popup-failed .details p {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="popup-failed">
    <h1>PAYMENT FAILED</h1>
    <p>Unfortunately, your payment could not be processed...</p>
    <div class="details">
      <p><strong>Booking ID:</strong> 1</p>
      <p><strong>Amount:</strong> 1234</p>
    </div>
  </div>
</body>
</html>
