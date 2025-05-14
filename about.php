<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>+Ticket Soft</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9fbfd;
      color: #333;
      line-height: 1.6;
    }

   

    section {
      padding: 2rem 1rem;
      max-width: 1200px;
      margin: auto;
    }

    .image-text-container,
    .video-text-container {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      align-items: center;
      justify-content: center;
      margin-bottom: 3rem;
    }

    .image-text-container img,
    .video-text-container video {
      max-width: 100%;
      width: 500px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .text-content {
      max-width: 600px;
      padding: 1rem;
    }

    h2, h3 {
      color: #007bff;
      margin-bottom: 0.8rem;
    }

    ul {
      padding-left: 1.5rem;
      margin-top: 0.5rem;
    }

    li {
      margin-bottom: 0.5rem;
    }

    iframe {
      width: 100%;
      height: 350px;
      border: 0;
      margin: 3rem 0;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .btn-back, .btn-copy {
      width: 100%;
      padding: 1rem;
      border: none;
      cursor: pointer;
      font-size: 1rem;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .btn-back {
      background: #007bff;
      color: white;
      margin-bottom: 1rem;
    }

    .btn-back:hover {
      background: #0056b3;
    }

    .btn-copy {
      background: #222;
      color: #eee;
    }

    .btn-copy:hover {
      background: #444;
    }

    @media (max-width: 768px) {
      .image-text-container,
      .video-text-container {
        flex-direction: column;
      }
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
      .hoho2{
        height: 25rem;
        width: 100%;
      }
  </style>
</head>
<body>

  <header>
    <div><img src="logo.png" alt="Logo"> <strong>+Ticket Soft</strong></div>
    <nav>
      <a href="index.php" id="navHome">Home</a>
      <a href="about.php" id="navAbout">About Us</a>
      <a href="ourservice.php" id="navServices">Services</a>
      <a href="contact.php" id="navHelp">Help&contact</a>
      <a href="login.php" id="navSignIn">Sign In</a>
      <a href="signup.php" id="navSignUp">Sign Up</a>
    </nav>
  </header>

  <section class="image-text-container">
    <img src="Airport.jpg" alt="Airport">
    <div class="text-content">
      <p>
        <strong>Movement of goods</strong> in crisis areas such as South Sudan and the Central African Republic.
        <ul>
          <li>Security related business handling</li>
          <li>Clearing and forwarding</li>
          <li>Maintenance of security-related equipment</li>
          <li>Certification for import/export of dangerous goods</li>
        </ul>
        <br>
        <strong>Peacekeeping Logistics:</strong> Supporting equipment maintenance for over 3,500 troops in Darfur under UNAMID.
        Includes technician provision, spare parts, and communication equipment support.
      </p>
    </div>
  </section>

  <section class="image-text-container">
    <img src="boat.webp" alt="Boat">
    <div class="text-content">
      <h2>Improvement in Management Systems</h2>
      <img src="driver.jpg" alt="Driver" style="width: 100%; height: auto; margin-top: 1rem; border-radius: 10px;">
    </div>
  </section>

  <section class="video-text-container">
    <video src="video-of-horzon.mp4" autoplay muted controls></video>
    <div class="text-content">
      <h3>Which Other We Do?</h3>
      <p>
        Ticket Soft offers a smart system for organized ticket scheduling and access control based on availability. Its form-driven interface, admin panel, and simplicity make it ideal for events, clinics, and services.
        <br><br>
        The three-page flow (user form, feedback, admin) is intuitive and clear, and future scaling with backend separation will enhance its potential.
      </p>
    </div>
  </section>

  <section class="video-text-container">
    <video src="volcano-video.mp4" autoplay muted></video>
    <div class="text-content">
      <h3>Efficient Ticket Scheduling with Ticket Soft</h3>
      <p>
        Ticket Soft is built to manage ticket requests based on real-time slot availability. It prevents overbooking and suggests alternatives, enhancing fairness and user experience.
        <br><br>
        As it evolves, modular architecture and secure payments will expand its scalability and efficiency across sectors.
      </p>
    </div>
  </section>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.0251340926713!2d30.062393316160536!3d-1.9440728999999965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6d8e23719f3%3A0x12345678abcdef!2sKigali%2C%20Rwanda!5e0!3m2!1sen!2srw!4v1614033332295!5m2!1sen!2srw"></iframe>

  <img src="hoho2.png" class="hoho2">

  <button class="btn-back" onclick="backhome()">⬅ Back</button>
  <button class="btn-copy">&copy; 2025 +Ticket Soft</button>

  <script>
    function backhome() {
      window.location.href = "ticket.html";
    }
  </script>

</body>
</html>
