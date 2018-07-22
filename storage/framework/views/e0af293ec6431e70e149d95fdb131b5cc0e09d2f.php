<?php $__env->startSection('title'); ?>
    <span>Ask a Question</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="ask-form">
        <div class="float-left form-group col-lg-5 col-md-6 col-sm-12">
            <label class="control-label" for="name">Your Name</label>
            <input id="name" class="form-control" type="text">
        </div>
        <div class="float-left form-group col-lg-5 col-md-6 col-sm-12">
            <label class="control-label" for="message">Your Question</label>
            <textarea id="message" class="form-control"></textarea>
        </div>
        <div class="float-left form-group col-lg-2 col-md-12 col-sm-12">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>