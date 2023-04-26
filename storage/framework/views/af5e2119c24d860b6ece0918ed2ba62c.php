<?php $__env->startSection('title', 'top'); ?>

<?php $__env->startSection('main'); ?>
    <main>
        <div class="main">
            <h1 class="page-name">トップページです。</h1>
            <h2>一覧ページ</h2>
            <div class="card">
                <a href="<?php echo e(route('users.index')); ?>">ユーザー</a>
            </div>
            <div class="card">
                <a href="<?php echo e(route('books.index')); ?>">著書</a>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/page/top/top.blade.php ENDPATH**/ ?>