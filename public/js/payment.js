function showModelDropdown() {
        const vehicleType = document.getElementById("vehicleType").value;

        //hide garcha pahela container lai
        const allContainers = [
          "bikeModelsContainer",
          "scooterModelsContainer",
          "carModelsContainer",
          "scorpioModelsContainer",
          "hiaceModelsContainer",
        ];

        allContainers.forEach((id) => {
          document.getElementById(id).style.display = "none";
        });

        // dekhayucha kun model ko vechicle
        if (allContainers.includes(vehicleType + "ModelsContainer")) {
          document.getElementById(
            vehicleType + "ModelsContainer"
          ).style.display = "block";
        }
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

  function showModelDropdown() {
    const type = document.getElementById('vehicleType').value;
    const all = ['bike', 'scooter', 'car', 'scorpio', 'hiace'];
    all.forEach(v => {
      document.getElementById(`${v}ModelsContainer`).style.display = (v === type) ? 'block' : 'none';
    });
  }

  function showPaymentModal() {
    const modal = new bootstrap.Modal(document.getElementById('paymentModal'));
    modal.show();
  }
