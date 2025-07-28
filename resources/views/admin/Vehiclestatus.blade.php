@extends('admin.layouts.app')

@section('adminContent')
    <div>
        <h3 style="color:#262586;font-weight:800; margin-top:30px;">Bike</h3>
        <div class="card mb-3" style="display: flex;gap:20px;">

            <div class="row g-0">
''
                <div class="col-md-4">
                    <img src="{{ asset('image/Bike/bike1.png') }}" class="img-fluid rounded-start" alt="Card Image"
                        style="height: 100%; object-fit: cover;">
                </div>


                <div class="col-md-8">
                    <div style="margin-top: 80px;margin-left: 80px;">
                        <h1 style="font-weight: bolder">TVS Apache RTR 160 4V</h1>
                        <p style="margin-top: 30px;font-size: 24px;">It's design and innovation made it a global icon of
                            stylish.</p>
                        <p class="card-text">
                            <span class="badge bg-success"
                                style="margin-left: 600px;margin-top: 40px;font-size: 20px;padding: 12px 24px;">Avaliable</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:50px;">
        <h3 style="color:#262586;font-weight:800;">Scooter</h3>
        <div class="card mb-3" style="display: flex;gap:20px;height:270px;">

            <div class="row g-0">

                <div class="col-md-4">
                    <img src="{{ asset('image/Scooter/scooter1.png') }}" class="img-fluid rounded-start" alt="Card Image"
                        style="height: 100%; object-fit: cover;">
                </div>


                <div class="col-md-8">
                    <div style="margin-top: 40px;margin-left: 80px;">
                        <h1 style="font-weight: bolder">Vespa Scooter</h1>
                        <p style="margin-top: 30px;font-size: 24px;">It's design and innovation made it a global icon of stylish.</p>
                        <p class="card-text">
                            <span class="badge bg-success"
                                style="margin-left: 600px;margin-top: 30px;font-size: 20px;padding: 12px 24px;">Avaliable</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:50px;">
        <h3 style="color:#262586;font-weight:800;">Car</h3>
        <div class="card mb-3" style="display: flex;gap:20px;">

            <div class="row g-0">

                <div class="col-md-4">
                    <img src="{{ asset('image/Car/car1.png') }}" class="img-fluid rounded-start" alt="Card Image"
                        style="height: 100%; object-fit: cover;">
                </div>


                <div class="col-md-8">
                    <div style="margin-top: 40px;margin-left: 80px;">
                        <h1 style="font-weight: bolder">Toyota Glanza</h1>
                        <p style="margin-top: 30px;font-size: 24px;">It is the confortable and stylish car with manual and automatic gearboxes.</p>
                        <p class="card-text">
                            <span class="badge bg-success"
                                style="margin-left: 600px;margin-top: 40px;font-size: 20px;padding: 12px 24px;">Avaliable</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:50px;">
        <h3 style="color:#262586;font-weight:800;">Scorpio</h3>
        <div class="card mb-3" style="display: flex;gap:20px;">

            <div class="row g-0">

                <div class="col-md-4">
                    <img src="{{ asset('image/Scorpio/Scripo1.png') }}" class="img-fluid rounded-start" alt="Card Image"
                        style="height: 100%; object-fit: cover;">
                </div>


                <div class="col-md-8">
                    <div style="margin-top: 40px;margin-left: 80px;">
                        <h1 style="font-weight: bolder">Mahindra Scorpio</h1>
                        <p style="margin-top: 30px;font-size: 24px;">It's is a tough, stylish SUV with strong performance and modern features.</p>
                        <p class="card-text">
                            <span class="badge bg-success"
                                style="margin-left: 600px;margin-top: 40px;font-size: 20px;padding: 12px 24px;">Avaliable</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:50px;">
        <h3 style="color:#262586;font-weight:800;">Hiace</h3>
        <div class="card mb-3" style="display: flex;gap:20px;height:280px;">

            <div class="row g-0">

                <div class="col-md-4">
                    <img src="{{ asset('image/Hiace/haice1.png') }}" class="img-fluid rounded-start" alt="Card Image"
                        style="height: 100%; object-fit: cover;">
                </div>


                <div class="col-md-8">
                    <div style="margin-top: 40px;margin-left: 80px;">
                        <h1 style="font-weight: bolder">Toyota Hiace Minibus</h1>
                        <p style="margin-top: 30px;font-size: 24px;">This vehicle is known for its performance, realiability and versatility.</p>
                        <p class="card-text">
                            <span class="badge bg-success"
                                style="margin-left: 600px;margin-top: 40px;font-size: 20px;padding: 12px 24px;">Avaliable</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
