<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Informacion General </div>

                <div class="panel-body">
                 <?php if($profesor): ?>
                  <table class="table table-striped">
                 <thead>
                     <th>id</th>
                     <th>nombre</th>
                     <th>Apellido Paterno</th>
                     <th>Apellido Materno</th>
                     <th>Centro</th>
                     <th>Correo</th>
                     <th>Cargo</th>
                     <th>Departamento</th>
                     <th>Celular</th>
                     <th>Telefono - Ext</th>
                     <th>Fecha creacion</th>
                   </thead>

                   <tr>
                     <?php $__currentLoopData = $profesor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <td><?php echo e($row->id); ?></td></a>
                       <td><a href="<?php echo e(route('skills.index', $row->id)); ?>"><?php echo e($row->nombre); ?></td></a>
                        <td><?php echo e($row->apellidoP); ?></td>
                        <td><?php echo e($row->apellidoM); ?></td>
                        <td><?php echo e($row->centro); ?></td>
                        <td><?php echo e($row->correo); ?></td>
                        <td><?php echo e($row->cargo); ?></td>
                        <td><?php echo e($row->departamento); ?></td>
                        <td><?php echo e($row->celular); ?></td>
                        <td><?php echo e($row->telExt); ?></td>
                        <td><?php echo e($row->created_at); ?></td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </table>
                 <?php endif; ?>
                </div>
            </div>
            <a href="<?php echo e(route('profesor.create')); ?>" class="btn btn-success"> Crear mi ficha </a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>