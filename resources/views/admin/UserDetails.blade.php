@extends('admin.layouts.app')

@section('adminContent')
    <div class="container">
        @if (session('success'))
            <div id="alert-message" class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-9" style="width:98%">
                <div class="table-responsive mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>User</h2>

                    </div>

                    <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 5%;">S.N</th>
                                <th style="width: 15%;">Name</th>
                                <th style="width: 25%;">Email</th>
                                <th style="width: 15%;">Address</th>
                                <th style="width: 10%;">Gender</th>
                                <th style="width: 15%;">Contact Number</th>

                            </tr>
                        </thead>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address ?? 'N/A' }}</td>
                                <td>{{ $user->gender ?? 'N/A' }}</td>
                                <td>{{ $user->contact ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    @endsection
