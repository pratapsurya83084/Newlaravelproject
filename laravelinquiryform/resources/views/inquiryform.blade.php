<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BISJHINTUS SERVICE INQUIRY FORM</title>

  <!-- Link the external CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/inquiryForm.css') }}">
</head>

<body>
  <div>
    <!-- header -->
    <header class="header">
      <img src="\assets\images\logo.png" alt="Logo" class="logo">
    </header>

    <h1 style="font-size:xx-large">Your Success Story Starts With BISJHINTUS Group</h1>

    <div class="form-container">
      <!-- inquiry form -->
      <form>
        <div class="form-group">
          <label for="course">Your Desired Course / Training</label>
          <input type="text" id="course" name="course" placeholder="Course You Are Signing Up For">
        </div>

        <div class="form-group">
          <label for="date">Course Journey Begins With Us</label>
          <input type="date" id="date" name="date" placeholder="dd-mm-yyyy">
        </div>

        <div class="form-group">
          <label for="name">Your Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your username">
        </div>

        <div class="form-group">
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
          <label for="phone">Your Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
        </div>

        <div class="form-group">
          <label for="country">Your Country</label>
          <input type="text" id="country" name="country" placeholder="Enter your country">
        </div>

        <div class="form-group">
          <label for="job">Your Job Role</label>
          <input type="text" id="job" name="job" placeholder="Enter your job role">
        </div>

        <div class="form-group">
          <label for="service">Select Your Service</label>
          <select id="service" name="service" required>
            <option value="">Select a service</option>
            <option value="b2b">Business to Business</option>
            <option value="b2c">Business to Customers</option>
          </select>
        </div>
        <div class="btn-actnow">
          <button type="submit">ACT NOW</button>
        </div>

      </form>
    </div>
    <!-- footer -->
    <footer class="footer">
      <!-- Logo and social media icons -->
      <div class="footer-content">
        <div class="logo-container">
          <img src="\assets\images\logo.png" alt="BISJHINTUS Logo" class="logo">
        </div>

        <!-- Contact info, startup logo, address info -->
        <div class="info-container">
          <!-- Contact info -->
          <div class="contact-info">
            <h1>M/s BISJHINTUS PRIVATE LIMITED</h1>
            <p>CIN: U80904TR2021PTC013885</p>
            <p>ISO:9001:2015, Certificate Number: 21IQGQ82</p>
            <p>All Rights Reserved | Copyright © BISJHINTUS | 2024 <span id="year"></span></p>
          </div>

          <!-- Startup logo -->
          <div class="startup-logo">
            <img src="\assets\images\startupIndia_vowlink_logo.png" alt="Logo" class="startup-img">
          </div>

          <!-- Address info -->
          <div class="address-info">
            <h1 class="contact">CONTACT</h1>
            <ul>
              <li><strong>Registered Office</strong></li>
              <li>C/O Jhintu Baidya Adhikari,</li>
              <li>Ramakrishna Colony, Belonia,</li>
              <li>South Tripura, Tripura – 799155</li>
            </ul>

            <ul>
              <li><strong>Corporate Office</strong></li>
              <li>KUDCEMP Building, 2nd Floor,</li>
              <li>MCC Commercial Complex,</li>
              <li>Mallikatte, Kadri, Mangalore,</li>
              <li>Karnataka – 575002</li>
            </ul>

            <ul>
              <li>Ph: +91 9353383517</li>
              <li>Mail: adoreforgrowth@bisjhintus.com</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>



  </div>
</body>

</html>