@section('title', 'Rental/' . ($selectedCategorySlug ?? 'All'))

@extends('frontend.layouts.app')

@section('content')

<section>
    <div class="container-fluid p-4">
        <h2 class="mb-4"
            style="margin-left: 60px; margin-top: 98px; margin-bottom: 20px; color: #262338;">
            Find Your Perfect
            <span style="color: #262586; font-weight: bold">Ride </span> & Enjoy
            Unbeatable
            <span style="color: #262586; font-weight: bold">Rentals</span>
        </h2>
        <div class="row" style="margin-top: 50px">
            <!-- Filters -->
            <div class="col-md-3">
                <div class="filters" style="position: sticky; top: 150px;">
                    <div class="mb-3">
                        <h3 class="filter-label">Vehicle Type</h3>
                        <div>
                            <input type="checkbox" name="option" value="all" id="all"
                                onclick="checkOnlyOne(this); fetchVehicles('all');"
                                {{ !isset($selectedCategorySlug) || $selectedCategorySlug === 'all' ? 'checked' : '' }} />
                            <label for="all" style="cursor: pointer;">All</label>
                        </div>

                        @foreach ($categories as $category)
                            <div>
                                <input type="checkbox" name="option" value="{{ $category->slug }}"
                                    id="{{ strtolower($category->category_name) }}"
                                    onclick="checkOnlyOne(this); fetchVehicles(this.value);"
                                    {{ $selectedCategorySlug == $category->slug ? 'checked' : '' }} />
                                <label for="{{ strtolower($category->category_name) }}" style="cursor: pointer;">
                                    {{ $category->category_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Vehicle List -->
            <div class="col-md-9">
                <div class="row" id="vehicle-list">
                    @include('frontend.Rental.partials.vehicle_cards', ['brands' => $brands])
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function checkOnlyOne(checkbox) {
        const checkboxes = document.getElementsByName("option");
        checkboxes.forEach((cb) => {
            if (cb !== checkbox) cb.checked = false;
        });
    }

    function fetchVehicles(slug) {
        const baseUrl = "{{ url('/rental') }}";
        const newUrl = slug === 'all' ? baseUrl : `${baseUrl}/${slug}`;

        // Update the browser URL (so refresh/back button work correctly)
        window.history.pushState({ path: newUrl }, '', newUrl);

        // Make AJAX request
        $.ajax({
            url: "{{ route('rental.ajax') }}",
            method: 'GET',
            data: { slug: slug },
            beforeSend: function() {
                $('#vehicle-list').html('<div class="col-12 text-center"><p>Loading...</p></div>');
            },
            success: function(response) {
                $('#vehicle-list').html(response.html);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
                $('#vehicle-list').html(
                    '<div class="col-12 text-center text-danger"><p>Something went wrong. Please try again.</p></div>'
                );
            }
        });
    }

    // Handle back/forward button navigation (AJAX + history)
    window.addEventListener('popstate', function(e) {
        location.reload(); // Reload full page if navigating back
    });
</script>
@endsection
