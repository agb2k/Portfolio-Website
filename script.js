var audio = new Audio("AstroWorldBeat.mp3");
audio.play();

function playPause(){
    if(audio.paused){
        audio.play();
        document.getElementById("pausePlay").className = "fas fa-pause-circle fa-4x";
    }else{
        audio.pause();
        document.getElementById("pausePlay").className = "fas fa-play-circle fa-4x";
    }
}