<?php $__env->startSection('content'); ?>
    <div class="pannel">
        <div class="video">
            <video autoplay="true" id="videoElement"></video>
            <script type="text/javascript">
                var video = document.querySelector("#videoElement");

                if (navigator.mediaDevices.getUserMedia) {
                    navigator.mediaDevices.getUserMedia({video: true})
                        .then(function(stream) {
                            video.srcObject = stream;
                        })
                        .catch(function(err0r) {
                            console.log("Something went wrong!");
                        });
                }
            </script>
        </div>
        <div class="clearfix"></div>
        <div class="title">
            AB SLIDES
        </div>
    </div>

    <div class="slides">
        4:3
    </div>

    <div class="questions">
        vue questions
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>