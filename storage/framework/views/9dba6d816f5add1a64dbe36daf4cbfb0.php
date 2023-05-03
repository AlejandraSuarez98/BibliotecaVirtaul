;
<?php $__env->startSection('titulo', 'Registro de Usuarios'); ?>;
<?php $__env->startSection('caja'); ?>

<h1>Usuarios<a class="btn btn-Success" href="<?php echo e(route('usuario.create')); ?>">Nuevo</a></h1>

    <table class="table table-striped">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">correo_electronico</th>
            <th scope="col">telefono</th>
            <th scope="col">direccion</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($usuario->id); ?></th>
                <td><?php echo e($usuario->nombre); ?></td>
                <td><?php echo e($usuario->correo_electronico); ?></td>
                <td><?php echo e($usuario->telefono); ?></td>
                <td><?php echo e($usuario->direccion); ?></td>
                <td><a class="btn btn-Primary" href="<?php echo e(route('usuario.show', ['id'=> $usuario->id])); ?>">Ver</a></td>
                <td><a class="btn btn-Info" href="<?php echo e(route('usuario.edit', ['id'=> $usuario->id])); ?>">Editar</a></td>
                <td>
                    <form method="post" action="<?php echo e(route('usuario.destroy', ['id'=>$usuario->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5">No existen usuarios en esta tabla</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($usuarios->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillamadre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectobibliotecavirtual\resources\views/Usuarios.blade.php ENDPATH**/ ?>