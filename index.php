<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ADMISSIONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="main.js"></script>

    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <img src="Emmalord.png" alt="Logo" />
        <span>Emmalord Educational Complex</span>
      </div>
      <ul class="nav-list">
        <li><a href="index.html">Home</a></li>
        <li><a href="ADMISSIONS.HTML">Admission</a></li>
        <li><a href="GALLERY.HTML">Gallery</a></li>
        <li><a href="ABOUT  US.HTML">About Us</a></li>
        <li><a href="STAFF.HTML">Staff</a></li>
      </ul>
      <div class="date-time">
        <p id="current-date-time"></p>
      </div>
      <div class="hamburger-menu">&#9776;</div>
    </nav>
      </div>
     
  
    <p>Welcome to Emmalord Educational Complex!

      At Emmalord Educational Complex, we are thrilled to embark on this educational journey with you. Our admission process is designed to welcome students who are eager to explore, learn, and grow in a nurturing environment.
      
      Our dedicated faculty, state-of-the-art facilities, and commitment to holistic education create an atmosphere where students can excel academically and develop essential life skills. Whether you are a prospective student or a parent considering Emmalord for your child, we invite you to become a part of our vibrant community.
      
      Why Choose Emmalord Educational Complex?<br>
      - Comprehensive and engaging curriculum<br>
      - Experienced and passionate faculty<br>
      - State-of-the-art facilities and learning resources<br>
      - Focus on character development and holistic education<br>
      - Vibrant extracurricular activities and clubs<br>
      
      If you are ready to embark on an enriching educational experience, we encourage you to explore our admission process. Feel free to reach out to our admission office for any inquiries or assistance.
      </p>
        <form action="process_admission.php" method="POST">
          <label for="student_name">Student Name:</label>
          <input type="text" name="student_name" id="student_name" required />
        
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        <label for="Current_class_of_student">Current Class Student Is Being Admitted T0:</label>
          <select id="curent_class_of_student" name="curent_class_of_student" required>
            <option value="none">None</option>
            <option value="CRECHE">CRECHE</option>
            <option value="Nursery1">NURSERY 1</option>
            <option value="Nursery 2">NURSERY2</option>
            <option value="KG1">KG 1</option>
            <option value="KG2">KG 2</option>
            <option value="CLASS 1">CLASS 1</option>
            <option value="CLASS 2">CLASS 2</option>
            <option value="CLASS 3">CLASS 3</option>
            <option value="CLASS 4">CLASS 4</option>
            <option value="CLASS5">CLASS 5</option>
            <option value="CLASS6">CLASS 6</option>
            <option value="JHS1">JHS 1</option>
            <option value="JHS 2">JHS 2</option>
            <option value="CLASS3">JHS 3</option>
          </select>
          <label for="date_of_birth">Date Of Birth:</label>
          <input type="date" id="date_of_birth" name="date_of_birth" required />
        
          <label for="father_name">Father's Name:</label>
          <input type="text" id="father_name" name="father_name" required />
        
          <label for="father_tel_number">Father's Telephone Number:</label>
          <input type="tel" id="father_tel_number" name="father_tel_number" required />
        
          <label for="mother_name">Mother's Name:</label>
          <input type="text" id="mother_name" name="mother_name" required />
        
          <label for="mother_tel_number">Mother's Telephone Number:</label>
          <input type="tel" id="mother_tel_number" name="mother_tel_number" required />
        
          <label for="residence">Residence:</label>
          <input type="text" id="residence" name="residence" required />
        
          <label for="previous_school_student_attended">Previous School Student Attended:</label>
          <input type="text" id="previous_school_student_attended" name="previous_school_student_attended" required />
        
          <input type="submit" value="Submit" />
        </form>
        <!-- Upcoming Events Section -->
        <div class="events-section">
          <h2>Upcoming Events</h2>
          <p>
            Stay tuned for exciting events and activities at Emmalord
            Educational Complex.
          </p>
          <!-- Add specific event details or a calendar if applicable -->
        </div>
        <div class="footer-container">
          <!-- Slideshow Footer -->
          <div class="footer">
            <div class="footer-section">
              <div class="logo">
                <img src="Emmalord.jpg" alt="Logo" />
              </div>
              <div class="contact-info">
                <p>Contact Information:</p>
                <p>
                  <a href="mailto:brempongkumi1@gmail.com"
                    >Email: emmalordeducation7@gmail.com</a
                  >
                </p>
                <p>Location: Sunyani-Dumasua</p>
                <p>Call us on: <a href="tel:0534655641">0534655641</a></p>
              </div>
            </div>
    
            <div class="footer-section explore">
              <h3>Explore</h3>
              <a href="#">Home</a>
              <a href="#">About Us</a>
              <a href="#">Equiries</a>
              <a href="#">Contact</a>
            </div>
    
            <div class="footer-section quick-links">
              <h3>Quick Links</h3>
              <a href="#">Clubs</a>
              <a href="#">SRC</a>
              <a href="#">Complains</a>
            </div>
    
            <div class="footer-section">
              <h3>Connect with Us</h3>
              <div class="social-icons">
                <a
                  href="https://web.facebook.com/profile.php?id=100072368995853"
                  target="_blank"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="https://twitter.com/KumiObrempong" target="_blank"
                  ><i class="fa fa-twitter"></i
                ></a>
                <a href="https://www.instagram.com/anibrekumi/" target="_blank"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a
                  href="https://wa.link/xkyqb1"
                  target="_blank"
                  class="fa fa-whatsapp"
                ></a>
    
                <!-- Add more social media icons as needed -->
              </div>
            </div>
    
            <div class="copyright">&copy; 2023 Emmalord Educational Complex</div>
          </div>
        </div>
      
  
  </body>
</html>
