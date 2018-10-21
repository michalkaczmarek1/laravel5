<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="list-group">
      <a href="<?php echo e(url("/info/show/movie", $movie->id)); ?>" class="list-group-item active">
        <?php echo e($movie->title); ?>

      </a>
      <p href="#" class="list-group-item">Cena:&nbsp;<?php echo e($movie->price); ?></p>
      <p href="#" class="list-group-item">Rok produkcji:&nbsp;<?php echo e($movie->year); ?></p>
      <p href="#" class="list-group-item">Dodano:&nbsp;<?php echo e($movie->created_at); ?></p>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<a href="/info/movies" class="btn btn-info" style="margin-top: 10px">Filmy</a>
<a href="/info/actors" class="btn btn-info" style="margin-top: 10px">Aktorzy</a>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>