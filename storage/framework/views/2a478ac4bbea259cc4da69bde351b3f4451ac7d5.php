<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users <a class="hollow button" href="<?php echo e(route('print_user')); ?>">PRINT</a></div>

                <div class="card-body">
                    <div class = "container">
                    
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class = "row">
                        <div class = "col-md-2">
                             <?php echo e($user->id); ?>

                        </div>
                        <div class = "col-md-2">
                            <?php echo e($user->name); ?>

                        </div>
                        <div class = "col-md-5">
                             <?php echo e($user->email); ?>

                        </div>
                        <div class = "col-md-2">
                            <a href="<?php echo e(route('show_user',['id'=>$user->id])); ?>"><input value="VIEW" class="button success hollow" type="submit">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>