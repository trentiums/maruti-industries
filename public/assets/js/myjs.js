
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('a[href="#inquiry-form"]').addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelector("#inquiry-form").scrollIntoView({
                    behavior: "smooth"
                });
            });
        });


/* browse_product */

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('slider.btn').addEventListener('click', function(event) {
                event.preventDefault();
                document.querySelector('#ts-features').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
