@extends('user.layouts.app')


@section('userContent')
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4">
                  @if (session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                  @endif

                  @if ($cancelledBookings->isEmpty())
                      <p>No cancelled bookings found.</p>
                  @else
                    <table class="table table-bordered">
                        <thead>
                          <tr style="text-align: center;">
                            <th scope="col">S.N</th>
                            <th scope="col">Vehicle Name</th>
                            {{-- <th scope="col">Brand</th> --}}
                            <th scope="col">Booked Date</th>
                            <th scope="col">Return Date</th>
                            <th scope="col">status</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($cancelledBookings as $index=> $booking)
                                <tr style="text-align: center;">
                                    <td>{{ $index + 1 }}</td>
                                    {{-- <td>{{ $booking->vehicleType }}</td> --}}
                                    <td>{{ $booking->brand->brand_name ?? 'N/A' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->pickupDate)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->returnDate)->format('d-m-Y') }}</td>
                                    <td>cancelled</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      @endif
                  </div>
            </div>
        </div>
    </div>
@endsection