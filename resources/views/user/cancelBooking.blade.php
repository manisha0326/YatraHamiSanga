@extends('user.layouts.app')

@section('userContent')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .containerrr {
            display: none;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            max-width: 500px;
        }

        #refundDiv {
            display: none;
            margin-top: 15px;
            padding: 15px;
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 8px;
            border: 1px solid #d0e9c6;
        }

        .btn-cancel {
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin: 5px;
        }

        .btn-cancel:hover {
            background-color: #c82333;
        }

        .btn-confirm {
            padding: 10px 20px;
            background-color: #198754;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin: 5px;
        }

        .btn-confirm:hover {
            background-color: #157347;
        }
    </style>

    <!-- Cancel booking cards -->
    {{-- @foreach ($bookings as $booking) --}}
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $booking->brand->image) }}" class="img-fluid rounded-start" alt="Vehicle Image"
                    style="height: 100%; object-fit: cover;">
            </div>
            <div class="col-md-8">
                <div class="p-4" style="margin-top: 30px; margin-left: 60px;">
                    <h1 class="fw-bold">{{ $booking->brand->brand_name ?? 'Unknown Brand' }}</h1>
                    {{-- <p class="mt-3 fs-5">{{ $booking->brand->brand_name ?? 'Unknown Brand' }}</p> --}}
                    <p style="margin-top: 20px; font-size: 20px;">It's design and innovation made it a global icon of
                        stylish.</p>
                    <p style="margin-top: 20px; font-size: 18px;">
                        Cancellations must be made at least 6 hours before the scheduled pickup for a full refund, with 10%
                        deducted within 6 hours, and 25% deducted within 1 hour.
                    </p>
                    <button class="btn-cancel" onclick="showPopOut({{ $booking->id }})"
                        style="font-size: 20px; padding: 12px 24px;margin-left:600px;margin-top:56px;">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}

    <!-- Confirmation Popup -->
    <div class="containerrr" id="cancelContainer">
        <h3>Are you sure to cancel your booking?</h3>
        <div style="display:flex; gap:10px; justify-content: center;">
            <form id="cancelForm" method="POST">
                @csrf
                <button class="btn-confirm" type="submit" onclick="showRefundDiv()">Yes</button>
            </form>
            <button class="btn-cancel" onclick="hidePopOut()">No</button>
        </div>


        <div id="refundDiv">
            <strong>Refund Initiated:</strong> Your refund will be processed within 3–5 business days.
        </div>
    </div>

    <script>
        function showPopOut(bookingId) {
            const form = document.getElementById('cancelForm');
            form.action = "/user/cancelBooking/" + bookingId; // correct route
            document.getElementById('cancelContainer').style.display = 'block';
        }

        function hidePopOut() {
            document.getElementById('cancelContainer').style.display = 'none';
        }

        function showRefundDiv() {
            document.getElementById('refundDiv').style.display = 'block';
        }
    </script>
@endsection
