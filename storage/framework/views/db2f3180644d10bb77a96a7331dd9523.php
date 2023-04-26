<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="expires" content="604800">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <title><?php echo $__env->yieldContent('title'); ?>ページ | Laravel</title>
    <meta name="description" content="aboutページのdescriptionです">
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('front.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('main'); ?>

    <?php echo $__env->make('front.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/front/layouts/master.blade.php ENDPATH**/ ?>