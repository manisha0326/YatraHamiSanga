
  const navItems = document.querySelectorAll(".has-submenu");

  navItems.forEach((item) => {
    const toggle = item.querySelector(".submenu-toggle");
    const icon = item.querySelector(".submenu-icon");
    const submenu = item.querySelector(".submenu");

    toggle.addEventListener("click", () => {
      item.classList.toggle("active");

      if (item.classList.contains("active")) {
        submenu.style.display = "block";
        icon.classList.remove("bi-chevron-down");
        icon.classList.add("bi-chevron-up");
      } else {
        submenu.style.display = "none";
        icon.classList.remove("bi-chevron-up");
        icon.classList.add("bi-chevron-down");
      }
    });
  });

