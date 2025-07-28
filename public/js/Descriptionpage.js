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

// for calculation of amount
  const perDayRate = 1500;
  const perHourRate = perDayRate / 12;

  // For Per Day Calculation
  function calculatePerDayAmount() {
    const pickup = new Date(document.getElementById("pickupDate").value);
    const drop = new Date(document.getElementById("returnDate").value);
    const amountField = document.getElementById("amountDay");

    if (!isNaN(pickup) && !isNaN(drop) && pickup <= drop) {
      const msPerDay = 1000 * 60 * 60 * 24;
      const diffDays = Math.ceil((drop - pickup) / msPerDay) || 1;
      amountField.value = diffDays * perDayRate;
    } else {
      amountField.value = '';
    }
  }

  // For Per Hour Calculation
  function calculatePerHourAmount() {
    const hourInput = document.getElementById("bookingHour");
    const amountField = document.getElementById("amountHour");
    const hours = parseInt(hourInput.value);

    if (!isNaN(hours) && hours > 0 && hours <= 12) {
      amountField.value = Math.round(hours * perHourRate);
    } else {
      amountField.value = '';
    }
  }

  // Attach event listeners
  document.getElementById("pickupDate").addEventListener("change", calculatePerDayAmount);
  document.getElementById("returnDate").addEventListener("change", calculatePerDayAmount);
  document.getElementById("bookingHour").addEventListener("input", calculatePerHourAmount);

