<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style = "text-align:center">Добро пожаловать, <?php echo e(Auth::user()->name); ?> !
               <form method="post" action="<?php echo e(route('upload_file')); ?>" enctype="multipart/form-data">
					<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
					<input type="file" multiple name="file[]">
					<button type="submit">Загрузить</button>
				</form>
				
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>