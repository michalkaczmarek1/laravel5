<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e($actor->name); ?>&nbsp;<?php echo e($actor->surname); ?></h3>
    </div>
    <div class="panel-body">
      <?php echo e($actor->description); ?>

    </div>
    <div class="panel-footer">
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(action('Admin\ActorController@edit', $actor->id)); ?>" class="btn btn-warning">Edytuj</a>
           <?php echo Form::model($actor, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\ActorController@destroy', $actor->id]]); ?>

                <button class="btn btn-danger" type="submit">Usuń</button>
            <?php echo Form::close(); ?> 
            <a href="<?php echo e(action('InfoController@admin')); ?>" class="btn btn-info">Przejdź do panelu zarządzania</a>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(action('InfoController@admin')); ?>" class="btn btn-info">Przejdź do panelu zarządzania</a>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>