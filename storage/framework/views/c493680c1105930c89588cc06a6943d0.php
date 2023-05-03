<?php $__env->startSection('title', 'Menù'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="d-flex justify-content-end mt-4 mb-3">
        <a href="<?php echo e(route('admin.dishes.create')); ?>" class="btn btn-custom-secondary"><i class="fa-solid fa-plus me-2"></i>Aggiungi Piatto</a>
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-custom-secondary ms-2"><i class="fa-solid fa-reply me-2"></i>Indietro</a>
    </div>    
    <div class="row row-cols-1">
        

            <div class="card-section d-flex flex-wrap justify-content-center">
                <?php $__currentLoopData = $dishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card" style="width: 18rem;">
                    <?php if(isset($dish->image)): ?>
                    <figure class="rounded-top">
                        <img src="<?php echo e(asset('storage/' . $dish->image)); ?>" class="card-img-top img-custom" alt="<?php echo e($dish->name); ?>">
                    </figure>
                    <?php else: ?>
                    <figure class="rounded-top">
                        <img src="<?php echo e(asset('storage/' . 'upload/placeholder-image.jpg')); ?>" class="card-img-top img-custom" alt="<?php echo e($dish->name); ?>">
                    </figure>
                    <?php endif; ?>
        
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h3 class="title-card text-uppercase custom-text-title"><?php echo e($dish->name); ?></h3>
                        <?php if($dish->description): ?>
                        <p class="paragraph-card card-text"><?php echo e($dish->description); ?></p>
                        <?php endif; ?>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-custom-secondary price-position">€<?php echo e($dish->price); ?></span>
                            <div class="form-check form-switch">
                                
                                <form action="<?php echo e(route('admin.dishes.toggle', $dish->id)); ?>" method="POST">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php echo csrf_field(); ?>
                                    <span>Pubblica</span>
                                    <button type="submit" class="btn btn-outline p-0" id="toggle">
                                        <i class="fa-solid fa-2x fa-toggle-<?php echo e($dish->is_visible ? 'on' : 'off'); ?> <?php echo e($dish->is_visible ? 'custom-text-title' : 'text-custom-secondary'); ?>"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <div><?php echo e($dish->is_visible ? 'Visibile' : 'Bozza'); ?></div>
                            <div class="d-flex">
                                <a href="<?php echo e(route('admin.dishes.edit', $dish->id)); ?>" class="btn btn-sm btn-custom-secondary" >Modifica</a>
                                <form action="<?php echo e(route('admin.dishes.destroy', $dish->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="delete ms-2 btn btn-sm btn-custom-secondary" >Elimina</button>
                                        <!-- modal -->
                                        <div id="modal">

                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    const modal = document.getElementById('modal');
    const deleteButtons = document.querySelectorAll('.delete');
    
    deleteButtons.forEach(element => {
        element.addEventListener('click', (e)=>{
            e.preventDefault();
            let deleteDish = false;
            modal.innerHTML = `
            <div class="modale d-flex justify-content-center align-items-center">
                <div class="box-modale">
                    <p><span class="text-danger">Attenzione!</span></p>
                    <p>Sei sicuro di voler eliminare questo piatto? Una volta cancellato non sarà più possibile recuperarlo.</p>
                    <div id="proceed" class="btn btn-custom-secondary me-3" >Procedi</div>
                    <div id="cancel" class="btn btn-custom-secondary">Annulla</div>
                </div>
            </div>
            `;

            const proceedBtn = document.getElementById('proceed');
            const cancelBtn = document.getElementById('cancel');

            proceedBtn.addEventListener('click', ()=>{
                const form = element.parentElement;
                form.submit();
                modal.innerHTML = '';
            });

            cancelBtn.addEventListener('click', ()=>{
                modal.innerHTML = '';
            })
        })
    });
        
        


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/admin/dishes/index.blade.php ENDPATH**/ ?>