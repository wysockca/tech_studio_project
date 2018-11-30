console.log("connected");
        window.onload = function(){
        if (window.matchMedia("(max-width: 480px)").matches) {
        	var spell = document.getElementById("spellimg");

        spell.addEventListener("touchstart", playspankle, false);

        function playspankle(e){
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
            document.getElementById("spellButton");
            spellButton.style.display = "block";
        };
    } else {
        var spell = document.getElementById("spellimg");

        spell.addEventListener("click", playspankle, false);

        function playspankle(e){
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
            document.getElementById("spellButton");
            spellButton.style.display = "block";
        };
    }
}