<?php $__env->startSection('content'); ?>
    <h1>Editar Cliente</h1>
    <form action="<?php echo e(route('clientes.update', $cliente->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="nome" value="<?php echo e($cliente->nome); ?>">
        <input type="email" name="email" value="<?php echo e($cliente->email); ?>">
        <input type="text" name="telefone" value="<?php echo e($cliente->telefone); ?>">
        <input type="file" name="foto">
        <button type="submit">Atualizar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\essnt\resources\views/clientes/edit.blade.php ENDPATH**/ ?>