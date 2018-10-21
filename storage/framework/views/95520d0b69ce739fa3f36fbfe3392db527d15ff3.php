<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="list-group">
      <a href="<?php echo e(url("/info/show/actor", $actor->id)); ?>" class="list-group-item">
          <?php echo e($actor->name); ?>&nbsp;<?php echo e($actor->surname); ?>

      </a>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>