
    document.addEventListener('DOMContentLoaded', function () {
        const profileIcon = document.getElementById('profileToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const profileWrapper = document.getElementById('profileDropdown');

        let isClickOpen = false;

        // Toggle on click
        profileIcon.addEventListener('click', function (e) {
            e.stopPropagation();
            isClickOpen = !isClickOpen;
            dropdownMenu.classList.toggle('show', isClickOpen);
        });

        // Hover open (only if not already opened by click)
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

        // Click outside to close
        document.addEventListener('click', function (e) {
            if (!profileWrapper.contains(e.target)) {
                dropdownMenu.classList.remove('show');
                isClickOpen = false;
            }
        });
    });
