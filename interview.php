<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="description" content="portfolio">
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>interview</title>
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
            <li class="active"><a href="interview.php">Interview</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="lightmode"><button onclick="trigger_light_mode()" class="lightmode" id="light_mode">light mode</button></li>
        </ul>
        </nav>
        <div class="article-page">
            <article class="article-grid">
                <h1>Interview met medestudent</h1>
                <h2>Nojan</h2>
                <p>ik ben 27 jaar uit en kom uit Zoetermeer</p>
                <h3>Waarom heb je voor deze opleiding gekozen?</h3>
                <p>Ik heb hiervoor gekozen, want ik heb een jaar in de ict gewerkt, waarbij ik veel collegas had die werken in the software development. dit leek mij ook erg leuk en het betaald goed</p>
                <h3>Met welke programmeertalen heb je al ervaring?</h3>
                <p>html/css/javascript</p>
                <h3>Wat heeft bij jouw de interesse gewekt tot programmeren?</h3>
                <p>Ik heb hiervoor gekozen, want ik heb een jaar in de ict gewerkt, waarbij ik veel collegas had die werken in the software development. dit leek mij ook erg leuk en het betaald goed</p>
                <h3>Waar ga je, denk je, meer op focussen? front-end of back-end?</h3>
                <p>front-end</p>
                <h3>Heb je een specifiek bedrijf in gedachten waar je graag zou willen werken?</h3>
                <p>honeywell</p>
                <h3>Zou je graag zelf een bedrijf willen opstarten?</h3>
                <p>nee, ik vind het leuk om te werken voor een groot bedrijf. misschien later als bijbaan</p>
            </article>
            <img class="image-1-grid" src="img-and-mp4/scrubdaddy.png" alt="Profielfoto Nojan" width="150">
            <img class="image-2-grid" src="img-and-mp4/servicenowlogo.png" alt="servivenow logo" width="150">
            <img class="image-3-grid" src="img-and-mp4/honeywell.png" alt="honeywell logo" width="150">
        </div>
        
        <p><a class="btn" href="index.php">home</a></p>
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