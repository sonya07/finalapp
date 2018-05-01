<!-- this uses the layout director and app.blade.php -->

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="title m-b-md">
        The Mail List  <?php echo e($version); ?><br>
        <?php if(auth()->guard()->check()): ?>
        WELCOME  <?php echo e(Auth::user()->name); ?>  !
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>