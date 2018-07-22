<?php $__env->startSection('content'); ?>
    <h2>Ask a Question</h2>
    <form class="form" action="/ask" method="post">
        <div class="component">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" value="">
        </div>
        <div class="component">
            <label for="message">Your Question</label>
            <textarea name="message" id="message" rows="4" cols="40"></textarea>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>