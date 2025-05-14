<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>+Ticket Soft</title>
  <link rel="icon" href="logo.png" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0f7fa, #e1bee7);
      color: #333;
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
    .language-selector {
      text-align: right;
      padding: 0.5rem 2rem;
    }
    .welcome-text {
      text-align: center;
      padding: 2rem;
      font-size: 1.25rem;
      color: #444;
    }
    .company-choice {
      text-align: center;
      margin: 2rem 0;
    }
    .company-button {
      padding: 1rem 2rem;
      margin: 1rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      color: white;
      background-color: #00bcd4;
      transition: 0.3s;
      cursor: pointer;
    }
    .company-button:hover {
      background-color: #0097a7;
    }
    .modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      width: 90%;
      max-width: 500px;
    }
    .form-group { margin-bottom: 1rem; }
    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }
    input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-check { margin-top: 1rem; }
    .submit-button {
      background-color: #4caf50;
      color: white;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
    }
    .submit-button:hover {
      background-color: #388e3c;
      margin-top: -2rem;
    }
    footer {
      text-align: center;
      padding: 1rem;
      background: linear-gradient(to right, #1e3c72, #2a5298);
      color: white;
      position: relative;
      bottom: 0;
      width: 100%;
      margin-top: 11rem;
    }
    .close{
      margin-left: 21rem;
      margin-top: -3rem;
      font-size: 2rem;
      font-weight: 3rem;
      cursor: pointer;
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
  <div class="up">
    <text></text>
  </div>

  <div class="language-selector">
    🌐 Language:
    <select id="language-select" onchange="changeLanguage()">
      <option value="en">English</option>
      <option value="rw">Kinyarwanda</option>
      <option value="fr">Français</option>
      <option value="sw">Kiswahili</option>
    </select>
  </div>

  <div class="welcome-text" id="typing"></div>

  <div class="company-choice">
    <h2 id="head">Which company do you want to travel with?</h2>
    <button class="company-button" onclick="selectCompany('Horzon')">Horzon</button>or
    <button class="company-button" onclick="selectCompany('Volcon')">Volcon</button>
  </div>

  <div class="modal" id="form-modal">
    <div class="modal-content">
      <h2 id="formTitle">Fill in your details</h2>
      <form id="travel-form">

        <label class="close" onclick="closeModal()"> &times;</label>

        <div class="form-group">  
          <label id="labelName" for="name">Name:</label>
          <input type="text" id="nameInput" required />
        </div>
        <div class="form-group">
          <label id="labelPhone" for="phone">Phone Number:</label>
          <input type="tel" id="phoneInput" required />
        </div>
        <div class="form-group">
          <label id="labelTrip" for="trip">Trip (Destination):</label>
          <input type="text" id="tripInput" required />
        </div>
        <div class="form-group">
          <label id="labelTime" for="time">Time:</label>
          <input type="time" id="timeInput" required />
        </div>
        <div class="form-check">
          <input type="checkbox" id="confirm" onchange="toggleSubmitButton()" />
          <label id="confirmLabel" for="confirm">Confirm that all the information you provided is correct.</label>
        </div>
        <button class="submit-button" type="submit" id="submit-button" disabled>Submit Request</button>
      </form>
    </div>
  </div>

  <footer>
    &copy; 2025 +Ticket Soft | All Rights Reserved.
  </footer>

  <script>
    function closeModal(){
      document.getElementById("form-modal").style.display = "none";

    }

    const translations = {
      en: {
        typing: "Hello, You are welcome to the website where you can book your ticket from anywhere, This is the only place where you can access these services. I wish you a safe journey.",
        head: "Which company do you want to travel with?",
        formTitle: "Fill in your details",
        labelName: "Name:",
        labelPhone: "Phone Number:",
        labelTrip: "Trip (Destination):",
        labelTime: "Time:",
        confirmLabel: "Confirm that all the information you provided is correct.",
        submitButton: "Submit Request",
        navHome: "Home",
        navAbout: "About Us",
        navServices: "Services",
        navHelp: "Help",
        navSignIn: "Sign In",
        navSignUp: "Sign Up"
      },
      rw: {
        typing: "Muraho, Murakaza neza kuri uru rubuga rwemera gutumiza itike aho uri hose. Uru ni rwo rubuga rwonyine rutanga aya maservice. Turabifuriza urugendo rwiza.",
        head: "Ni sosiyete iyihe wifuza kugendana nayo?",
        formTitle: "Uzuza amakuru yawe",
        labelName: "Amazina:",
        labelPhone: "Numero ya telefone:",
        labelTrip: "Urugendo (Aho ujya):",
        labelTime: "Igihe:",
        confirmLabel: "Emeza ko amakuru watanze ari yo.",
        submitButton: "Ohereza",
        navHome: "Ahabanza",
        navAbout: "Ibyacu",
        navServices: "Serivisi",
        navHelp: "Ubufasha",
        navSignIn: "Injira",
        navSignUp: "Iyandikishe"
      },
      fr: {
        typing: "Bonjour, bienvenue sur le site où vous pouvez réserver votre billet de n'importe où. C'est le seul endroit où ces services sont disponibles. Bon voyage.",
        head: "Avec quelle compagnie souhaitez-vous voyager ?",
        formTitle: "Remplissez vos informations",
        labelName: "Nom:",
        labelPhone: "Numéro de téléphone:",
        labelTrip: "Voyage (Destination):",
        labelTime: "Heure:",
        confirmLabel: "Confirmez que toutes les informations fournies sont correctes.",
        submitButton: "Soumettre la demande",
        navHome: "Accueil",
        navAbout: "À propos",
        navServices: "Services",
        navHelp: "Aide",
        navSignIn: "Connexion",
        navSignUp: "Inscription"
      },
      sw: {
        typing: "Habari, Karibu kwenye tovuti ambapo unaweza kuhifadhi tiketi yako kutoka mahali popote. Hii ndiyo sehemu pekee unayoweza kupata huduma hizi. Safari njema.",
        head: "Unataka kusafiri na kampuni gani?",
        formTitle: "Jaza maelezo yako",
        labelName: "Jina:",
        labelPhone: "Nambari ya simu:",
        labelTrip: "Safari (Mahali unapoenda):",
        labelTime: "Wakati:",
        confirmLabel: "Thibitisha kuwa taarifa zote ulizotoa ni sahihi.",
        submitButton: "Tuma Ombi",
        navHome: "Nyumbani",
        navAbout: "Kuhusu Sisi",
        navServices: "Huduma",
        navHelp: "Msaada",
        navSignIn: "Ingia",
        navSignUp: "Jisajili"
      }
    };

    function changeLanguage() {
      const lang = document.getElementById("language-select").value;
      const t = translations[lang];

      document.getElementById("typing").textContent = t.typing;
      document.getElementById("head").textContent = t.head;
      document.getElementById("formTitle").textContent = t.formTitle;
      document.getElementById("labelName").textContent = t.labelName;
      document.getElementById("labelPhone").textContent = t.labelPhone;
      document.getElementById("labelTrip").textContent = t.labelTrip;
      document.getElementById("labelTime").textContent = t.labelTime;
      document.getElementById("confirmLabel").textContent = t.confirmLabel;
      document.getElementById("submit-button").textContent = t.submitButton;

      document.getElementById("navHome").textContent = t.navHome;
      document.getElementById("navAbout").textContent = t.navAbout;
      document.getElementById("navServices").textContent = t.navServices;
      document.getElementById("navHelp").textContent = t.navHelp;
      document.getElementById("navSignIn").textContent = t.navSignIn;
      document.getElementById("navSignUp").textContent = t.navSignUp;
    }

    function selectCompany(company) {
      document.getElementById("form-modal").style.display = "flex";
      document.getElementById("travel-form").dataset.company = company;
    }

    function toggleSubmitButton() {
      document.getElementById("submit-button").disabled = !document.getElementById("confirm").checked;
    }

    document.getElementById("travel-form").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("Your ticket request has been submitted.");
      document.getElementById("form-modal").style.display = "none";
      this.reset();
      toggleSubmitButton();
    });

    // Typing effect initialization
    let i = 0;
    const text = translations.en.typing;
    function type() {
      if (i < text.length) {
        document.getElementById("typing").innerHTML += text.charAt(i);
        i++;
        setTimeout(type, 40);
      }
    }
    type();
  </script>
</body>
</html>
