<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e($employer->name); ?> &nbsp;<?php echo e($employer->surname); ?></h3>
    </div>
    <div class="panel-body">
        <p>
            <?php echo e($employer->city); ?>

            <?php echo e($employer->salary); ?>

        </p>
    </div>
    <div class="panel-footer">
        <a href="<?php echo e(action('Admin\EmployerController@edit', $employer->id)); ?>" class="btn btn-warning">Edytuj</a>
       <?php echo Form::model($employer, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\EmployerController@destroy', $employer->id]]); ?>

            <button class="btn btn-danger" type="submit">Usuń</button>
        <?php echo Form::close(); ?> 
        <a href="<?php echo e(action('InfoController@admin')); ?>" class="btn btn-info">Powrót</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>