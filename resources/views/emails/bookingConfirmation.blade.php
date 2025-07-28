<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h2>Hello {{ $bookingData['fullname'] }},</h2>

    <p>Thank you for booking with <strong>Yatra HamiSanga</strong>!</p>

    <p>Here are your booking details:</p>
    <ul>
        <li><strong>Email:</strong> {{ $bookingData['email'] }}</li>
        <li><strong>Phone:</strong> {{ $bookingData['phone'] }}</li>
        <li><strong>Vehicle Model:</strong> {{ $bookingData['vehicleModel'] }}</li>
        <li><strong>Booking Type:</strong> {{ $bookingData['bookingType'] }}</li>
        @if($bookingData['bookingType'] === 'perDay')
            <li><strong>Pickup Date:</strong> {{ $bookingData['pickupDate'] }}</li>
            <li><strong>Return Date:</strong> {{ $bookingData['returnDate'] }}</li>
        @else
            <li><strong>Hours Booked:</strong> {{ $bookingData['hour'] }}</li>
        @endif
        <li><strong>Amount:</strong> Rs. {{ $bookingData['amount'] }}</li>
    </ul>

    
    <p>Thank you for choosing our service!</p>
    <p>If you have any questions, feel free to contact us.</p>

    <p>Safe travels!</p>
    <p><strong>Yatra HamiSanga</strong></p>
</body>
</html>

