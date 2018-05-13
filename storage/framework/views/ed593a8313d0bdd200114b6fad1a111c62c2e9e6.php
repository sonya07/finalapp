<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users <a class="hollow button" href="<?php echo e(route('print_user')); ?>">PRINT</a></div>
                <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="card-body">
                    <div class = "container">
                    <div class="medium-2  columns"><a class="button hollow success" href="<?php echo e(route('create_user')); ?>">ADD NEW USER</a></div>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class = "row">
                        <div class = "col-md-2">
                             <?php echo e($user->id); ?>

                        </div>
                        <div class = "col-md-2">
                            <?php echo e($user->name); ?>

                        </div>
                        <div class = "col-md-4">
                             <?php echo e($user->email); ?>

                        </div>
                        <div class = "col-md-1">
                            <a class="hollow button" href="<?php echo e(route('show_user',['id'=>$user->id])); ?>">EDIT</a>
                        </div>
                        <div class = "col-md-1">
                            <?php echo Form::open(array('url' => '/users/delete/' . $user->id)); ?>

                            <?php echo Form::hidden('_method', 'DELETE'); ?>

                            <?php echo Form::submit('DELETE', array('class' => 'btn btn-danger')); ?>

                            <?php echo Form::close(); ?>

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