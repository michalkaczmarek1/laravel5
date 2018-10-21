<?php $__env->startSection('content'); ?>

<?php if(Session::has('employer_created')): ?>
<div class="alert alert-success">
     <?php echo e(Session::get('employer_created')); ?>

</div>
<?php endif; ?>

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Pracownicy&nbsp;<a href="/admin" class="btn-sm btn-info" style="float: right">Powrót</a>&nbsp;<a href="/admin/employers/create" class="btn-sm btn-success" style="float: right">Dodaj pracownika</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          <?php $__currentLoopData = $employers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employer->id); ?></td>
                <td><?php echo e($employer->name); ?></td>
                <td><?php echo e($employer->surname); ?></td>
                <td>
                    <a href="<?php echo e(action('Admin\EmployerController@show', $employer->id)); ?>" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>