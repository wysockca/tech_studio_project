console.log("connected");


var spellBtn = document.getElementsByClassName("spellBtn");

spellBtn.addEventListener("click", playsparkle, false);

function playsparkle(e){
	var sound = new sound("assets/sparkle.mp3");

function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    this.stop = function(){
        this.sound.pause();
    }
}
	sound.play();
};



var avatar = document.getElementById("avatar");

avatar.addEventListener("click", playshine, false);

function playshine(e){
var sound = new sound("assets/shine.mp3");

function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    this.stop = function(){
        this.sound.pause();
    }
}
sound.play();
};