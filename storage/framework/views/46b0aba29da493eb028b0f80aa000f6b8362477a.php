<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Lists</div>

                    <div class="card-body">
                        <form>  
                            <!--Radio group-->
                            <div class="form-check">
                            <input name="radio3years" type="radio" class="with-gap" id="radio3years">
                            <label for="radio106">Grid - 2018, 2017, 2016</label>
                            </div>

                            <div class="form-check">
                            <input name="radioPA" type="radio" class="with-gap" id="radioPA" checked>
                            <label for="radio107">Grid - PA</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </form>
                        
                        <!--Radio group-->
            
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>