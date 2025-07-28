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
