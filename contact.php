<?php

include('header.php');
?>

  

  <!-- ==========================content section====================== -->
   <div class="contact_sec">
  <div class="container">
    <div class="content">
      <!-- Left Side -->
      <div class="left">
       
        <h3>Get in touch with us today</h3>
        <p>
          Fill out our form and get all your questions answered by our team within 24hrs.
        </p>
        <div>
          <h3>Follow <span style="font-weight: 800">Us:</span></h3>
          <div class="social-links">
            <a href="https://www.facebook.com/profile.php?id=61577831335760" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/yooma_wellness_spa/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/7356940742" aria-label="whatspp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
      </div>

      <!-- Right Side Form -->
      <form id="contactForm" class="right" aria-label="Contact form">
        <div class="form-group">
          <label for="name">name</label>
          <input id="full_name" name="name" type="text"  required />

        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="phone">phone number</label>
            <input id="phone" type="tel" placeholder="" />
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input id="email" type="email" placeholder="" />
          </div>
        </div>
        <!-- <div class="form-row">
          <div class="form-group">
            <label for="services">SERVICES</label>
            <select id="services">
              <option>Select Service</option>
              <option>Individual Therapy</option>
              <option>Beahavioural Therapy</option>
              <option>Career Counselling</option>
              <option>Clinical Psychology</option>
              <option>Corporate Training</option>
            </select>
          </div>
          <div class="form-group">
            <label for="company">DATE</label>
            <input id="company" type="date" placeholder="" />
          </div>
        </div> -->
        <div class="checkbox-group">
          <input id="terms" type="checkbox" />
          <label for="terms">I accept the terms and conditions and privacy policy</label>
        </div>
        <button type="submit"  id="submitBtn" class="submit-btn">Send A Message</button>
      </form>
    </div>
  </div>
</div>



  <!-- ==========================content section====================== -->





 <?php
include('footer.php');
?>