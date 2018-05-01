<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">COSMOS Guests</div>

                <div class="card-body">
                    <div class = "container">
                    
                    <?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class = "row">
                        <div class = "col-md-2">
                            <?php echo e($guest->first_name); ?>

                        </div>
                        <div class = "col-md-2">
                             <?php echo e($guest->last_name); ?>

                        </div>
                        <div class = "col-md-2">
                             <?php echo e($guest->address_1); ?>

                             <?php echo e($guest->address_2); ?>

                        </div>
                        <div class = "col-md-2">
                             <?php echo e($guest->city); ?>

                        </div>
                        <div class = "col-md-1">
                             <?php echo e($guest->state); ?>

                        </div>
                        <div class = "col-md-2">
                             <?php echo e($guest->zip); ?>

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