// check_cookie_wall()
function toggle_cookiewall(){
    console.log("Cookie wall weggeclicked", "true");
    document.getElementById("cookies").style.display = "none";
}
/*
function check_cookie_wall(){
    let cookies = localStorage.getItem("Cookie wall weggeclicked");
    var x document.getElementById("cookies")
    if (cookies === "true"){
        .style.display = "none";
    }
}
*/

checkdarkmode()
document.getElementById("switch_color_mode").addEventListener("click", switch_color_mode);
function switch_color_mode(){
    var x = document.getElementById("color_mode")
    if(x.href.includes("portfolio-darkmode.css")){
        x.href = "portfolio-lightmode.css";
        console.log("lightmode")
        localStorage.setItem("darkmode", "false")
    }
    else{
        x.href = "portfolio-darkmode.css";
        console.log("darkmode")
        localStorage.setItem("darkmode", "true")
    }
}
function checkdarkmode(){
    let darkmodestatus = localStorage.getItem("darkmode");
    var x = document.getElementById("color_mode")
    if (darkmodestatus === "true"){
        x.href = "portfolio-darkmode.css";
    }
    else{
        x.href = "portfolio-lightmode.css";
    }
}

var today = new Date()
var curHr = today.getHours()
    if (curHr >= 0 && curHr < 6) {
        document.getElementById("time-greet").innerHTML = 'goedenacht, welkom op mijn portfolio website';
    } else if (curHr >= 6 && curHr <= 12) {
        document.getElementById("time-greet").innerHTML = 'Goedemorgen, welkom op mijn portfolio website';
    } else if (curHr >= 12 && curHr < 17) {
        document.getElementById("time-greet").innerHTML = 'Goedemiddag, welkom op mijn portfolio website';
    } else {
        document.getElementById("time-greet").innerHTML = 'Goedenavond, welkom op mijn portfolio website';
    }
    function toggleMenu() {
        document.getElementById("mobile-nav").classList.toggle("show-mobile-nav");
      }
