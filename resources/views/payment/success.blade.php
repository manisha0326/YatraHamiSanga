<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
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

        .popup {
            width: 90%;
            max-width: 460px;
            height: 250px;
            padding: 30px 20px;
            background-color: rgba(34, 165, 63, 0.1); /*transparent ko lagi garako*/
            border: 3px solid #22A53F;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .popup h1 {
            color: #22A53F;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .popup p {
            font-size: 18px;
            margin: 8px 0;
            color: #333;
        }

        .popup .details {
            margin-top: 20px;
            text-align: left;
            padding-left: 30px;
        }

        .popup .details p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="popup">
        <h1>PAYMENT SUCCESSFUL</h1>
        <p>Thank you! We've received your payment...</p>
        <div class="details">
             
            <p><strong>Booking ID:</strong> {{ $data['purchase_order_id'] ?? 'N/A' }}</p>
            <p><strong>Amount:</strong> Rs. {{ $bookingData['amount'] }}</p>
            <p><strong>User Name:</strong> {{ $bookingData['user']['fullname'] ?? 'User' }}</p>
            
            {{-- <div class="container" style="margin-top: 98px">
                <h2>✅ Payment Successful</h2>
                <p>Thank you for your payment, {{ $data['user']['name'] ?? 'User' }}.</p>
                <p><strong>Order ID:</strong> {{ $data['purchase_order_id'] }}</p>
                <p><strong>Amount:</strong> Rs. {{ $data['amount'] / 100 }}</p>
                <p>Thank you for your payment, ABCDE.</p>
                <p><strong>Order ID:</strong> 11</p>
                <p><strong>Amount:</strong> Rs. 250</p>
            </div> --}}


        </div>
    </div>
</body>
</html>
