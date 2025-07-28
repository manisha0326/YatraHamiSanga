    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('vehicleSearch');

        searchInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault(); 
                const value = searchInput.value.trim().toLowerCase();

                
                const routes = {
                    bike: '/rental/bike',
                    scooter: '/rental/scooter',
                    car: '/rental/car',
                    scorpio: '/rental/scorpio',
                    hiace: '/rental/hiace'
                };

                if (routes[value]) {
                    window.location.href = routes[value];
                } else {
                    alert('Vehicle not found!');
                }
            }
        });
    });

