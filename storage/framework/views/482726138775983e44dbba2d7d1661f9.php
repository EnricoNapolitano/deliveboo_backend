<div class="container">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger mt-5 mb-0">
        <ul class="m-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
</div><?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/includes/alerts/errors.blade.php ENDPATH**/ ?>