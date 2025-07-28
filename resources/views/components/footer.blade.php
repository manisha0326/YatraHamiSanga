<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>footer</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  </head>
  <body>
    <footer
      style="height: 380px; background-color: #fcfcfc; font-family: Roboto"
    >
      <div class="d-flex align-items-center">
        <div
          class="container d-flex justify-content-between align-items-center"
        >
          <a href="Home.html">
            <img
              src="{{ asset('image/ttt.svg') }}"
              alt=""
              style="width: 260px; margin-top: 80px"
          /></a>

          <!-- <a class="navbar-brand fw-bold fs-1 text-white" href="#">LOGO</a> -->
          <div
            class="d-flex"
            style="gap: 400px; margin-top: 50px; color: #262338"
          >
            <div class="one" style="color: #262338">
              <div style="font-weight: bold">Additional Links</div>
              <p style="margin-top: 40px; color: #262338">
                9863482905,9862090518
              </p>
              <p style="color: #262338; margin-top: 20px">
                yatra9980@gmail.com
              </p>
              <p style="color: #262338; margin-top: 20px">kathmandu,Nepal</p>
            </div>
            <div class="two" style="margin-right: 140px; color: #262338">
              <div style="font-weight: bold">Additional Links</div>
              <a
                href="AboutUs.html"
                class="footer-link"
                style="margin-top: 40px"
                >About Us</a
              ><br />
              <a href="Rental.html" class="footer-link">Rental</a><br />
              <a href="{{ route('contactus') }}" class="footer-link">Contact Us</a><br />
              <a href="{{ route('faqs') }}" class="footer-link">FAQs</a><br />
              <a href="{{ route('terms') }}" class="footer-link">Terms And Conditions</a>
            </div>
          </div>
        </div>
      </div>
      <div class="social-media">
        <h4
          style="
            text-align: center;
            margin-top: 8px;
            color: #262338;
            margin-bottom: 20px;
          "
        >
          Social Media:
          <a href="https://www.facebook.com/profile.php?id=61575751437309">
            <img src="{{ asset('image/facebook.svg') }}" alt="" />
          </a>
          <a href="https://www.instagram.com/yatrahamisanga/">
            <img src="{{ asset('image/instagram.svg') }}" alt="" />
          </a>
          <a href="https://www.youtube.com/channel/UCb9BBhA2IZX2fc6NAf4dIAA">
            <img src="{{ asset('image/youtube.svg') }}" alt="" />
          </a>
        </h4>
      </div>
    </footer>
  </body>
</html>
