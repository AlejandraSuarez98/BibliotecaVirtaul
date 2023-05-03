;
<?php $__env->startSection('titulo', 'Registro de Libros'); ?>;
<?php $__env->startSection('caja'); ?>

<h1>Libros<a class="btn btn-warning" href="<?php echo e(route('libro.create')); ?>">Nuevo</a></h1>

    <table class="table table-dark">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">titulo</th>
            <th scope="col">autor</th>
            <th scope="col">editorial</th>
            <th scope="col">anio_publicacion</th>
            <th scope="col">cantidad_disponible</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($libro->id); ?></th>
                <td><?php echo e($libro->titulo); ?></td>
                <td><?php echo e($libro->autor); ?></td>
                <td><?php echo e($libro->editorial); ?></td>
                <td><?php echo e($libro->anio_publicacion); ?></td>
                <td><?php echo e($libro->cantidad_disponible); ?></td>
                <td><a class="btn btn-info" href="<?php echo e(route('libro.show', ['id'=> $libro->id])); ?>">Ver</a></td>
                <td><a class="btn btn-success" href="<?php echo e(route('libro.edit', ['id'=> $libro->id])); ?>">Editar</a></td>
                <td>
                    <form method="post" action="<?php echo e(route('libro.destroy', ['id'=>$libro->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="4">No existen libros en esta tabla</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($libros->links()); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('plantillamadre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectobibliotecavirtual\resources\views/Libros.blade.php ENDPATH**/ ?>