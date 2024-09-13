<?php $__env->startSection('content'); ?>
    <h1>Lista de Clientes</h1>
    <a href="<?php echo e(route('clientes.create')); ?>">Adicionar Cliente</a>

    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <img src="<?php echo e(asset('fotos/'.$cliente->foto)); ?>" alt="<?php echo e($cliente->nome); ?>" width="50">
            <p><?php echo e($cliente->nome); ?></p>
            <a href="<?php echo e(route('clientes.edit', $cliente->id)); ?>">Editar</a>
            <form action="<?php echo e(route('clientes.destroy', $cliente->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Excluir</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\essnt\resources\views/clientes/index.blade.php ENDPATH**/ ?>