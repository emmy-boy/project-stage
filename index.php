<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>+Ticket Soft</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      
    }

    body {
      background: #eef2f5;
      color: #333;
      height: 100vh;
      font-family: sans-serif;
      overflow-y: auto;
      overflow-x: hidden;
      
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2rem;
      background: linear-gradient(90deg, #1e3c72, #2a5298);
      color: white;
    }
    header img { height: 40px; }
    header nav a {
      margin: 0 15px;
      color: white;
      text-decoration: none;
      font-weight: 500;
    }
    header nav a:hover {
       text-decoration: none; 
      }
      .search-container {
  display: flex;
  flex-direction: row; /* left to right */
  align-items: center;
  gap: 8px;
}


.search-container {
  display: flex;
  flex-direction: row-reverse; /* icon on right, input on left */
  align-items: center;
  gap: 8px;
}

#searchBox {
  display: none; /* hidden by default */
  padding: 6px 10px;
  border-radius: 5px;
  border: 1px solid #2c2a2a;
  transition: 0.3s ease;
  height: 3rem;
  width: 14rem;
  font-size: 1.5rem;
}

#searchBtn {
  font-size: 18px;
  cursor: pointer;
  background: transparent;
  border: none;
}
.search-image{
  height: 3rem;
  width: 3rem;
  border: none;
  border-radius: 1rem;
  margin-right: 1rem;
  margin-top: -1rem;
  align-items: center;
}
.main{
  height: 5rem;
  width: 100%;
  background-color: #eef2f5;
  margin-top: 1rem;
}
.text{
  font-size: 2rem;
  padding: 13rem;
  
}

