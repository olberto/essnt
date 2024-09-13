<?php $__env->startSection('content'); ?>
    <h1>Cadastrar Cliente</h1>
    <form action="<?php echo e(route('clientes.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="file" name="foto">
        <button type="submit">Salvar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\essnt\resources\views/clientes/create.blade.php ENDPATH**/ ?>