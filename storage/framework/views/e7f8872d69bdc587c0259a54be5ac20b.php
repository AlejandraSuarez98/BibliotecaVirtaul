;
<?php $__env->startSection('titulo', 'Registro de Prestamos'); ?>;
<?php $__env->startSection('caja'); ?>

<h1>Prestamos<a class="btn btn-Primary" href="<?php echo e(route('prestamo.create')); ?>">Nuevo</a></h1>

    <table class="table table-success">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">fecha_solicitud</th>
            <th scope="col">fecha_prestamo</th>
            <th scope="col">fecha_devolucion</th>
            <th scope="col">libro_id</th>
            <th scope="col">usuario_id</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $prestamos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prestamo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($prestamo->id); ?></th>
                <td><?php echo e($prestamo->fecha_solicitud); ?></td>
                <td><?php echo e($prestamo->fecha_prestamo); ?></td>
                <td><?php echo e($prestamo->fecha_devolucion); ?></td>
                <td><?php echo e($prestamo->libro_id); ?></td>
                <td><?php echo e($prestamo->usuario_id); ?></td>
                <td><a class="btn btn-Secondary" href="<?php echo e(route('libro.show', ['id'=> $prestamo->id])); ?>">Ver</a></td>
                <td><a class="btn btn-Dark" href="<?php echo e(route('prestamo.edit', ['id'=> $prestamo->id])); ?>">Editar</a></td>
                <td>
                    <form method="post" action="<?php echo e(route('prestamo.destroy', ['id'=>$prestamo->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6">No existen prestamos en esta tabla</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($prestamos->links()); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('plantillamadre', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectobibliotecavirtual\resources\views/Prestamos.blade.php ENDPATH**/ ?>