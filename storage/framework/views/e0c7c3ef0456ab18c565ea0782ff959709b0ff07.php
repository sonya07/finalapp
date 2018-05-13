<?php if($message = Session::get('success')): ?>

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong><?php echo e($message); ?></strong>

</div>

<?php endif; ?>