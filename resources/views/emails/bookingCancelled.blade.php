<!DOCTYPE html>
<html>
<head>
    <title>Booking Cancelled</title>
</head>
<body>
    <h2>Hello {{ $booking->fullname }},</h2>

    <p>Your booking for <strong>{{ $booking->brand->brand_name ?? 'a vehicle' }}</strong> has been cancelled.</p>
    <p>Booking Period: {{ $booking->pickupDate }} to {{ $booking->returnDate }}</p>
    <p>Amount: Rs. {{ $booking->amount }}</p>

    <p>Your refund will be processed within 3–5 business days.</p>
    <br>
    <p>Thanks,<br>Vehicle Rental Team</p>
</body>
</html>
