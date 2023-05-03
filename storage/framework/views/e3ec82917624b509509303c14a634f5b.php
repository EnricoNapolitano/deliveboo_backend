<?php if($restaurant->exists): ?>
<!-- form edit -->
<form action="<?php echo e(route('admin.restaurants.update', $restaurant->id)); ?>" method="POST" enctype="multipart/form-data" novalidate>
<?php echo method_field('PUT'); ?>

<?php else: ?>
<!-- form upload -->
<form action="<?php echo e(route('admin.restaurants.store')); ?>" method="POST" enctype="multipart/form-data">
<?php endif; ?> 

    <?php echo csrf_field(); ?>
    <div class="row my-5">
        <!-- Input for Restaurant's name -->
        <div class="col-6">
            <h4><label class="form-label" for="restaurant-name">Ristorante</label></h4>
            <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" id="restaurant-name" value="<?php echo e(old('name', $restaurant->name)); ?>" name="name" placeholder="Inserisci il nome del tuo ristorante..."  minlength="5" maxlength="50" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger p-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Input for Restaurant's address -->
        <div class="col-6">
            <h4><label class="form-label" for="restaurant-address">Indirizzo</label></h4>
            <input class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" id="restaurant-address" value="<?php echo e(old('address', $restaurant->address)); ?>" name="address" placeholder="Inserisci l'indirizzo del tuo locale..."  minlength="5" maxlength="50" required>
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger p-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- Input to upload image -->
        <div class="col-12 mt-4 d-flex">
            <div class="col-8">
                <h4><label class="form-label" for="restaurant-image">Immagine</label></h4>
                <input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="restaurant-image" value="<?php echo e(old('image', $restaurant->image)); ?>" name="image" placeholder="Inserisci un'immagine..." required>

                <!-- textarea for Restaurant's description -->
                <div class="col-12 mt-4">
                    <h4><label class="form-label" for="restaurant-description">Descrizione</label></h4>
                    <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="restaurant-description" name="description" placeholder="Inserisci una brece descrizione del tuo locale..." cols="50" rows="10"><?php echo e(old('description', $restaurant->description)); ?></textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger p-1"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- checkboxes for type of restaurant -->
                <div class="mt-3">
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="checkbox" value="<?php echo e($type->id); ?>" id="type-<?php echo e($type->name); ?>" name="types[]"
                    <?php if(in_array($type->id, old('types', $restaurant_types ?? []))): ?> checked <?php endif; ?>>
                    <label class="me-2" for="type-<?php echo e($type->name); ?>">
                        <?php echo e($type->name); ?>

                    </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__errorArgs = ['types'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>  

            
            <div class="col-4 p-4 mt-1">
                <img src="<?php echo e(asset('storage/' . $restaurant->image)); ?>" class="img-fluid rounded" alt="<?php echo e($restaurant->name); ?>"id="preview">
            </div>
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger p-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>
    </div>

    <button type="submit" class="btn btn-custom-secondary mb-4"><i class="fa-solid fa-upload me-2"></i><?php echo e($restaurant->exists ? 'Aggiorna' : 'Carica'); ?></button>
    <?php if($restaurant->exists): ?>
    <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-custom-secondary mb-4" id="go-back"><i class="fa-solid fa-reply me-2"></i>Indietro</a>
    <?php endif; ?>

</form>

<!-- <?php if(Route::is('admin.restaurants.edit')): ?>
<form action="<?php echo e(route('admin.restaurants.destroy', $restaurant->id)); ?>" method="POST" id="btn-delete">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button class="btn btn-outline-danger" onclick="return confirm('Sicuro che vuoi cancellare il ristorante?')"><i class="fa-solid fa-trash-can"></i></button>
</form>
<?php endif; ?> -->

<?php $__env->startSection('scripts'); ?>
<script>
const fileInput = document.getElementById('restaurant-image');
const preview = document.getElementById('preview');
const placeholder = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png'
const backButton = document.getElementById('go-back');

if (!backButton) {
    preview.src = placeholder
}
fileInput.addEventListener('change', () => {
    if(fileInput.files && fileInput.files[0]){
        const reader = new FileReader();
        reader.readAsDataURL(fileInput.files[0]);
        reader.onload = e => {
            preview.src = e.target.result;
        };
    }else{
        preview.src = placeholder;
    }
});

</script>
<?php $__env->stopSection(); ?><?php /**PATH C:\laravel\deliveboo_back\resources\views/includes/admin/form/restaurants/form.blade.php ENDPATH**/ ?>