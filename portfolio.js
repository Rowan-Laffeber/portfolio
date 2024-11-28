function toggle_cookiewall(){
    console.log("Cookie wall geclicked");
    document.getElementById("cookies").style.display = "none";
}

function trigger_light_mode() {
    var element = document.body;
    element.classList.toggle("light-mode");
 }