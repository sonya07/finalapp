<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Guests</div>

                <div class="card-body">
                    <div class = "container">
                    
                    <?php $__currentLoopData = $guest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guestSolo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class = "row">
                        <div class = "col-md-2">
                             <?php echo e($guestSolo->id); ?>

                        </div>
                        <div class = "col-md-2">
                            <?php echo e($guestSolo->fname); ?>

                        </div>
                        <div class = "col-md-5">
                             <?php echo e($guestSolo->lame); ?>

                        </div>
                        <div class = "col-md-2">
                            <a href="<?php echo e(route('show_user',['id'=>$guest->id])); ?>"><input value="VIEW" class="button success hollow" type="submit">
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