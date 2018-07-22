/**
 *
 */

const pannel = new Vue({
    el: '#pannel',
    data: {
        videoElement: $("#videoElement"),
        slidesIndex: []
    },
    methods: {
        enableCamera: function() {
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({video: true})
                    .then(function(stream) {
                        this.videoElement.srcObject = stream
                    })
                    .catch(function(e) {
                        this.videoElement.html("Something went wrong!\n"+e)
                    });
            }
        }
    },
    created () {
        this.enableCamera()

        try {
            fetch('/api/slides/')
                .then(response => response.json())
                .then(json => {
                    this.slidesIndex = json
                    slides.setActive(json[0])
                })
        } catch (e) {
            this.slidesIndex = [e]
        }
    }
});

/**
 *
 */

const slides = new Vue({
    el: '#slides',
    data: {
        slideContent: 'Loading...'
    },
    methods: {
        setActive: function(slidePath) {
            $.ajax({
                url: '/api/slides/' + slidePath,
                complete: function (response) {
                    slides.slideContent = response.responseText
                }
            });
        }
    }
});
