<?php $__env->startSection('title', 'about'); ?>

<?php $__env->startSection('main'); ?>
<main>
    <div class="main">
        <h1 class="page-name">ユーザー詳細ページです。</h1>
        <h2>ユーザー詳細</h2>
        <div class="user-card">
          <p><?php echo e($user->name); ?></p>
          <p>所属企業：<?php echo e($user->company->name); ?></p>
          <form class="delete" method="post" action="<?php echo e(route('users.destroy', $user->id)); ?>">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>
              <input type="submit" value="削除">
          </form>
        </div>

        <h2>著書一覧</h2>
        <?php if(count($user->books) === 0): ?>
        <p>著書はありません</p>
        <?php else: ?>
            <?php $__currentLoopData = $user->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <a href="<?php echo e(route('books.show',$book->id)); ?>"><p><?php echo e($book->title); ?></p></a>
                <p>コメント:<?php echo e($book->comment); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/front/page/user/show.blade.php ENDPATH**/ ?>