@extends('user.layouts.app')

@section('userContent')
<div class="popup" 
        style=" width: 90%;
         max-width: 460px; 
         height: 250px;
         padding: 30px 20px;
         background-color: rgba(34, 165, 63, 0.1); 
         border: 3px solid #22A53F;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
            margin-left: 345px;
            margin-top:100px;">
        <h1 style="color: #22A53F;font-size: 28px; margin-bottom: 10px;">PAYMENT SUCCESSFUL</h1>
        <p style="font-size: 18px; margin: 8px 0; color: #333;">Thank you! We've received your payment...</p>
        <div class="details" style="margin-top: 20px;text-align: left; padding-left: 30px;" >
             
            <p style="font-size: 16px;"><strong>Booking ID:</strong> {{ $data['purchase_order_id'] ?? 'N/A' }}</p>
            <p style="font-size: 16px;"><strong>Amount:</strong> Rs. {{ $bookingData['amount'] }}</p>
            <p style="font-size: 16px;"><strong>User Name:</strong> {{ $bookingData['user']['fullname'] ?? 'User' }}</p>
            
        </div>
    </div>

@endsection


{{-- <!DOCTYPE html>
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
    <div class="popup" 
        style=" width: 90%;
         max-width: 460px; 
         height: 250px;
         padding: 30px 20px;
         background-color: rgba(34, 165, 63, 0.1); 
         border: 3px solid #22A53F;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;">
        <h1 style="color: #22A53F;font-size: 28px; margin-bottom: 10px;">PAYMENT SUCCESSFUL</h1>
        <p style="font-size: 18px; margin: 8px 0; color: #333;">Thank you! We've received your payment...</p>
        <div class="details" style="margin-top: 20px;text-align: left; padding-left: 30px;" >
             
            <p style="font-size: 16px;"><strong>Booking ID:</strong> {{ $data['purchase_order_id'] ?? 'N/A' }}</p>
            <p style="font-size: 16px;"><strong>Amount:</strong> Rs. {{ $bookingData['amount'] }}</p>
            <p style="font-size: 16px;"><strong>User Name:</strong> {{ $bookingData['user']['fullname'] ?? 'User' }}</p>
            
        </div>
    </div>
</body>
</html> --}}
