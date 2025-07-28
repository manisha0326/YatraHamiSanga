
@section('title','Faqs')
@extends('frontend.layouts.app')

@section('content')
<section style="margin-top:140px;">
  <div class="faq-container style= font-family:Roboto; margin:0px;">
      <h2
        style="
          text-align: center;
          margin-top: 50px;
          color: #262586;
          font-family: Roboto;
          margin-bottom: 40px;
        "
      >
        Frequently Asked Questions
      </h2>

      <div class="faq-item">
        <div class="faq-question">
          Why choosing us?
          <span class="faq-symbol">+</span>
        </div>
        <div class="faq-answer">
          We offer a wide range of well-maintained vehicles at competitive
          prices, enjoy hassle-free booking, 24/7 support and a seamless rental
          experience every time.
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">
          What will be the cost for the specific vehicle?
          <span class="faq-symbol">+</span>
        </div>
        <div class="faq-answer">
          It depends on the address and number of days you provide. The cost
          varies based on rental options and locations.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          How do I book a vehicle?
          <span class="faq-symbol">+</span>
        </div>
        <div class="faq-answer">
          You can book through our website by selecting your preferred vehicle
          and providing your rental details.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          What are the criteria for bookings and payments ?
          <span class="faq-symbol">+</span>
        </div>
        <div class="faq-answer">
          All bookings must be made through our official website. A valid
          credit/debit card is required for booking. Full or partial payment may
          be required at the time of booking. You agree to provide accurate,
          current, and complete information.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          In case of delay on pickup and return vehicles situation?
          <span class="faq-symbol">+</span>
        </div>
        <div class="faq-answer">
          Vehicles must be picked up and returned at the agreed location and
          time.Late returns may result in additional charges.The vehicle must be
          returned in the same condition as it was received.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          What are the conditions for cancellation and refunds?
          <span class="faq-symbol">+</span>
        </div>
        <div class="faq-answer">
          Cancellations must be made at least 1 day in advance for a full
          refund. Late cancellations may incur a fee or be
          non-refundable.Refunds will be processed to the original payment
          method within [X days].
        </div>
      </div>
    </div>
</section>
      
@endsection