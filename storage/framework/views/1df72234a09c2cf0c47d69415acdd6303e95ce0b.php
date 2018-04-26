<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-2">

          <?php if($errors->any()): ?>
          <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
    <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">Registro ficha</div><br>
                <div class="panel-body">

                  <?php if(isset($profesor)): ?>
                    <?php echo Form::model($profesor, ['route' => ['profesor.update', $profesor->nombre], 'method' => 'post']); ?>

                    <?php else: ?>
                  <?php echo Form::open( ['route' => ['profesor.store'], 'method' =>'post','style'=>'form-bootstrap'] ); ?>

                    <?php endif; ?>
                    <?php echo Form::label('nombre','  Nombre'); ?>

                    <?php echo Form::text('nombre', null); ?>

                    <?php echo Form::label('apellidoP','Apellido Paterno'); ?>

                    <?php echo Form::text('apellidoP', null); ?>

                    <?php echo Form::label('apellidoM','Apellido Materno'); ?>

                    <?php echo Form::text('apellidoM', null); ?>

                    <?php echo Form::label('centro','Centro'); ?>

                    <?php echo Form::text('centro', null); ?>

                    <?php echo Form::label('correo','Correo'); ?>

                    <?php echo Form::text('correo', null); ?>

                    <?php echo Form::label('cargo','Cargo'); ?>

                    <?php echo Form::text('cargo', null); ?>

                    <?php echo Form::label('departamento','Departamento'); ?>

                    <?php echo Form::text('departamento', null); ?>

                    <?php echo Form::label('celular','Celular'); ?>

                    <?php echo Form::text('celular', null); ?>

                    <?php echo Form::label('telExt','Telefono Extension'); ?>

                    <?php echo Form::text('telExt', null); ?><br><br>

                    <?php echo Form::submit('Aceptar', ['class' => 'btn btn-primary']); ?>

                    <?php echo Form::close(); ?>

                          </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>