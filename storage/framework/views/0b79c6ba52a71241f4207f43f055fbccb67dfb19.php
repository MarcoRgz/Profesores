<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">  Bienvenido </div>

                <div class="card-body">
                  <div class="row justify-content-center">
                    <h1>Menu</h1>
                  </div>
                    <div class="card-body">
                    <a href="<?php echo e(route('profesor.create')); ?>" class="btn btn-success btn-block"> Registrar mis datos</a>
                    <br> <br>
                      <a href="<?php echo e(route('profesor.index')); ?>" class="btn btn-primary btn-block"> Ver  Profesores   </a>
                      <br> <br>
                      <a href="<?php echo e(route('profesor.index')); ?>" class="btn btn-primary btn-block"> Ver Habilidades de Profesores   </a>
                    </div>

                  </div>
            </div>
            <br>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>