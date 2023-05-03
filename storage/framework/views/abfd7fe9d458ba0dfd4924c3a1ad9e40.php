<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            <?php echo e(__('Elimina Account')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600">
            <?php echo e(__('Una volta che il tuo account verrà eleminato, tutti i tuoi dati verranno cancellati permanentemente.')); ?>

        </p>
    </header>

    <!-- Modal trigger button -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-account">
        <?php echo e(__('Elimina Account')); ?>

    </button>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="delete-account" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="delete-account" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-account">Elimina Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-lg font-medium text-gray-900">
                        <?php echo e(__('Sei sicuro di vole eliminare il tuo Account?')); ?>

                    </h2>
                    <p class="mt-1 text-sm text-gray-600">
                        <?php echo e(__('Una volta che elimini il tuo account, tutti i dati relativi ad esso verranno definitivamente cancellati. Conferma di voler eliminare il tuo account inserendo la password.')); ?>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                    <form method="post" action="<?php echo e(route('profile.destroy')); ?>" class="p-6">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>


                        <div class="input-group">

                            <input id="password" name="password" type="password" class="form-control" placeholder="<?php echo e(__('Password')); ?>" />

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong><?php echo e($errors->userDeletion->get('password')); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



                            <button type="submit" class="btn btn-danger">
                                <?php echo e(__('Elimina Account')); ?>

                            </button>
                            <!--  -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
<?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>