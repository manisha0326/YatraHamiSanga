@section('title', 'About Us')

@extends('frontend.layouts.app')

@section('content')

    <section style="margin-top:94px; ">
        <img src="image/group.svg" alt="" style="height: 400px;width: 100%;object-fit: cover;display: block;"
            class="image">
        <h1 style="color: white; font-family: roboto;position: absolute; top: 400px;left: 100px;">About Us</h1>
        <div class="containers" style="height: 212px;">
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 60px; letter-spacing: 1px; line-height: 30px;color: #262338 ; margin: 50px 85px; text-align: justify;">
                At Yatra Hami Sanga, we stand out for our commitment to convenience, affordability, and reliability. Our
                easy-to-use platform allows you to book a wide variety of vehicles, from compact cars to luxury SUVs,
                anytime, anywhere. We pride ourselves on offering transparent, ensuring you get the best value for your
                money. Each of our vehicles undergoes regular maintenance and safety checks, so you can drive with peace of
                mind. Plus, our dedicated 24/7 customer support is always ready to assist, making sure your rental
                experience is seamless from start to finish.
            </p>
        </div>

        <div>
            <h3 style="text-align: center; margin-top: 40px; color:  #262586; font-family: Roboto; margin-bottom: 50px;">Why
                Chossing Us?</h3>
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 10px; letter-spacing: 1px; line-height: 30px;color: #262338 ;margin-left: 90px;">
                🚗 Wide Range of Vehicles = Covering everything from budget friendly cars </p>
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 10px; letter-spacing: 1px; line-height: 30px;color: #262338 ;margin-left: 90px;">
                💰 Affordable = No hidden charges, pay only what you see.</p>
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 10px; letter-spacing: 1px; line-height: 30px;color: #262338 ;margin-left: 90px;">
                📱 Easy Online Booking = Quick, user-friendly platform to book anytime, anywhere.</p>
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 10px; letter-spacing: 1px; line-height: 30px;color: #262338 ;margin-left: 90px;">
                🛠️ Well-Maintained & Safe Vehicles = Regularly inspected for your safety and comfort.</p>
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 10px; letter-spacing: 1px; line-height: 30px;color: #262338 ;margin-left: 90px;">
                🕒 24/7 Customer Support = Round the clock assistance for a smooth experience.</p>
            <p
                style="font-family: poppins;font-size: 16px; margin-top: 10px; letter-spacing: 1px; line-height: 30px;color: #262338 ;margin-left: 90px;">
                🔄 Flexible Rental Plans = Hourly, daily, weekly, or monthly options to suit your needs.</p>
        </div>
        <div style="background-color: #02005f; height: 380px; margin-top: 50px; display: flex; gap: 100px;">
            <div>
                <p
                    style="font-family: poppins; color: #ffff; margin-left: 130px; font-size: 32px; font-weight: bold; margin-top: 110px;">
                    "Book your ride today and start your journey with ease and comfort!"</p>
                <button class="book-now-btn">
                    <a href="{{ route('payment') }}" style="text-decoration: none; color: white;">Book Now
                        &rarr;</a></button>
            </div>

            <div class="img">
                <img src="image/girl.svg" alt="">
            </div>

        </div>
    </section>

@endsection