.container {
      padding: 2rem;
      text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 2rem;
    }

    .image-row {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .slide {
      width: 40%;
      height: 25rem;
      border-radius: 1rem;
      overflow: hidden;
      position: relative;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .slide img.active {
      opacity: 1;
    }

    @media (max-width: 768px) {
      .slide {
        width: 90%;
        height: 18rem;
      }

      h1 {
        font-size: 1.8rem;
      }
    }
    .village{
      height: 20rem;
      width: 100%;
      background-color: #eef2f5;
    }
    .follow{
      font-size: 2rem;
      font-weight: 100;
    }
    .image{
      height: 20rem;
      width: 27.8rem;
      border: none;
      border-radius: 1rem;
    }
    .logo{
      width: 3rem;
      height: 3rem;
    }
    .following{
      height: 20rem;
      width: 100%;
      
    }
    .pfoto{
      height: 20rem;
      width: 26rem;
      border: none;
      border-radius: 1rem;
    }
    .ten{
      height: 20rem;
      width: 27.8rem;
      border: none;
      border-radius: 1rem;
      margin-left: 3rem;
      float: right;
      margin-right: 2rem;

    }
    .nine{
      margin-top: 5rem;
      margin-left: 5rem;
      font-family: sans-serif;
    }
    h3{
      margin-top: 2rem;
      margin-left: 5rem;
      font-size: 2rem;
      max-width: 600px;
    }
    p{
      margin-top: 2rem;
      margin-left: 3.5rem;
    }
    .four{
      height: 20rem;
      width: 50rem;
      background-color: #eef2f5;
      margin-top: 3rem;
      margin-left: 3rem;
    }
    iframe {
      width: 100%;
      height: 350px;
      border: 0;
      margin: 3rem 0;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .hoho10{
      height: 30rem;
      width: 60%;
    }
    .background{
      font-size: 2rem;
      margin-top: -21rem;
      margin-left: 47rem;
    }
    footer{
      margin-top: 5rem;
      font-size: 1.4rem;
    }
    
  </style>
</head>
<body>
  <header>
    <div><img src="logo.png" alt="Logo" class="logo"> <strong>+Ticket Soft</strong></div>
    <nav>
      <a href="index.php" id="navHome">Home</a>
      <a href="about.php" id="navAbout">About Us</a>
      <a href="ourservice.php" id="navServices">Services</a>
      <a href="contact.php" id="navHelp">Help&contact</a>
      <a href="login.php" id="navSignIn">Sign In</a>
      <a href="signup.php" id="navSignUp">Sign Up</a>
    </nav>
  </header>

  <div class="main">
    <text class="text">Express Transport</text>
  <div class="search-container">
    <input type="text" id="searchBox" placeholder="Search..." />
    <button id="searchBtn"><img class="search-image" src="search.png"></button>
  </div>
</div>

<div class="container">
  <h1>Transport Express Company</h1>
  
  <div class="image-row">
    <div class="slide" id="slide1">
      <img src="volcano.png" class="active" />
      <img src="volcano1.png" />
      <img src="volcano2.png" />
    </div>

    <div class="slide" id="slide2">
      <img src="solution.jpg" class="active" />
      <img src="home.jpg" />
      <img src="about.jpg" />
      </div>
  </div>
</div>
<text class="follow">We offer different services, and the more you explore here, the more you understand them.</text>
  <div class="village">
    <img src="village.jpg" class="image">
    <img src="airdrive.jpg" class="image">
    <img src="office.jpg" alt="here pfoto" class="pfoto">
  </div>

  <div class="following">
<video  src="volcano10.mp4" autoplay muted  class="ten"></video>
<div class="four">
<p><strong> Customer Appreciation for Volcano Express</strong></p><br>
<p><strong>✅I really appreciate Volcano Express for their punctuality and professionalism. The journey was smooth and comfortable!</strong></p><br>
<p><strong>✅I appreciate the friendly staff and clean buses. Traveling with Volcano Express always feels safe and reliable.</strong></p>
<p><strong></strong></p>
</div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.0251340926713!2d30.062393316160536!3d-1.9440728999999965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6d8e23719f3%3A0x12345678abcdef!2sKigali%2C%20Rwanda!5e0!3m2!1sen!2srw!4v1614033332295!5m2!1sen!2srw" alt="this here address"></iframe>

  <img src="hoho10.png" class="hoho10">
  <div class="background">
    <strong>This is your Company Complete
      <br><br>✅Horizon⬅ ⬅ ✅Volcano<br><br>
      It make your day for you
    </strong>
  </div>
  <footer>&copy;Copy Right || reserved</footer>
<script>
  document.getElementById("searchBtn").addEventListener("click", function () {
    const searchBox = document.getElementById("searchBox");
    if (searchBox.style.display === "none" || searchBox.style.display === "") {
      searchBox.style.display = "inline-block";
      searchBox.focus();
    } else {
      searchBox.style.display = "none";
    }
  });

  // Search and show image directly
  document.getElementById("searchBox").addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
      const query = e.target.value.toLowerCase();
      const images = document.querySelectorAll(".slide img");
      let found = false;

      images.forEach((img, idx) => {
        const altText = img.alt?.toLowerCase() || '';
        const srcText = img.src?.toLowerCase() || '';

        if (altText.includes(query) || srcText.includes(query)) {
          // Remove active from all in the same slide
          const parentSlide = img.parentElement;
          const siblings = parentSlide.querySelectorAll("img");
          siblings.forEach(sib => sib.classList.remove("active"));

          // Show this image
          img.classList.add("active");

          // Scroll to it
          parentSlide.scrollIntoView({ behavior: "smooth", block: "center" });

          found = true;
        }
      });

      if (!found && query) {
        alert(`❌ No match found for "${query}"`);
      }
    }
  });

  // Slideshow animation
  function startSlideShow(containerId) {
    const slide = document.getElementById(containerId);
    const images = slide.querySelectorAll('img');
    let index = 0;

    setInterval(() => {
      images.forEach(img => img.classList.remove('active'));
      images[index].classList.add('active');
      index = (index + 1) % images.length;
    }, 3000);
  }

  startSlideShow("slide1");
  startSlideShow("slide2");
</script>


</body>
</html>