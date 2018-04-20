<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <?php if($errors->any()): ?>
          <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
    <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">Registro profesores</div>
                <div class="panel-body">
                  <form>
                    <?php if(isset($profesor)): ?>
                      <?php echo Form::model($profesor, ['route' => ['profesor.create',
                       $profesor->id], 'method' => 'patch']); ?>

                      <?php else: ?>
                    <?php echo Form::open(['route' => 'profesor.store']); ?>

                      <?php endif; ?>
                      <?php echo Form::label('nombre','  Nombre'); ?>

                      <?php echo Form::text('nombre', null); ?><br>
                      <?php echo Form::label('apellido','Apellido'); ?>

                      <?php echo Form::text('apellido', null); ?><br>
                      <?php echo Form::submit('Aceptar', ['class' => 'btn btn-primary']); ?>

                      <?php echo Form::close(); ?>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>