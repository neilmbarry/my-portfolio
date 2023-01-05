<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-PW04Z2B92J"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-PW04Z2B92J");
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Neil Barry || Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="n-solid.svg" sizes="any" type="image/svg+xml" />
    <script src="app.js" defer></script>
    <script
      src="https://kit.fontawesome.com/4208deb245.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <nav class="nav">
        <a href="/">

          <h5 class="nav-logo">nmb</h5>
        </a>
        <ul class="nav-links" id="nav-links">
          <a href="Neil-Barry-Resume.pdf" target="_blank">
            <li>Resume</li>
          </a>
          <a href="#projects">
            <li>Projects</li>
          </a>
          <a href="#contact">
            <li>Contact</li>
          </a>
        </ul>
        <div class="burger">
          <i class="fa-solid fa-bars" id="burger"></i>
         
          
        </div>
        <div id="backdrop" class="backdrop-hide"></div>
        <div class="side-menu side-menu-hide">
          
          <ul class="side-links" id="side-links">
            <a href="Neil-Barry-Resume.pdf" target="_blank">
              <li>Resume</li>
            </a>
            <a href="#projects">
              <li>Projects</li>
            </a>
            <a href="#contact">
              <li>Contact</li>
            </a>
          </ul>
          <i class="fa-solid fa-xmark" id="close"></i>
        </div>
      </nav>
      <div class="landing">
        <div class="landing-box">
          <h1>Neil Barry</h1>
          <h4 class="landing-subtitle">
            Full Stack Application Developer based in Toronto, Canada.
          </h4>

          <!-- <i class="fa-brands fa-github"></i> -->
          <a href="#contact" class="landing-link">
            <button class="landing-button">LET'S WORK TOGETHER</button>
          </a>
        </div>
        <div class="landing-icons">
          <a href="https://github.com/neilmbarry" target="_blank">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/neilmbarry/" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="mailto:neilbarry3@gmail.com">
            <i class="fa-solid fa-envelope"></i>
          </a>

          <!-- <i class="fa-brands fa-github"></i> -->
        </div>
        <!-- <img src="IMG_7354.png" class="landing-image" alt="" /> -->
        <img src="Neil.png" class="landing-image" alt="" />
      </div>
    </header>
    <!-- <section class="icons">
      <div class="icons-box">
        <img src="html5-color-codes.svg" class="icon" alt="" />
        <img src="css3-logo-png-transparent.png" class="icon2" alt="" />
        <img src="java.png" class="icon2" alt="" />
        <img src="react.jpg" class="icon2" alt="" />
        <img src="node.png" class="icon2" alt="" />
        <img src="MongoDB-Logo.jpg" class="icon3" alt="" />
      </div>
    </section> -->
    <section class="bio">
      <div class="bio-container">
        <h6 class="blue centre bio-title">About me</h6>
        <h3 class="">Hi there!</h3>
        <div class="bio-boxes">
          <!-- <div class="bio-subtitle">
            <h4 class="blue">I design professional & beautiful websites</h4>
          </div> -->
          <div class="bio-text">
            <p>
              My name is Neil. I am a freelance web developer with a bachelor’s
              degree in mathematics and seven years of managerial experience in
              the hospitality sector. I build full stack web applications and
              develop websites for small businesses in the greater Toronto area.
              I thrive in collaborative environments that value creativity,
              diligence, and productivity.
            </p>
            <p>
              If you are interested in working together shoot me a message and I
              will promptly respond!
            </p>
            <a href="Neil-Barry-Cover-Letter.pdf" target="_blank">

              <p class="blue">READ MORE --></p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="skills">
      <div class="skills-container">
        <h6 class="skills-title blue">My skills</h6>
        <div class="skills-boxes">
          <div class="skills-box">
            <!-- <i class="fa-solid fa-code"></i> -->
            <i class="fa-solid fa-cubes"></i>
            <!-- <i class="fa-brands fa-github"></i> -->
            <h5>Technical Skills</h5>
            <p>
              Firm grasp on popular front and back end technologies, including
              React.js, Node.js, Express, MongoDB etc.
            </p>
          </div>
          <div class="skills-box">
            <i class="fa-solid fa-wand-magic-sparkles lightblue"></i>
            <!-- <i class="fa-solid fa-cubes lightblue"></i> -->
            <h5>Clean, Efficient Code</h5>
            <p>
              Ability to consistently write quality maintainable code with
              responsive design and cross browser support.
            </p>
          </div>
          <div class="skills-box">
            <i class="fa-solid fa-people-group lightgreen"></i>
            <!-- <i class="fa-solid fa-computer lightgreen"></i> -->
            <h5>Teamwork</h5>
            <p>
              Effective communicator, thriving in collaborative environments
              including working with, and leading a team.
            </p>
          </div>

          <div class="skills-box">
            <i class="fa-solid fa-puzzle-piece orange"></i>

            <!-- <i class="fa-solid fa-cubes "></i> -->
            <h5>Problem Solving</h5>
            <p>
              Able to find creative and elegant solutions to unique challenges
              that are efficient and maintainable.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="projects" id="projects">
      <div class="projects-container">
        <h6>Latest Projects</h6>

        <div class="projects-boxes">
          <div class="projects-box">
            <div class="projects-image">
              <img src="cheetsheet.jpg" alt="" />
            </div>
            <div class="projects-info">
              <div class="projects-title-container">
                <h4 class="projects-title">Cheet/Sheet</h4>
                <!-- <i class="fa-solid fa-star gold"></i> -->
              </div>
              <div class="projects-types">
                <h5 class="projects-type lightblue">React</h5>
                <h5 class="projects-type darkblue">Node</h5>
                <h5 class="projects-type purple">Express</h5>
                <h5 class="projects-type green">MongoDB</h5>
                <!-- <h5 class="projects-type green">Node</h5>
                <h5 class="projects-type lightgreen">MongoDB</h5> -->
              </div>
              <p class="projects-bio">
                With this all-in-one cocktail application you can create, edit,
                find and share all the cocktails. All cocktails are saved to a
                database on the backend.
              </p>
              <div class="projects-buttons-container">
                <a href="https://cheat-sheet-app.vercel.app/" target="_blank">
                  <button class="projects-button">Demo</button>
                </a>
                <a
                  href="https://github.com/neilmbarry/CheatSheet-App"
                  target="_blank"
                >
                  <button class="projects-button">Source Code</button>
                </a>
              </div>
            </div>
          </div>
          <div class="projects-box">
            <div class="projects-image">
              <img src="shiphead.jpg" alt="" />
            </div>
            <div class="projects-info">
              <h4 class="projects-title">Ship-Head</h4>
              <div class="projects-types">
                <h5 class="projects-type lightblue">React</h5>
                <h5 class="projects-type darkblue">Node</h5>
                <h5 class="projects-type purple">Express</h5>
                <h5 class="projects-type orange">Socket.io</h5>
              </div>
              <p class="projects-bio">
                This easy to learn card game can be played against the computer,
                or with friends utilizing Socket.io as a live connection.
              </p>
              <div class="projects-buttons-container">
                <a href="https://ship-head.vercel.app/" target="_blank">
                  <button class="projects-button">Demo</button>
                </a>
                <a
                  href="https://github.com/neilmbarry/ShipHead"
                  target="_blank"
                >
                  <button class="projects-button">Source Code</button>
                </a>
              </div>
            </div>
          </div>
          <div class="projects-box">
            <div class="projects-image">
              <img src="simp.jpg" alt="" />
            </div>
            <div class="projects-info">
              <h4 class="projects-title">Simpl.</h4>
              <div class="projects-types">
                <h5 class="projects-type lightblue">React</h5>
                <h5 class="projects-type darkblue">Node</h5>
                <h5 class="projects-type purple">Express</h5>
                <h5 class="projects-type orange">MongoDB</h5>
              </div>
              <p class="projects-bio">
                This e-commerce app is a simple clone of Turo, a popular ride
                sharing platform, showcasing apparel instead. You can search the
                online database and add your own items too.
              </p>
              <div class="projects-buttons-container">
                <a href="https://simp-app.vercel.app/" target="_blank">
                  <button class="projects-button">Demo</button>
                </a>
                <a href="https://github.com/neilmbarry/SimpApp" target="_blank">
                  <button class="projects-button">Source Code</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <a href="https://github.com/neilmbarry" target="_blank" class="small-link">
          <p>View all projects --></p>
        </a>
      </div>
    </section>
    <!-- <section class="photo">
      <img src="coder.jpg" alt="" />
    </section> -->
    <section class="contact" id="contact">
      <div class="contact-container">
        <div class="contact-title">
          <h6>Contact</h6>
          <!-- <p>Shoot me a message below</p> -->
        </div>
        <form action="contact.php" method="post" class="form">
          <div class="form-input">
            <label for="name" class="label"
              >YOUR NAME <span class="form-required"> (required)</span></label
            >
            <input type="text" class="formName" name='name' required />
          </div>
          <div class="form-input">
            <label for="email" class="label"
              >YOUR EMAIL <span class="form-required"> (required)</span></label
            >
            <input type="email" class="formName" name='email' required/>
          </div>
          <div class="form-input">
            <label for="name" class="label">SUBJECT</label>
            <input type="text" class="formName" name='subject'/>
          </div>
          <div class="form-input">
            <label for="name" class="label">YOUR MESSAGE</label>
            <textarea
              name="message"
              id=""
              cols="30"
              rows="10"
              class="formTextArea"
              
            ></textarea>
          </div>
          <button class="form-button">Send</button>
        </form>
      </div>
    </section>
    
    <footer class="footer">
      <p>Designed and developed by Neil Barry.</p>
      <div class="footer-icons">
        <a href="https://github.com/neilmbarry" target="_blank">
          <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/neilmbarry/" target="_blank">
          <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="mailto:neilbarry3@gmail.com">
          <i class="fa-solid fa-envelope"></i>
        </a>

        <!-- <i class="fa-brands fa-github"></i> -->
      </div>
      <!-- <h4>Neil Malcolm Barry</h4> -->
    </footer>
    <?php
    if($_GET['success'] == 1){
        echo "<div class=\"form-sent \">
        <p>Received, thank you!</p>
    </div>";}
    if($_GET['success'] == -1){
        echo "<div class=\"form-sent\">
        <p>Oops! Please check you email address and try again.</p> 
    </div>";}
    ?>
  </body>
</html>
