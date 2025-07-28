const faqItems = document.querySelectorAll(".faq-item");

      faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        const symbol = question.querySelector(".faq-symbol");
        question.addEventListener("click", () => {
          item.classList.toggle("active");
          if (item.classList.contains("active")) {
            symbol.textContent = "_";
          } else {
            symbol.textContent = "+";
          }
        });
      });