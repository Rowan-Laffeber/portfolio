<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="description" content="portfolio">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact</title>
        <link rel="stylesheet" href="portfolio.css">
        <link id="color_mode" rel="stylesheet" href="portfolio-darkmode.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">About me</a></li>
                <li>
                    <a href="projects.php">Projecten</a>
                    <ul class="dropdown">
                        <li><a href="project1.php">Project 1</a></li>
                        <li><a href="project2.php">Project 2</a></li>
                        <li><a href="project3.php">Project 3</a></li>
                        <li><a href="project4.php">Project 4</a></li>
                        <li><a href="project5.php">Project 5</a></li>
                        <li><a href="project6.php">Project 6</a></li>
                    </ul>
                </li>
                <li><a href="interview.php">Interview</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
                <li class="lightmode"><button onclick="trigger_light_mode()" class="lightmode" id="light_mode">light mode</button></li>
            </ul>
        </nav>

        <h1>Contact</h1>
        <h2>Neem contact met mij op via onderstaand formulier of the socials in the footer.</h2>
        <form action="submitted.php" method="post">
            <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="First name" required>
            <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Last name" required>
            <label for="email">Email</label>
                <input type="email" name="Email" id="email" placeholder="Email" required >
            <label for="Phonenumber">Phone number</label>
                <input type="tel" name="telefoon" id="Phonenumber" placeholder="Phone number" required minlength="11" maxlength="14">
            <label for="Subject">Subject</label>
                <input type="text" name="Subject" id="Subject" placeholder="Subject">
            <label for="Message">Message</label>
                <textarea id="Message" name="Message" placeholder="Message" required spellcheck="true"></textarea>
            <input type="submit" name="submit" id="submit">
        </form>

        <footer>
            <div class="footer-row">
              <div class="footer-1">
                <h2>Socials</h2>
                <address class="footer-box">
                  <a href="https://www.github.com" target="_blank"><img src="img-and-mp4/github.png" alt="github" width="75"></a>
                  <a href="https://www.linkedin.com" target="_blank"><img src="img-and-mp4/linkedin.png" alt="linkedin" width="75"></a>
                </address>
              </div>
              <div class="footer-2">
                <h2>Developed by</h2>
                <div class="footer-box">
                    <img src="img-and-mp4/pfp.png" alt="Rowan-Laffeber" width="75">
                    <img src="img-and-mp4/ytg-pfp.png" alt="logo-YTG" width="75">
                  </div>
                </div>
                <div class="footer-3">
                  <h2>In collaboration with</h2>
                  <div class="footer-box">
                    <img src="img-and-mp4/mr-clean.png" alt="KelvinvdGaag" width="75">
                    <img src="img-and-mp4/sultan-alladin.png" alt="Sachdeva" width="75">
                  </div>
                </div>
              </div>
              <p>Copyright &copy; 2024 R. Laffeber BV and YTG Inc.</p>
          </footer>
          <script src="portfolio.js"></script>
    </body>
</html>