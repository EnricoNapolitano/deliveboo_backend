<div class="container">
    <?php if(session('msg')): ?>
    <div class="alert alert-<?php echo e(session('type') ?? 'info'); ?> mt-5"><?php echo e(session('msg')); ?></div>
    <?php endif; ?>
</div><?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/includes/alerts/session.blade.php ENDPATH**/ ?>