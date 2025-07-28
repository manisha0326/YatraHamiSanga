@extends('user.layouts.app')

@section('userContent')
<div class="containerrrr">
    <div class="row">
        <div class="col-lg-9" style="width:98%">
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align: center;">
                            <th>S.N</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($brands as $index => $brand)
                            <tr style="text-align: center;">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $brand->category->category_name ?? 'N/A' }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>
                                    @if($brand->image)
                                        <img src="{{ asset('storage/' . $brand->image) }}" alt="Brand Image" width="60">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $brand->price }}</td>
                                <td>
                                    <span class="badge {{ $brand->status == 'booked' ? 'bg-danger' : 'bg-success' }}">
                                        {{ ucfirst($brand->status) }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No available vehicles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
