<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-start my-5">Ciao <?php echo e(Auth::user()->name); ?></h1>
    <h6 class="text-custom-secondary">ecco il tuo ristorante:</h6>
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-5">
            <?php if(isset($res->image)): ?>
            <img src="<?php echo e(asset('storage/' . $res->image)); ?>" class="img-fluid rounded-start" alt="$res->name">
            <?php else: ?>
            <img src="<?php echo e(asset('storage/upload/placeholder-image.jpg')); ?>" class="img-fluid rounded-top" alt="immagine non caricata">
            <?php endif; ?>
          </div>
          <div class="col-md-7">
            <div class="d-flex flex-column justify-content-between h-100">

                <div class="card-body">
                  <h1 class="card-title custom-text-title"><?php echo e($res->name); ?></h1>
                  <p class="card-text"><?php echo e($res->description); ?></p>
                  <p class="card-text"><small class="text-custom-secondary my-4">di <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?></small></p>

                  <!-- type of restaurant -->
                  <h5 class="text-custom-primary">Tipo attività</h5>
                  <div class="d-flex">
                    <?php $__empty_1 = true; $__currentLoopData = $res->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card type-card me-1">
                      <img class="img-fluid" src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->name); ?>">
                      <h5 class="text-center mt-1"><?php echo e($type->name); ?></h5>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    -
                    <?php endif; ?>
                  </div>

                </div>

                <div class="d-flex justify-content-start m-3">
                  <a class="btn btn-small btn-custom-secondary d-flex align-items-center m-0" href="<?php echo e(route('admin.dishes.index')); ?>">Menù</a>
                  <a class="btn btn-small btn-custom-secondary d-flex align-items-center ms-2" href="<?php echo e(route('admin.restaurants.edit', $res->id)); ?>">Modifica</a>
                </div>

            </div>
          </div>
        </div>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\deliveboo_back\resources\views/dashboard.blade.php ENDPATH**/ ?>