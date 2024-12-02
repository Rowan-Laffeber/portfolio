<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="portfolio">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rowan Laffeber</title>
    <link rel="stylesheet" href="portfolio.css">
    <link id="color_mode" rel="stylesheet" href="portfolio-darkmode.css">
  </head>
  <body>
    <nav>
      <ul>
        <li id="homepage"><a href="index.php">Home</a></li>
        <li id="aboutme"><a href="portfolio.php">About me</a></li>
        <li id="projects">
          <a href="projects.php">Projecten</a>
          <ul class="dropdown">
            <li id="project1"><a href="project1.php">Project 1</a></li>
            <li id="project2"><a href="project2.php">Project 2</a></li>
            <li id="project3"><a href="project3.php">Project 3</a></li>
            <li id="project4"><a href="project4.php">Project 4</a></li>
            <li id="project5"><a href="project5.php">Project 5</a></li>
            <li id="project6"><a href="project6.php">Project 6</a></li>
          </ul>
        </li>
        <li id="interview"><a href="interview.php">Interview</a></li>
        <li id="contact"><a href="contact.php">Contact</a></li>
        <li class="lightmode"><button onclick="trigger_light_mode()" class="lightmode" id="light_mode">light mode</button></li>
      </ul>
    </nav>