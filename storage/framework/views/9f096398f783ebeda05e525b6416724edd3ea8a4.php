
<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('title', 'Tytuł: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('year', 'Rok produkcji: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('year', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('price', 'Cena: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::text('price', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('description', 'Opis: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        <?php echo Form::label('ActorList', 'Wybierz aktorów: '); ?>

    </div>
    <div class="col-md-6">
        <?php echo Form::select('ActorList[]', $actors, null, ['class' => 'form-control', 'multiple']); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <?php echo Form::submit($buttonText, ['class' => 'btn btn-primary']); ?>

    </div>
</div>

<a href="<?php echo e(action('InfoController@admin')); ?>" class="btn btn-info">Powrót</a>