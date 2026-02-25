const reviews = document.querySelectorAll('.review');
  let current = 0;

  setInterval(() => {
    reviews[current].classList.remove('active');
    current = (current + 1) % reviews.length;
    reviews[current].classList.add('active');
  }, 5000); // 5 sec ko lagi ho



  // for per day and hour

  
  function showPerDay() {
    document.getElementById('perDayBlock').classList.remove('d-none');
    document.getElementById('perHourBlock').classList.add('d-none');

    // for active button styles
    const dayBtns = document.querySelectorAll('#perDayBlock button');
    const hourBtns = document.querySelectorAll('#perHourBlock button');
    
    dayBtns[0].classList.add('active');
    dayBtns[1].classList.remove('active');
    
    hourBtns[0].classList.add('active');
    hourBtns[1].classList.remove('active');
  }

  function showPerHour() {
    document.getElementById('perHourBlock').classList.remove('d-none');
    document.getElementById('perDayBlock').classList.add('d-none');

    // for active button styles
    const dayBtns = document.querySelectorAll('#perDayBlock button');
    const hourBtns = document.querySelectorAll('#perHourBlock button');
    
    hourBtns[0].classList.remove('active');
    hourBtns[1].classList.add('active');
    
    dayBtns[0].classList.remove('active');
    dayBtns[1].classList.add('active');
  }
  document.addEventListener("DOMContentLoaded", function () {
  const pickupInput = document.getElementById("pickupDate");
  const returnInput = document.getElementById("returnDate");

  if (pickupInput) {
    const today = new Date();
    today.setDate(today.getDate() + 1); // move to tomorrow

    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');

    const minDate = `${year}-${month}-${day}`;
    pickupInput.setAttribute("min", minDate);
  }
  if (returnInput) {
    const today = new Date();
    today.setDate(today.getDate() + 1); // move to tomorrow

    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');

    const minDate = `${year}-${month}-${day}`;
    returnInput.setAttribute("min", minDate);
  }

  // Existing listeners
  const drop = document.getElementById("returnDate");
  const bookingHour = document.getElementById("bookingHour");

  if (pickupInput && drop) {
    pickupInput.addEventListener("change", calculatePerDayAmount);
    drop.addEventListener("change", calculatePerDayAmount);
  }

  if (bookingHour) {
    bookingHour.addEventListener("input", calculatePerHourAmount);
  }
});

