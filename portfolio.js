function toggle_cookiewall(){
    console.log("Cookie wall geclicked");
    document.getElementById("cookies").style.display = "none";
}
function trigger_light_mode(){
    var x = document.getElementById("color_mode")
    if(x.href.includes("portfolio-darkmode.css")){
        x.href = "portfolio-lightmode.css";
        console.log("lightmode")
    }
    else{
        x.href = "portfolio-darkmode.css";
        console.log("darkmode")
    }
 }