<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AB Slides</title>
        <link rel="stylesheet" href="<?php echo e(URL::asset('/css/app.css')); ?>" type="text/css">
        <script type="text/javascript" src="<?php echo e(URL::asset('/js/app.js')); ?>" defer></script>
    </head>
    <body>
        <div class="navbar">
            <?php echo $__env->yieldContent('title'); ?>
        </div>
        <div class="flex-center position-ref full-height">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>
