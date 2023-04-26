<?php $__env->startSection('title', 'book'); ?>

<?php $__env->startSection('main'); ?>
<main>
    <div class="main">
        <h1 class="page-name">著書一覧ページです。</h1>
        <h2>著書一覧</h2>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="user-card">
            <a href="<?php echo e(route('books.show',$book->id)); ?>"><p><?php echo e($book->title); ?></p></a>
            <p>著者:<?php echo e($book->user->name); ?></p>
            <p>コメント:<?php echo e($book->comment); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/page/book/index.blade.php ENDPATH**/ ?>