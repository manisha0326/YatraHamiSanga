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
                        <h2>Brand</h2>
                        <a href="{{ route('admin.brand.create') }}" class="btn "
                            style="background-color: #262586; color: white; width: 140px; height: 40px;">
                            <i class="bi bi-plus"></i> Add New
                        </a>
                    </div>

                    <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 5%;">S.N</th>
                                <th style="width: 15%;">Category</th>
                                <th style="width: 20%;">Brand</th>
                                <th style="width: 20%;">Image</th>
                                <th style="width: 15%;">Price</th>
                                <th style="width: 15%;">Status</th>
                                <th style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $index => $brand)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $brand->category->category_name }}</td>
                                    <td>{{ $brand->brand_name }} </td>

                                    <td>
                                        @if ($brand->image)
                                            <img src="{{ asset('storage/' . $brand->image) }}" alt="Brand Image"
                                                width="60">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $brand->price }} </td>
                                    <td>{{ $brand->status }} </td>
                                    <td>
                                        <a href="{{ route('admin.brand.edit', $brand->id) }}"
                                            class="btn btn-sm d-inline-flex justify-content-center align-items-center"
                                            style="background-color: #262586; color: white; width: 24px; height: 24px; padding: 0;">
                                            <i class="bi bi-pencil"></i>
                                        </a>


                                        <a href="{{ route('admin.brand.delete', $brand->id) }}"
                                            class="btn btn-danger btn-sm d-inline-flex justify-content-center align-items-center"
                                            style="width: 24px; height: 24px; padding: 0;">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endsection
