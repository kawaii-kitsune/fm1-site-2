var isPlaying ;
var audio=new Audio("http://147.95.18.81:8000/live");

function showHistory(){ 
    if(document.getElementById("historyList").style.visibility=="hidden"){
        $("#historyList").css({opacity: 0.0, visibility: "visible"}).animate({opacity: 1.0}, 200);
    }else{
        $("#historyList").css({opacity: 1.0, visibility: "hidden"}).animate({opacity: 0.0}, 200);
}}
function Play(){ 
    changeState(true)
    audio.play();
    document.getElementById("buttonPlay").style.display="none" ;
    document.getElementById('buttonPause').style.display="block";
    document.getElementById("buttonPlay1").style.display="none" ;
    document.getElementById('buttonPause1').style.display="block";
    var element = document.getElementById("lp");
    element.classList.add("spin");
}

function Pause(){
    document.getElementById('buttonPlay').style.display="block"; 
    document.getElementById('buttonPause').style.display="none";
    document.getElementById('buttonPlay1').style.display="block"; 
    document.getElementById('buttonPause1').style.display="none";
    changeState(false);
    var element = document.getElementById("lp");
    element.classList.remove("spin");
    audio.pause()
}

function changeState(state){
    isPlaying=state;
}
function getState(){
    return isPlaying;
}
function SetVolume(val)
{   
    audio.volume=val;
}
function SetVolumeDown(val)
{   
    audio.volume-=val;
}
function SetVolumeUp(val)
{   
    audio.volume+=val;
}