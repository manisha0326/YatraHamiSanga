@forelse($brands as $brand)
    <div class="col-md-6 mb-4">
        <a href="{{ route('rental.description', $brand->slug) }}" class="text-decoration-none text-dark">
            <div class="vehicle-card">
                <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->brand_name }}"
                    style="object-fit: contain;" class="img-fluid" />
                <div class="content mt-2">
                    <h5>
                        {{ $brand->brand_name }}
                        <span class="badge bg-light text-dark">{{ $brand->category->category_name ?? 'Unknown' }}</span>
                    </h5>
                    <div class="text-success">✔ Free Cancellation</div>
                    <div class="text-success">✔ Instant Booking</div>
                    <div class="text-success">✔ Insurance</div>
                    <div class="price mt-2">
                        NRS {{ $brand->price }} <span class="text-muted fs-6">/ day</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
@empty
    <div class="col-12 text-center">
        <h5>No vehicles available.</h5>
    </div>
@endforelse
