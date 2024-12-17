<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="portfolio">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rowan Laffeber</title>
    <link rel="stylesheet" href="assets/portfolio.css">
    <link id="color_mode" rel="stylesheet" href="assets/portfolio-darkmode.css">
  </head>
  <body>
    <?php    $url =  $_SERVER['REQUEST_URI'];?>
    <nav class="desktop-nav">
      <ul>
        <li <?php if ($url === '/portfolio/index.php'){ echo "class='active'";} ?>><a  href="index.php">Home</a></li>
        <li <?php if ($url === '/portfolio/portfolio.php'){ echo "class='active'";} ?>><a href="portfolio.php">About me</a></li>
        <li <?php if ($url === '/portfolio/projects.php'){ echo "class='active'";} ?>>
          <a href="projects.php">Projecten</a>
          <ul class="dropdown">
            <li <?php if ($url === '/portfolio/project1.php'){ echo "class='active'";} ?>><a href="project1.php">Project 1</a></li>
            <li <?php if ($url === '/portfolio/project2.php'){ echo "class='active'";} ?>><a href="project2.php">Project 2</a></li>
            <li <?php if ($url === '/portfolio/project3.php'){ echo "class='active'";} ?>><a href="project3.php">Project 3</a></li>
            <li <?php if ($url === '/portfolio/project4.php'){ echo "class='active'";} ?>><a href="project4.php">Project 4</a></li>
            <li <?php if ($url === '/portfolio/project5.php'){ echo "class='active'";} ?>><a href="project5.php">Project 5</a></li>
            <li <?php if ($url === '/portfolio/project6.php'){ echo "class='active'";} ?>><a href="project6.php">Project 6</a></li>
          </ul>
        </li>
        <li <?php if ($url === '/portfolio/interview.php'){ echo "class='active'";} ?>><a href="interview.php">Interview</a></li>
        <li <?php if ($url === '/portfolio/contact.php'){ echo "class='active'";} ?>><a href="contact.php">Contact</a></li> 
        <li class="switch_color_mode"><button id="switch_color_mode" class="switch_color_mode">colormode-switch</button></li>
      </ul>
    </nav>  
    <nav class="mobile-nav" id="mobile-nav">
      <ul class="top-nav-mobile">
        <li><button id="switch_color_mode_mobile" class="switch_color_mode">colormode-switch</button></li>
        <li><button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button></li>
      </ul>
      <ul class="hamburger-nav">
        <li <?php if ($url === '/portfolio/index.php'){ echo "class='active'";} ?>><a  href="index.php">Home</a></li>
        <li <?php if ($url === '/portfolio/portfolio.php'){ echo "class='active'";} ?>><a href="portfolio.php">About me</a></li>
        <li <?php if ($url === '/portfolio/projects.php'){ echo "class='active'";} ?>><a href="projects.php">Projecten</a></li>
        <li <?php if ($url === '/portfolio/interview.php'){ echo "class='active'";} ?>><a href="interview.php">Interview</a></li>
        <li <?php if ($url === '/portfolio/contact.php'){ echo "class='active'";} ?>><a href="contact.php">Contact</a></li> 
      </ul>
    </nav>
