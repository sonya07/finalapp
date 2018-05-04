<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">COSMOS Guests</div>

                <div class="card-body">
                    <div class = "container">
                    <form  action="<?php echo e(route('export_guests')); ?>" method="post">
                    <?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class = "row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="<?php echo e($guest->year); ?>">
                                <label class ="form-check-label">
                                    <?php echo e($guest->year); ?>-
                                </label>
                                <label class ="form-check-label">
                                    <?php echo e($guest->total); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="submit" class="btn btn-primary">Export COSMOS</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>