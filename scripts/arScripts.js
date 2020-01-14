function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

AFRAME.registerComponent('cursor-listener', {
    init: function() {
        this.el.addEventListener('click', function(evt) {
            document.getElementById("myModal").style.display = "block";
        });
    }
});

AFRAME.registerComponent('audiohandler', {
    init: function() {
        let playing = false;
        let audio = document.querySelector("#arAudio");
        this.el.addEventListener('click', () => {
            if (!playing) {
                audio.play();
                this.el.setAttribute("material", "src:#pauseButtonTexture");
            } else {
                audio.pause();
                this.el.setAttribute("material", "src:#playButtonTexture");
            }
            playing = !playing;
        });
    }
});

AFRAME.registerComponent('navigate-on-click', {
    schema: {
        url: {
            default: ''
        }
    },

    init: function() {
        var data = this.data;
        var el = this.el;

        this.el.addEventListener('click', function(evt) {
            window.location.href = data.url;
        });
    }
});