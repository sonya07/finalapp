<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Lists</div>

                    <div class="card-body">
                    <?php echo e(Form::open(array('url'=>'form-submit'))); ?>

  
                    <?php echo e(Form::close()); ?>

                        
                    <!--Radio group-->
                    http://clivern.com/how-to-build-forms-with-laravel/
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>