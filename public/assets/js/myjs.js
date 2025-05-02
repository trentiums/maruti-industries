
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('a[href="#inquiry-form"]').addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelector("#inquiry-form").scrollIntoView({
                    behavior: "smooth"
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('a[href="#ts-features"]').addEventListener('click', function(event) {
                event.preventDefault();
                document.querySelector('#ts-features').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
