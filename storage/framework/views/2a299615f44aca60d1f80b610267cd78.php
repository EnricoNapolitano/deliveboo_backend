<section>
    <header>
        <h2 class="text-secondary">
            <?php echo e(__('Informazioni del Profilo')); ?>

        </h2>

        <p class="mt-1 text-muted">  
            <?php echo e(__("Aggiorna le informazioni relative al profilo del tuo Account.")); ?>

        </p>
    </header>

    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>

    <form method="post" action="<?php echo e(route('profile.update')); ?>" class="mt-6 space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>

        <div class="mb-2">
            <label for="name"><?php echo e(__('Nome')); ?></label>
            <input class="form-control" type="text" name="name" id="name" autocomplete="name" value="<?php echo e(old('name', $user->name)); ?>" required autofocus>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->get('name')); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-2">
            <label for="email">
                <?php echo e(__('Email')); ?>

            </label>

            <input id="email" name="email" type="email" class="form-control" value="<?php echo e(old('email', $user->email)); ?>" required autocomplete="username" />

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert alert-danger mt-2" role="alert">
                <strong><?php echo e($errors->get('email')); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
            <div>
                <p class="text-sm mt-2 text-muted">
                    <?php echo e(__('Your email address is unverified.')); ?>


                    <button form="send-verification" class="btn btn-outline-dark">
                        <?php echo e(__('Click here to re-send the verification email.')); ?>

                    </button>
                </p>

                <?php if(session('status') === 'verification-link-sent'): ?>
                <p class="mt-2 text-success">
                    <?php echo e(__('A new verification link has been sent to your email address.')); ?>

                </p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="d-flex align-items-center gap-4">
            <button class="btn btn-custom-secondary" type="submit"><?php echo e(__('Save')); ?></button>

            <?php if(session('status') === 'profile-updated'): ?>
            <script>
                const show = true;
                setTimeout(() => show = false, 2000)
                const el = document.getElementById('profile-status')
                if (show) {
                    el.style.display = 'block';
                }
            </script>
            <p id='profile-status' class="fs-5 text-muted"><?php echo e(__('Aggiornamento salvato.')); ?></p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\laravel\deliveboo_back\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>