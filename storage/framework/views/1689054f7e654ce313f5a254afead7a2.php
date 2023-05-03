<?php $__env->startSection('title', 'Payment'); ?>
<?php $__env->startSection('content'); ?> 
<div class="container">
    <?php if(session('success_message')): ?>
        <div class="alert alert-success mt-5">
            <?php echo e(session('success_message')); ?>

        </div>
    <?php endif; ?>
    
    <?php if(count($errors)>0): ?>
        <div class="mt-5">
            <ul>
                
            </ul>
        </div>
    <?php endif; ?>
    
    
    
    
    <!-- loro -->
    <form method="post" id="payment-form" action="<?php echo e(url('/checkout')); ?>" class="d-flex flex-column justify-content-center align-items-center mt-5">
        <?php echo csrf_field(); ?>
        <section>
            <label for="amount">
                <span class="input-label">Prezzo totale</span>
                <div class="input-wrapper amount-wrapper">
                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount"
                        value="<?php echo e($order->total_price); ?>" hidden>
                </div>
                <div><?php echo e($order->total_price); ?></div>
            </label>
    
            <div class="bt-drop-in-wrapper mb-3">
                <div id="bt-dropin"></div>
            </div>
        </section>
    
        <input id="nonce" name="payment_method_nonce" type="hidden" />
        <div class="d-flex">
            <button class="btn btn-custom-secondary" type="submit"><span>Conferma Pagamento</span></button>
            <a class="btn btn-custom-secondary ms-3" href="http://localhost:5174/">Torna alla Home</a>
        </div>
    <form>
</div>   
<?php $__env->stopSection(); ?>
    <!-- fineloro -->


<!-- SCRIPTING -->
<?php $__env->startSection('scripts'); ?>    
<script src="https://js.braintreegateway.com/web/dropin/1.36.1/js/dropin.min.js"></script> 
<script>
        var form = document.querySelector('#payment-form');
        var client_token = "<?php echo e($token); ?>";

        braintree.dropin.create({
            authorization: client_token,
            selector: '#bt-dropin',
            paypal: {
                flow: 'vault'
            }
        }, function(createErr, instance) {
            if (createErr) {
                console.log('Create Error', createErr);
                return;
            }
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                instance.requestPaymentMethod(function(err, payload) {
                    if (err) {
                        console.log('Request Payment Method Error', err);
                        return;
                    }

                    // Add the nonce to the form and submit
                    document.querySelector('#nonce').value = payload.nonce;
                    form.submit();
                });
            });
        });
</script>
<script>
        const cardInput = document.getElementById("card-number");
        const cardNumberInput = document.getElementById("credit-card-number");
        const expiInput = document.getElementById("expir");
        const expirationInput = document.getElementById("expiration");

        cardNumberInput.addEventListener("input", () => {
            cardInput.value = cardNumberInput.value.replace(/\s+/g, '').replace(/(\d{4})/g, '$1 ').trim();

        });

        expirationInput.addEventListener("input", () => {
            expiInput.value = expirationInput.value.replace(/(\d{2})/, '$1/').trim();
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\deliveboo_back - Copia\resources\views/payment_form.blade.php ENDPATH**/ ?>