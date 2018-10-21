<?php $__env->startSection('content'); ?>



<!--Panel aktorów-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Aktorzy&nbsp;<a href="/admin/actors" class="btn-sm btn-info" style="float: right">Zobacz wszystkich aktorów</a>&nbsp;<a href="/admin/actors/create" class="btn-sm btn-success" style="float: right">Dodaj aktora</a></div>

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

<!--Panel filmów-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
       <div class="panel-heading">Filmy&nbsp;<a href="/admin/movies" class="btn-sm btn-info" style="float: right">Zobacz wszystkie filmy</a>&nbsp;<a href="/admin/movies/create" class="btn-sm btn-success" style="float: right">Dodaj film</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Tytuł</th>
            <th>Rok produkcji</th>
            <th>Cena (w zł)</th>
            <th>Akcje</th>
          </tr>
          <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($movie->id); ?></td>
                <td><?php echo e($movie->title); ?></td>
                <td><?php echo e($movie->year); ?></td>
                <td><?php echo e($movie->price); ?></td>
                <td>
                    <a href="<?php echo e(action('Admin\MovieController@show', $movie->id)); ?>" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>

<!--Panel klientów-->

   <div class="panel panel-default">
      <!-- Default panel contents -->
     <div class="panel-heading">Klienci&nbsp;<a href="/admin/clients" class="btn-sm btn-info" style="float: right">Zobacz wszystkich klientów</a>&nbsp;<a href="/admin/clients/create" class="btn-sm btn-success" style="float: right">Dodaj klienta</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($client->id); ?></td>
                <td><?php echo e($client->name); ?></td>
                <td><?php echo e($client->surname); ?></td>
                <td>
                    <a href="<?php echo e(action('Admin\ClientController@show', $client->id)); ?>" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>

<!--Panel pracowników-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Pracownicy&nbsp;<a href="/admin/employers" class="btn-sm btn-info" style="float: right">Zobacz wszystkich pracowników</a>&nbsp;<a href="/admin/employers/create" class="btn-sm btn-success" style="float: right">Dodaj pracownika</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Miasto</th>
            <th>Płaca</th>
            <th>Akcje</th>
          </tr>
          <?php $__currentLoopData = $employers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employer->id); ?></td>
                <td><?php echo e($employer->name); ?></td>
                <td><?php echo e($employer->surname); ?></td>
                <td><?php echo e($employer->city); ?></td>
                <td><?php echo e($employer->salary); ?></td>
                <td>
                    <a href="<?php echo e(action('Admin\EmployerController@show', $employer->id)); ?>" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("index", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>