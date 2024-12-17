check_cookie_wall()
document.getElementById("toggle_cookiewall_yes").addEventListener("click", toggle_cookiewall);
document.getElementById("toggle_cookiewall_no").addEventListener("click", toggle_cookiewall);
function toggle_cookiewall(){
    localStorage.setItem("cookies", "false")
    console.log("Cookie wall none");
    document.getElementById("cookies").style.display = "none";
}
function check_cookie_wall(){
    let cookiesstatus = localStorage.getItem("cookies");
    var x = document.getElementById("color_mode")
    if (cookiesstatus === "false"){
        localStorage.setItem("cookies", "false")
        console.log("Cookie wall none");
        document.getElementById("cookies").style.display = "none";
    }
    else{
        localStorage.setItem("cookies", "true")
        console.log("Cookie wall block");
        document.getElementById("cookies").style.display = "block";
    }
}

checkdarkmode()
document.getElementById("switch_color_mode").addEventListener("click", switch_color_mode);
document.getElementById("switch_color_mode_mobile").addEventListener("click", switch_color_mode);
function switch_color_mode(){   
    var x = document.getElementById("color_mode")
    if(x.href.includes("assets/portfolio-darkmode.css")){
        x.href = "assets/portfolio-lightmode.css";
        console.log("lightmode")
        localStorage.setItem("darkmode", "false")
    }
    else{
        x.href = "assets/portfolio-darkmode.css";
        console.log("darkmode")
        localStorage.setItem("darkmode", "true")
    }
}
function checkdarkmode(){
    let darkmodestatus = localStorage.getItem("darkmode");
    var x = document.getElementById("color_mode")
    if (darkmodestatus === "true"){
        x.href = "assets/portfolio-darkmode.css";
    }
    else{
        x.href = "assets/portfolio-lightmode.css";
    }
}

var today = new Date()
var curHr = today.getHours()
    if (curHr >= 0 && curHr < 6) {
        document.getElementById("time-greet").innerHTML = 'goedenacht, welkom op mijn portfolio website';
        console.log("goedenacht");
    } else if (curHr >= 6 && curHr <= 12) {
        document.getElementById("time-greet").innerHTML = 'Goedemorgen, welkom op mijn portfolio website';
        console.log("goedemorgen");
    } else if (curHr >= 12 && curHr < 17) {
        document.getElementById("time-greet").innerHTML = 'Goedemiddag, welkom op mijn portfolio website';
        console.log("goedemiddag");
    } else {
        document.getElementById("time-greet").innerHTML = 'Goedenavond, welkom op mijn portfolio website';
        console.log("goedenavond");
    }

function toggleMenu() {
    document.getElementById("mobile-nav").classList.toggle("show-mobile-nav");
    console.log("hamburger menu");
    }

var vuurwerk_countdown = new Date("dec 31, 2024 00:20:00").getTime();

var vuurwerk = setInterval(function() {

  var now = new Date().getTime();
    
  var distance = vuurwerk_countdown - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("countdown1").innerHTML = "vuurwerk afsteken over: " + days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  if (distance < 0) {
    clearInterval(vuurwerk);
    document.getElementById("countdown1").innerHTML = "Tijd voor vuurwerk!";
    console.log("timer klaar");
  }
}, 1000);

var teller = 10;
var teller_fuction = setInterval(function(){
    teller--;
    document.getElementById("countdown2").innerHTML = teller;
    if (teller <= 0) {
        clearInterval(teller_fuction);
        document.getElementById("countdown2").innerHTML = "teller is klaar";
        console.log("teller is klaar");
    }
}, 1000);  
