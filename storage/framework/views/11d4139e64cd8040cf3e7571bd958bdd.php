<?php $__env->startSection('title', 'about'); ?>

<?php $__env->startSection('main'); ?>
<main>
    <div class="main">
        <h1 class="page-name">aboutページです。</h1>
        <h2>ユーザー一覧</h2>
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="user-card">
            <p>ユーザー名：<?php echo e($company->user); ?></p>
            <p>所属企業：<?php echo e($company->company); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/page/template/about.blade.php ENDPATH**/ ?>