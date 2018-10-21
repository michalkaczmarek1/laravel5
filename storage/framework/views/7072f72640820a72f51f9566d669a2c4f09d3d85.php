
<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('name', 'Imię: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('surname', 'Nazwisko: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('surname', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('city', 'Miasto: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('city', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('salary', 'Płaca: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('salary', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <?php echo Form::submit($buttonText, ['class' => 'btn btn-primary']); ?>

    </div>
</div>

<a href="<?php echo e(action('InfoController@admin')); ?>" class="btn btn-info">Powrót</a>