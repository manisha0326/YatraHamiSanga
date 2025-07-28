@extends('user.layouts.app')


@section('userContent')
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                          <tr style="text-align: center;">
                            <th scope="col">S.N</th>
                            <th scope="col">Vehicle Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Booked Date</th>
                            <th scope="col">Return Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="text-align: center;">
                            <td>1</td>
                            <td>Scooter</td>
                            <td>Vespa</td>
                            <td>2,000</td>
                            <td>06-12-2025</td>
                            <td>06-13-2025</td>
                            <td><a href="#"><Button class="btn btn-success">Returned</Button></td></a>
                          </tr>

                          <tr style="text-align: center;">
                            <td>2</td>
                            <td>Scooter</td>
                            <td>TVS</td>
                            <td>2,000</td>
                            <td>08-12-2025</td>
                            <td>08-13-2025</td>
                            <td><a href="{{ route('user.cancelBooking') }}"><Button class="btn btn-danger">Cancel Booking</Button></td></a>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
    </div>
@endsection