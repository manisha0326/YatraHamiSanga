
function loadModels(categoryId) {
    const container = document.getElementById("dynamicModelsContainer");
    const select = document.getElementById("dynamicModels");

    select.innerHTML = '<option selected disabled>Loading...</option>';

    fetch(`/getModels/${categoryId}`)
        .then(res => res.json())
        .then(models => {
            select.innerHTML = '<option selected disabled>Select a model</option>';
            if (models.length > 0) {
                models.forEach(model => {
                    const option = document.createElement('option');
                    option.value = model.id;
                    option.textContent = model.brand_name;
                    select.appendChild(option);
                });
                container.style.display = "block";
            } else {
                select.innerHTML = '<option disabled>No models found</option>';
                container.style.display = "block";
            }
        })
        .catch(() => {
            select.innerHTML = '<option disabled>Error loading models</option>';
        });
}






      function showPaymentModal() {
        var modal = new bootstrap.Modal(
          document.getElementById("paymentModal")
        );
        modal.show();
      }


  function toggleBookingFields() {
    const type = document.getElementById('bookingType').value;
    document.getElementById('dayFields').style.display = type === 'perDay' ? 'block' : 'none';
    document.getElementById('hourFields').style.display = type === 'perHour' ? 'block' : 'none';
  }

  // function showModelDropdown() {
  //   const type = document.getElementById('vehicleType').value;
  //   const all = ['bike', 'scooter', 'car', 'scorpio', 'hiace'];
  //   all.forEach(v => {
  //     document.getElementById(`${v}ModelsContainer`).style.display = (v === type) ? 'block' : 'none';
  //   });
  // }

  function showPaymentModal() {
    const amount = document.querySelector("input[name='amount']").value;
    const pid = 'RID' + Math.floor(Math.random() * 1000000); // Unique booking/payment ID

    if (!amount || amount <= 0) {
        alert("Please enter a valid amount");
        return;
    }

    // Fill eSewa hidden form
    document.getElementById("tAmt").value = amount;
    document.getElementById("amt").value = amount;
    document.getElementById("pid").value = pid;

    // Optionally show modal here OR directly submit to eSewa
    document.getElementById("esewa-form").submit();

}
function showPaymentModal(){
        const modal = new bootstrap.Modal(document.getElementById('paymentModal'));
        modal.show();
    }

    // Calculate tomorrow's date
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);

    const yyyy = tomorrow.getFullYear();
    const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
    const dd = String(tomorrow.getDate()).padStart(2, '0');
    const minDate = `${yyyy}-${mm}-${dd}`;

    // Set min attribute to tomorrow for both fields
    document.querySelector('[name="pickupDate"]').setAttribute('min', minDate);
    document.querySelector('[name="returnDate"]').setAttribute('min', minDate);

