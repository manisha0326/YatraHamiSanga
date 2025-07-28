@extends('user.layouts.app')


@section('userContent')

    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4">
                  @if (Session::has('success'))
              <div id="alert-message" class="alert alert-success">{{ Session::get('success') }} </div>
            @endif
            @if (Session::has('error'))
              <div id="alert-message" class="alert alert-danger">{{ Session::get('error') }} </div>
            @endif
                    <table class="table table-bordered">
                        <thead>
                          <tr style="text-align: center;">
                            <th scope="col">S.N</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Booked Date</th>
                            <th scope="col">Return Date</th>
                            <th scope="col">Hour</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                             @php $index = 1; @endphp
                            @foreach ($bookings as $booking)
                               
                                @php
                                    $now = \Carbon\Carbon::now();
                                    // If perHour, use created_at as both pickup & return
                                    if ($booking->bookingType === 'perHour') {
                                        $pickup = \Carbon\Carbon::parse($booking->created_at);
                                        $return = \Carbon\Carbon::parse($booking->created_at);
                                    } else {
                                        $pickup = \Carbon\Carbon::parse($booking->pickupDate);
                                        $return = \Carbon\Carbon::parse($booking->returnDate);
                                    }
                                @endphp
                                
                                @if ($booking->status != "cancelled")
                                <tr style="text-align: center;">
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $booking->brand->brand_name ?? 'N/A' }}</td>
                                    <td>{{ $booking->amount }}</td>
                                    <td>{{ $pickup->format('m-d-Y') }}</td>
                                    <td>{{ $return->format('m-d-Y') }}</td>
                                    <td>
                                        @if($booking->bookingType === 'perHour')
                                            {{ $booking->hour }} hour{{ $booking->hour > 1 ? 's' : '' }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        {{-- @if ($now->between($pickup, $return))
                                            <span class="btn btn-warning">Pending</span>
                                        @elseif ($now->greaterThan($return))
                                            <span class="btn btn-success">Booked</span>
                                        @elseif ($now->lessThan($pickup))
                                            <a href="{{ route('booking.cancel.page', $booking->id) }}" >
                                                <button class="btn btn-danger">Cancel Booking</button>
                                            </a>
                                        @endif --}}
                                        @if ($now->greaterThan($pickup))
                                            <span class="btn btn-success">Booked</span>
                                        @else
                                            <a href="{{ route('booking.cancel.page', $booking->id) }}">
                                                <button class="btn btn-danger">Cancel Booking</button>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>

                      </table>
                  </div>
            </div>
        </div>
    </div>
@endsection