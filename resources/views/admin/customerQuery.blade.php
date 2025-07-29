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
                        <h2>Customer Query</h2>
                    </div>

                    <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 5%;">S.N</th>
                                <th style="width: 15%;">Customer Name</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 15%;">Contact Number</th>
                                <th style="width: 20%;">Message</th>
                                <th style="width: 15%;">Submitted At</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $contact->fullname }}</td>
                                    <td>{{ $contact->email }} </td>
                                    <td>{{ $contact->contactNumber }} </td>
                                    <td>{{ $contact->message }} </td>
                                    <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endsection
