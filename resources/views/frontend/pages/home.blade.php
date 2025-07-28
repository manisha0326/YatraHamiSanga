@section('title','Home')
@extends('frontend.layouts.app')

@section('content')
      <section style="margin-top:94px; ">
        <img src="image/home.svg" alt="Camping Image" class="hero-image" />
        <div class="text-box">
            <h1>Welcome to यात्रा हामीसँग!</h1>
            <p>
                We're here to make your travel easy, safe, and reliable.</p>
            <p>यात्रा हामीसँग is a digital vehicle rental service designed to help you book Scooter, Bike, Car, Scropio
                and Hiace right from your phone or computer.</p>
            <p>More hassles just book in a few clicks and reach your destination with comfort and confidence.</p>
            <p>Let your journey begin with us!</p>
            </p>
        </div>
        <div class="containers">
            <div class="image-container">
                <img src="./image/about1.avif" alt="First">
                <img src="./image/about2.avif" alt="Second">
            </div>
            <div class="sub-container">
                <p
                    style="font-size: 16px; margin-top: 100px; letter-spacing: 1px; line-height: 30px;color: #262338 ;text-align: justify; font-family: poppins;margin-right: 110px;">
                    At Yatra Hami Sanga, we stand out for our commitment to convenience, affordability, and reliability.
                    Our easy-to-use platform allows you to book a wide variety of vehicles, from compact cars to luxury
                    SUVs, anytime, anywhere.
                    We dedicated 24/7 customer support is always ready to assist, making sure your rental experience is
                    seamless from start to finish.
                </p>
                <button class="see-more-btn" style="background-color:#a8baff00;"><a href="{{ route('aboutus') }}" style="text-decoration: none;background-color:#a8baff00;">See More
                        &rarr;</a></button>
            </div>
        </div>

        <div class="conatiner2">
            <div class="container" style="display: flex; align-items: center;justify-content: space-between;">
                <h2 style="font-family: roboto; font-weight: bold; color:#262338 ;">Rental <span
                        style="color:#262586  ;">Vehicles</span></h2>
                <button class="see-more-btn"><a href="{{ route('rental.index') }} "
                        style="text-decoration: none;background-color: #f6f6f6;">See More &rarr;</a></button>
            </div>
            <div class="container text-center" style="margin-top:0px;">
                <div class="row justify-content-between mt-5">

                    @foreach($categories as $category)
                    @php
                        $brand = $category->brands->first();
                    @endphp
                    @if($brand)
                    <div class="col-md mx-2 mb-4">
                        <div class="card h-100" style="max-width:225px;">
                            <img src="{{ asset('storage/' . $brand->image) }}" 
                                class="card-img-top" 
                                alt="{{ $brand->brand_name }}" 
                                style="height: 160px; object-fit: contain;width:100%;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->category_name }}</h5>
                                <p class="card-text">
                    
                                    {{ $category->description }}
                                    
                                </p>
                                <a href="{{ route('rental.index', $category->slug) }}" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    {{-- <div class="col-md mx-2 mb-4">
                        <div class="card h-100">
                            <img src="image/Bike/bike1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bike</h5>
                                <p class="card-text">It's design and innovation made it a global icon of stylish.</p>
                                <a href="#" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md mx-2 mb-4">
                        <div class="card h-100">
                            <img src="image/Scooter/scooter1.png" class="card-img-top" alt="..."
                                style="height: 170px;">
                            <div class="card-body">
                                <h5 class="card-title">Scooter</h5>
                                <p class="card-text">It's design and innovation made it a global icon of stylish.</p>
                                <a href="#" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mx-2 mb-4">
                        <div class="card h-100">
                            <img src="image/Car/car2.jpg" class="card-img-top" alt="..." style="height: 160px;">
                            <div class="card-body">
                                <h5 class="card-title">Car</h5>
                                <p class="card-text">It is the confortable and stylish car with manual and automatic
                                    gearboxes.</p>
                                <a href="#" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mx-2 mb-4">
                        <div class="card h-100">
                            <img src="image/Scorpio/scripo1.png" class="card-img-top" alt="..."
                                style="height: 160px;">
                            <div class="card-body">
                                <h5 class="card-title">Scorpio</h5>
                                <p class="card-text">It's is a tough, stylish SUV with strong performance and modern
                                    features.</p>
                                <a href="#" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mx-2 mb-4">
                        <div class="card h-100">
                            <img src="image/Hiace/haice1.png" class="card-img-top" alt="..."
                                style="height: 160px;">
                            <div class="card-body">
                                <h5 class="card-title">Hiace</h5>
                                <p class="card-text">This vehicle is known for its performance, realiability and
                                    versatility.</p>
                                <a href="#" class="btn btn-primary">Click Here</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div>
            <div style="background-color: #02005f; height: 380px; margin-top: 50px; display: flex; gap: 100px;">
                <div>
                    <p
                        style="font-family: poppins; color: #ffff; margin-left: 130px; font-size: 32px; font-weight: bold; margin-top: 110px;">
                        "Book your ride today and start your journey with ease and comfort!"</p>
                    <button class="book-now-btn">
                        <a href="{{ route('payment') }} " style="text-decoration: none; color: white;">Book Now
                            &rarr;</a></button>
                </div>

                <div class="img">
                    <img src="image/girl.svg" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection