<?php $__env->startSection('content'); ?>

<?php if(Session::has('actor_created')): ?>
<div class="alert alert-success">
     <?php echo e(Session::get('actor_created')); ?>

</div>
<?php endif; ?>

<!--Panel aktorów-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Aktorzy&nbsp;<a href="/admin" class="btn-sm btn-info" style="float: right">Powrót</a>&nbsp;<a href="/admin/actors/create" class="btn-sm btn-success" style="float: right">Dodaj aktora</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($actor->id); ?></td>
                <td><?php echo e($actor->name); ?></td>
                <td><?php echo e($actor->surname); ?></td>
                <td>
                    <a href="<?php echo e(action('Admin\ActorController@show', $actor->id)); ?>" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>