<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">COSMOS Guests</div>

                <div class="card-body">
                    <div class = "container">
                    <form  action="<?php echo e(route('export_guests')); ?>" method="post">                    
                        <button type="submit" class="btn btn-primary">EXPORT</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>