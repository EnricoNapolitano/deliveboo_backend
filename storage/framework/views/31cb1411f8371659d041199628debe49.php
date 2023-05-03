<?php $__env->startSection('content'); ?>

<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        <?php echo e(__('Profile')); ?>

    </h2>
    <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        <?php echo $__env->make('profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        <?php echo $__env->make('profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        <?php echo $__env->make('profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/profile/edit.blade.php ENDPATH**/ ?>