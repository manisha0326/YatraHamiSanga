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

    // Toggle active button styles
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

    // Toggle active button styles
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

// for calculation of amount
  // const perDayRate = Number("{{ $brand->price ?? 0 }}");
  // const perHourRate = perDayRate / 12;

  // // For Per Day Calculation
  // function calculatePerDayAmount() {
  //   const pickup = new Date(document.getElementById("pickupDate").value);
  //   const drop = new Date(document.getElementById("returnDate").value);
  //   const amountField = document.getElementById("amountDay");

  //   if (!isNaN(pickup) && !isNaN(drop) && pickup <= drop) {
  //     const msPerDay = 1000 * 60 * 60 * 24;
  //     const diffDays = Math.ceil((drop - pickup) / msPerDay) || 1;
  //     // amountField.value = diffDays * Number(perDayRate);
  //     if (!isNaN(perDayRate)) {
  //       amountField.value = (diffDays * perDayRate).toFixed(2);
  //     } else {
  //       amountField.value = '';
  //     }
  //   } else {
  //     amountField.value = '';
  //   }
  // }

  // // For Per Hour Calculation
  // function calculatePerHourAmount() {
  //   const hourInput = document.getElementById("bookingHour");
  //   const amountField = document.getElementById("amountHour");
  //   const hours = parseInt(hourInput.value);

  //   if (!isNaN(hours) && hours > 0 && hours <= 12) {
  //     amountField.value = Math.round(hours * Number(perHourRate));;
  //   } else {
  //     amountField.value = '';
  //   }
  // }

  // // Attach event listeners
  // document.getElementById("pickupDate").addEventListener("change", calculatePerDayAmount);
  // document.getElementById("returnDate").addEventListener("change", calculatePerDayAmount);
  // document.getElementById("bookingHour").addEventListener("input", calculatePerHourAmount);