<?php
$pageTitle = "Portfolio | Khaled Youssef";
include '../includes/header.php';
?>

<!-- Home -->
<section id="home" class="hero">
  <h2>Welcome to my portfolio</h2>
  <p>I am a beginner front-end developer with a passion for creating modern and user-friendly websites.  
     With growing knowledge of both front-end and back-end technologies, I work on projects to continuously improve myself.  
     Take a look below to see what I've already built!</p>
</section>

<!-- About -->
<section id="about">
  <h2>About me</h2>
  <p>I am a third-year student, specializing in web development.  
     My passion lies mainly in front-end development: creating modern, responsive, and user-friendly interfaces.  
     During my studies, I have worked on various projects where I applied HTML, CSS, JavaScript, and frameworks like React.  
     I also have basic knowledge of back-end development, which helps me understand how the full web stack works together.  
     I continuously strive to improve myself and am always looking for new techniques to enhance my work.</p>

     <h3>Skills</h3>
<div class="skills-buttons" aria-label="Skills list">
  <span class="skill-btn html5" tabindex="0">
    HTML5 <i class="fab fa-html5" aria-hidden="true"></i>
  </span>
  <span class="skill-btn css3" tabindex="0">
    CSS3 <i class="fab fa-css3-alt" aria-hidden="true"></i>
  </span>
  <span class="skill-btn js" tabindex="0">
    JavaScript <i class="fab fa-js" aria-hidden="true"></i>
  </span>
  <span class="skill-btn php" tabindex="0">
    PHP <i class="fab fa-php" aria-hidden="true"></i>
  </span>
  <span class="skill-btn mysql" tabindex="0">
    MySQL <i class="fas fa-database" aria-hidden="true"></i>
  </span>
  <span class="skill-btn node" tabindex="0">
    Node.js <i class="fab fa-node-js" aria-hidden="true"></i>
  </span>
  <span class="skill-btn react" tabindex="0">
    React <i class="fab fa-react" aria-hidden="true"></i>
  </span>
  <span class="skill-btn github" tabindex="0">
    Git & GitHub <i class="fab fa-github" aria-hidden="true"></i>
  </span>
</div>
</section>

 <section id="portfolio">
      <h2>Portfolio</h2>
      <div class="portfolio-grid">
        <!-- Project 1 -->
        <div class="portfolio-item" tabindex="0">
          <img src="img/picture1.png" alt="Screenshot project 1" />
          <div class="content">
            <h3>Duurzaamhuis</h3>
            <p>A beautiful and sustainable dashboard that displays useful information. Built with HTML, CSS, and JavaScript.</p>
            <div class="project-buttons">
              <a href="https://36503.hosts2.ma-cloud.nl/Bo-Duurzaamhuis/" target="_blank" class="btn">View Project</a>
              
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="portfolio-item" tabindex="0">
          <img src="img/picture2.png" alt="Screenshot project 2" />
          <div class="content">
            <h3>PiramideTour</h3>
            <p>A beautiful website where people can explore the pyramid. Built with HTML, CSS, and JavaScript.</p>
            <div class="project-buttons">
              <a href="https://36503.hosts2.ma-cloud.nl/piramideTour02/" target="_blank" class="btn">View Project</a>
              
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="portfolio-item" tabindex="0">
          <img src="img/picture3.png" alt="Screenshot project 3" />
          <div class="content">
            <h3>VectorFrog</h3>
            <p>A beautiful vector frog created entirely with CSS.</p>
            <div class="project-buttons">
              <a href="https://36503.hosts2.ma-cloud.nl/eindopdracht/" target="_blank" class="btn">View Project</a>
              
            </div>
          </div>
        </div>

        <!-- Project 4 -->
        <div class="portfolio-item hidden" tabindex="0">
          <img src="img/picture4.png" alt="Screenshot project 4" />
          <div class="content">
            <h3>Museum-online</h3>
            <p>An interactive website for a museum where visitors can purchase tickets online. Built with HTML, CSS, and JavaScript.</p>
            <div class="project-buttons">
              <a href="https://36503.hosts2.ma-cloud.nl/Museum-online/Website/" target="_blank" class="btn">View Project</a>
            
            </div>
          </div>
        </div>

        <!-- Project 5 -->
        <div class="portfolio-item hidden" tabindex="0">
          <img src="img/picture5.png" alt="Screenshot project 5" />
          <div class="content">
            <h3>Landingspage</h3>
            <p>A modern landing page with a clean layout and clear call-to-action. Designed with HTML and CSS.</p>
            <div class="project-buttons">
              <a href="https://36503.hosts2.ma-cloud.nl/landingspage/" target="_blank" class="btn">View Project</a>
              
            </div>
          </div>
        </div>

        <!-- Project 6 -->
        <div class="portfolio-item hidden" tabindex="0">
          <img src="img/picture6.png" alt="Screenshot project 6" />
          <div class="content">
            <h3>Stopwatch</h3>
            <p>A fully functional stopwatch app with start, pause, and reset features. Built with HTML, CSS, and JavaScript.</p>
            <div class="project-buttons">
              <a href="https://36503.hosts2.ma-cloud.nl/stopwatch/" target="_blank" class="btn">View Project</a>
              
            </div>
          </div>
        </div>
      </div>

  <!-- Knop -->
  <button id="show-more-btn" class="show-more">Show all projects ▼</button>
</section>

 <section id="contact">
      <h2>Contact</h2>
      
      <div class="contact-info">
        <p>
          <a href="mailto:khaledyoussef2019@outlook.com"><i class="fas fa-envelope"></i> Khaledyoussef2019@outlook.com</a>
          <a href="https://github.com/khaledyous" target="_blank" rel="noopener"><i class="fab fa-github"></i> GitHub</a>
          <a href="cv van khaledddddd.pdf" download><i class="fas fa-file-download"></i> Download CV (PDF)</a>
        </p>
      </div>

   <form action="https://formspree.io/f/mwpnddol" method="POST" id="contact-form">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Name" required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="E-mail" required>
  </div>

  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject" required>
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Type your message here..." rows="5" required></textarea>
  </div>

  <button type="submit" class="btn-submit">Send</button>
</form>



<?php include '../includes/footer.php'; ?>
