console.log("connected");
        window.onload = function(){

if (window.matchMedia("(max-width: 480px)").matches) {

        var avatar = document.getElementById("kitty");
        var win = document.getElementById("userinfo");

        avatar.addEventListener("touchstart", playshine, false);

        function playshine(e){
        var sound = new sound("assets/shine.mp3");
        console.log("clicked");
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
        var pTag = document.createElement("p");
        var text = document.createTextNode("Congratulations! You have mastered magic!");
        pTag.appendChild(text);

        win.innerHTML = '';
        win.appendChild(pTag);
        };

    } else {

        var avatar = document.getElementById("kitty");
        var win = document.getElementById("userinfo");

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

        var hTag = document.createElement("h1");
        var text = document.createTextNode("Congratulations! You have mastered magic!");
        hTag.appendChild(text);

        win.innerHTML = '';
        win.appendChild(hTag);
        };
}
}