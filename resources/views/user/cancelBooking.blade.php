@extends('user.layouts.app')

@section('userContent')
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f5f5f5;
        }

        
        .containerrr {
            display: none;     /* initial popout */
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

    <!-- cancel booking-->
    <div>
        <div class="card mb-3" style="display: flex; gap: 20px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('image/Bike/bike1.png') }}" class="img-fluid rounded-start" alt="Card Image"
                         style="height: 100%; object-fit: cover;">
                </div>

                <div class="col-md-8">
                    <div style="margin-top: 45px; margin-left: 60px;">
                        <h1 style="font-weight: bolder">TVS Apache RTR 160 4V</h1>
                        <p style="margin-top: 30px; font-size: 22px;">It's design and innovation made it a global icon of stylish.</p>
                        <p class="card-text">
                            <button class="btn-cancel"
                                    onclick="showPopOut()"
                                    style="font-size: 20px; padding: 12px 24px;margin-left:600px;margin-top:56px;">
                                Cancel
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-out yes/no -->
    <div class="containerrr" id="cancelContainer">
        <h3>Are you sure to cancel your booking?</h3>
        <button class="btn-confirm" onclick="showRefundDiv()">Yes</button>
        <button class="btn-cancel" onclick="hidePopOut()">No</button>

        <div id="refundDiv">
            <strong>Refund Initiated:</strong> Your refund will be processed within 3–5 business days.
        </div>
    </div>

    <script>
        function showPopOut() {
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
