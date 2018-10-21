<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e($client->name); ?> &nbsp;<?php echo e($client->surname); ?></h3>
    </div>
    <div class="panel-body">
        <h3>Dodany: &nbsp;<?php echo e($client->created_at); ?>. Zaaktualizowany:&nbsp;<?php echo e($client->updated_at); ?> </h3>
    </div>
    <div class="panel-footer">
        <a href="<?php echo e(action('Admin\ClientController@edit', $client->id)); ?>" class="btn btn-warning">Edytuj</a>
       <?php echo Form::model($client, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\ClientController@destroy', $client->id]]); ?>

            <button class="btn btn-danger" type="submit">Usuń</button>
        <?php echo Form::close(); ?> 
        <a href="<?php echo e(action('InfoController@admin')); ?>" class="btn btn-info">Powrót</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>