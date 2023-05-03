<?php $__env->startSection('title', 'Orders'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    
    <header class="d-flex align-items-center justify-content-between">
        <h1 class="my-5">Ordini</h1>
    </header>
    
    <table class="table table table-striped">
        <thead>
            <tr>
                
                <th scope="col">Indirizzo di Consegna</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">N. Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Prezzo Tot</th>
                <th scope="col">Pagato</th>
                <th scope="col">Creato</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $user_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                
                <td><?php echo e($order->delivery_address); ?></td>
                <td><?php echo e($order->customer_name); ?></td>
                <td><?php echo e($order->customer_surname); ?></td>
                <td><?php echo e($order->customer_phone_number); ?></td>
                <td><?php echo e($order->customer_email); ?></td>
                <td><?php echo e($order->total_price); ?></td>
                <td><?php if($order->is_paid): ?> <i class="fa-solid fa-check" style="color: #4888a8;"></i> <?php else: ?> <i class="fa-solid fa-x" style="color: #4888a8;"></i> <?php endif; ?></td>
                <td><?php echo e($order->getDateDiff('created_at')); ?></td>
                
            </tr>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <th scope="row" colspan="10" class="text-center">Non ci sono ordini</th>
            </tr>
            <?php endif; ?>
    
        </tbody>
    </table>

    
    <div class="d-flex justify-content-center">
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-custom-secondary">Torna Indietro</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>