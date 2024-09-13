
    document.addEventListener("DOMContentLoaded", function () {
        const testimonials = document.querySelectorAll(".testimonial");
        let currentIndex = 0;

        function showTestimonial(index){
            testimonials[currentIndex].classList.add("inactive");
            testimonial[index].classList.remove("inactive");
            testimonial[index].classList.add("active");
            currentIndex = index;    
        }

        setInterval(() => {
            const nextIndex = (currentIndex + 1) % testimonials.length;
            showTestimonial(nextIndex);
        }, 5000);

        showTestimonials(currentIndex);
    });