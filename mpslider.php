<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Air Conditioner Carousel</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .carousel-container {
    width: 100%;
    overflow: hidden;
    position: relative;
  }

  .carousel-slide {
    display: none;
    width: 100%;
    animation: fadeIn 1s ease-in-out;
    position: relative;
  }

  .carousel-slide img {
    width: 100%;
    height: auto;
  }

  .carousel-slide .quote {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
    font-style: italic;
    font-weight: bold;
    font-size: 48px; /* Larger font size */
    line-height: 1.5;
    max-width: 80%;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Text shadow for better visibility */
  }

  .prev-btn, .next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    z-index: 1;
  }

  .prev-btn {
    left: 0;
  }

  .next-btn {
    right: 0;
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
</style>
</head>
<body>

<div class="carousel-container">
  <div class="carousel-slide">
    <img src="https://source.unsplash.com/800x400/?air-conditioner" alt="Air Conditioner 1">
    <div class="quote">Buying refurbished air conditioners can save you money without compromising quality.</div>
  </div>
  <div class="carousel-slide">
    <img src="https://source.unsplash.com/800x400/?cooling" alt="Air Conditioner 2">
    <div class="quote">Refurbished air conditioners are thoroughly tested and certified to ensure they work like new.</div>
  </div>
  <div class="carousel-slide">
    <img src="https://source.unsplash.com/800x400/?climate-control" alt="Air Conditioner 3">
    <div class="quote">Consider buying refurbished air conditioners from reputable sellers to get the best value for your money.</div>
  </div>
</div>
<button class="prev-btn">&#10094;</button>
<button class="next-btn">&#10095;</button>

<script>
  let slideIndex = 0;
  showSlide(slideIndex);

  function showSlide(index) {
    const slides = document.getElementsByClassName("carousel-slide");
    
    if (index >= slides.length) {
      slideIndex = 0;
    } else if (index < 0) {
      slideIndex = slides.length - 1;
    }
    
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    
    slides[slideIndex].style.display = "block";
  }

  function nextSlide() {
    showSlide(++slideIndex);
  }

  function prevSlide() {
    showSlide(--slideIndex);
  }

  document.querySelector('.prev-btn').addEventListener('click', prevSlide);
  document.querySelector('.next-btn').addEventListener('click', nextSlide);

  setInterval(nextSlide, 3000); // Auto transition every 3 seconds
</script>

</body>
</html>
