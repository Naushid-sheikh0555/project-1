<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blood Donation - Days of Gratitude</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      background-color: #FFF5F5;
    }

    header {
      background-color: #FF8A80;
      display: flex;
      justify-content: space-between;
      padding: 20px 40px;
      align-items: center;
      color: white;
    }

    .logo {
      font-size: 26px;
      font-weight: bold;
    }

    nav a {
      color: white;
      margin: 0 12px;
      text-decoration: none;
      font-weight: 500;
    }

    /* Slider Styles */
    .slider {
      position: relative;
      overflow: hidden;
      height: 500px;
    }

    .slides {
      display: flex;
      width: 300%;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      width: 100%;
      flex-shrink: 0;
      position: relative;
    }

    .slides img {
            width: 100%;
            height:   px; /* fixed height */
            object-fit: cover; /* maintain aspect ratio */
            display: block;
        }

    .slide-text {
      position: absolute;
      bottom: 60px;
      left: 40px;
      color: white;
      font-size: 32px;
      font-weight: bold;
      background-color: rgba(0, 0, 0, 0.4);
      padding: 10px 20px;
      border-radius: 6px;
      i;
    }

    .slider-nav {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .slider-nav button {
      background-color: rgba(255,255,255,0.8);
      border: none;
      font-size: 24px;
      padding: 10px;
      cursor: pointer;
      border-radius: 50%;
      margin: 0 20px;
    }

    .hero {
      background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                  url('https://via.placeholder.com/1600x600/FEE0E0/8A0000?text=Donate+Blood,+Save+Lives');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 0 60px;
      text-align: left;
    }

    .hero h1 {
      font-size: 48px;
      color: #B71C1C;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 18px;
      max-width: 600px;
      color: #444;
    }

    .buttons {
      margin-top: 25px;
    }

    .buttons a {
      display: inline-block;
      padding: 12px 24px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 4px;
      margin-right: 12px;
    }

    .buttons .learn {
      background-color: #FFF;
      color: #C62828;
      border: 2px solid #C62828;
    }

    .buttons .organize {
      background-color: #D32F2F;
      color: #FFF;
      border: none;
    }
    img {
           max-width: 100%;
           height: auto;
       }
  </style>
</head>
<body>

  <header>
    <div class="logo">RaktVahini</div>
    <nav>
      <a href="./about as.php">ABOUT US</a>
      <a href="#">ORGANIZE A CAMP</a>
      <a href="#">SPREAD AWARENESS</a>
      <a href="#">JOIN US</a>
      <a href="#">BLOG</a>
      <a href="./login.php">LOGIN</a>
      <a href="./signup.php">SIGN UP</a>
    </nav>

  </header>

  <!-- Image Slider -->
  <div class="slider">
    <div class="slides" id="slides">
      <div class="slide">
        <img src="./360_F_504368477_XGrt6brpAmFWPfjWGnPJD9bLU6Gi35yG.jpg" >
        <div class="slide-text">Donate Blood, Save Lives</div>
    </div>
      <div class="slide">
        <img src="./image/blood-drop-donor-vector-illustration-260nw-1173231970-removebg-preview.png
        " alt="Slide 2">
        <div class="slide-text">Every Drop Counts</div>
      </div>
    <div class="slide">
        <img src="https://via.placeholder.com/1600x500/ffccbc/000000?text=Be+a+Hero+Today" alt="Slide 3">
        <div class="slide-text">Be a Hero Today</div>
      </div>
    </div>
    <div class="slider-nav">
      <button onclick="prevSlide()">&#10094;</button>
      <button onclick="nextSlide()">&#10095;</button>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Days of Gratitude</h1>
    <p>Your birthday can be someone else's special day as well. Make your birthday memorable by giving someone the “Gift of Life”.<br>
    Donate blood. Donate for a cause.</p>
    <div class="buttons">
      <a href="#" class="learn">Learn More</a>
      <a href="#" class="organize">Organize a Camp</a>
    </div>
  </section>

  <!-- Slider Script -->
  <script>
    let currentSlide = 0;
    const slides = document.getElementById('slides');
    const totalSlides = slides.children.length;

    function showSlide(index) {
      if (index >= totalSlides) currentSlide = 0;
      else if (index < 0) currentSlide = totalSlides - 1;
      else currentSlide = index;
      slides.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    // Optional: Auto-slide every 5 seconds
    setInterval(nextSlide, 5000);
  </script>

</body>
</html>
