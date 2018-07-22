<?php $__env->startSection('title'); ?>
    <span>Slides Presentation</span>
    <button class="btn btn-standard right">?</button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="pannel">
        <div class="video">
            <h4>&nbsp;↓ this is me ↓&nbsp;</h4>
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
        <div class="index">
            <h4>Slides Index:</h4>
            <ul>
                <li>slide 01</li>
                <li>slide 02</li>
                <li>slide 03</li>
                <li>...</li>
            </ul>
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