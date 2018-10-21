<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            
                <?php echo $__env->make('clients.form.form_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <?php echo Form::model($client, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['Admin\ClientController@update', $client->id]]); ?>

            		
                <?php echo $__env->make('clients.form.form', ['buttonText'=>'Zapisz zmiany'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            	<?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>