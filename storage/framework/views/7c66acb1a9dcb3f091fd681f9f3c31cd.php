<?php $__env->startSection('title', 'about'); ?>

<?php $__env->startSection('main'); ?>
<main>
    <div class="main">
        <h1 class="page-name">ユーザー一覧ページです。</h1>
        <h2>ユーザー一覧</h2>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="user-card">
            <a href="<?php echo e(route('users.show',$user->id)); ?>"><p><?php echo e($user->name); ?></p></a>
            <p>所属企業：<?php echo e($user->company->name); ?></p>
            <p>著書数：<?php echo e(count($user->books)); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/page/user/index.blade.php ENDPATH**/ ?>