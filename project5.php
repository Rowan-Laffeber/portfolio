<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="description" content="portfolio">
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>project 5</title>
        <link rel="stylesheet" href="portfolio.css">
        <link id="color_mode" rel="stylesheet" href="portfolio-darkmode.css">
      </head>
    <body>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">About me</a></li>
            <li class="active">
                <a href="projects.php">Projecten</a>
                <ul class="dropdown">
                    <li><a href="project1.php">Project 1</a></li>
                    <li><a href="project2.php">Project 2</a></li>
                    <li><a href="project3.php">Project 3</a></li>
                    <li><a href="project4.php">Project 4</a></li>
                    <li class="active"><a href="project5.php">Project 5</a></li>
                    <li><a href="project6.php">Project 6</a></li>
                </ul>
            </li>
            <li><a href="interview.php">Interview</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="lightmode"><button onclick="trigger_light_mode()" class="lightmode" id="light_mode">light mode</button></li>
        </ul>
        </nav>
        <div class="article-page">
            <article class="article-grid">
                <h1>Plaats hier project 5</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus alias tempore accusantium eveniet dignissimos dolor harum impedit illum, id non officiis. Nam in quas sapiente sequi soluta maiores exercitationem nostrum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, numquam omnis. Velit aliquam illo cumque eligendi quae nemo obcaecati consequatur inventore voluptatum et quis, a ea neque quod culpa deserunt!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque facere culpa asperiores necessitatibus ratione nobis sint et doloribus consequatur obcaecati, possimus omnis quidem ex saepe incidunt tenetur, cumque, vel soluta?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus illo architecto voluptas, quasi facere maxime consequatur dolorum harum! Maiores officia dicta suscipit rerum nulla illo consequuntur dolores tempora eligendi molestias.</p>
            </article>
            <img class="image-1-grid" src="img-and-mp4/placeholder-project-article.png" alt="" width="150">
            <img class="image-2-grid" src="img-and-mp4/placeholder-project-article.png" alt="" width="150">
            <img class="image-3-grid" src="img-and-mp4/placeholder-project-article.png" alt="" width="150">
        </div>
        
        <p><a class="btn" href="index.php">home</a><a class="btn" href="projects.php">projecten</a></p>

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