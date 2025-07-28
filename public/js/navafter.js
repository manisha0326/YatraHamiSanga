
    document.addEventListener('DOMContentLoaded', function () {
        const profileIcon = document.getElementById('profileToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const profileWrapper = document.getElementById('profileDropdown');

        let isClickOpen = false;

       
        profileIcon.addEventListener('click', function (e) {
            e.stopPropagation();
            isClickOpen = !isClickOpen;
            dropdownMenu.classList.toggle('show', isClickOpen);
        });

        
        profileWrapper.addEventListener('mouseenter', () => {
            if (!isClickOpen) {
                dropdownMenu.classList.add('show');
            }
        });

        profileWrapper.addEventListener('mouseleave', () => {
            if (!isClickOpen) {
                dropdownMenu.classList.remove('show');
            }
        });

        document.addEventListener('click', function (e) {
            if (!profileWrapper.contains(e.target)) {
                dropdownMenu.classList.remove('show');
                isClickOpen = false;
            }
        });
    });

 let lastScrollTop = 0;
  const navbar = document.getElementById("mainNavbar");

  navbar.style.position = "fixed";
  navbar.style.top = "0";
  navbar.style.width = "100%";
  navbar.style.zIndex = "1030";
//   navbar.style.transition = "top 0.3s";

  window.addEventListener("scroll", function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      
      navbar.style.top = "-120px";
    } else {
      
      navbar.style.top = "0";
    }

    lastScrollTop = scrollTop;
  });   