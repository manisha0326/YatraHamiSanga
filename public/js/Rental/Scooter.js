            function checkOnlyOne(checkbox) {
              let checkboxes = document.getElementsByName("option");
              checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false;
              });
            }
          