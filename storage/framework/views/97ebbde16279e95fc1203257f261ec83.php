<?php $__env->startSection('title', 'book'); ?>

<?php $__env->startSection('main'); ?>
<main>
    <div class="main">
        <h1 class="page-name">著書一覧ページです。</h1>
        <h2>著書詳細</h2>
        <div class="user-card">
            <p><?php echo e($book->title); ?></p>
            <p>著者:<?php echo e($book->user->name); ?></p>
            <p>コメント:<?php echo e($book->comment); ?></p>
        </div>
        <form class="delete" method="post" action="<?php echo e(route('books.destroy', $book->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="削除">
        </form>

    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/page/book/show.blade.php ENDPATH**/ ?>