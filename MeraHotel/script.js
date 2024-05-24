let slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide() {
  slides.forEach(slide => {
    slide.style.display = 'none';
  });
  slides[currentSlide].style.display = 'block';
}

function nextSlide() {
  currentSlide++;
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  showSlide();
}

// Initial call to show the first slide
showSlide();

// Change slide every 3 seconds
setInterval(nextSlide, 3000);
document.addEventListener("DOMContentLoaded", function() {
  var form = document.querySelector(".booking-form form");

  form.addEventListener("submit", function(event) {
    var customerName = document.getElementById("customer-name").value;
    var checkInDate = document.getElementById("check-in-date").value;
    var checkOutDate = document.getElementById("check-out-date").value;
    var numPeople = document.getElementById("num-people").value;
    var contactNumber = document.getElementById("contact-number").value;
    var email = document.getElementById("email").value;

    // Basic validation example
    if (customerName.trim() === "") {
      alert("Please enter your name.");
      event.preventDefault();
      return;
    }

    // You can add more validation here for other fields

    // If all validations pass, the form will submit normally
  });
});
