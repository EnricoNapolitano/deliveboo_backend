<div class="container">

    <nav class="navbar navbar-expand-md ">
        <div class="container d-flex justify-content-between">
            <div class="collapse navbar-collapse d-flex justify-content-between align-items-" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <div class="navMenu d-flex align-items-center">
                    <a class="mx-3 logo d-flex align-items-center" href="<?php echo e(route('dashboard')); ?>">
                        <img src="<?php echo e(asset('img/logo-400x400.png')); ?>" alt="logo deliveboo" class="d-flex align-items-center">
                        <h2 class="m-0 ms-2 p-0 fw-bold m-0 ms-2 p-0 fw-bold d-md-block d-none">DeliveBoo</h2>
                    </a>
                </div>
                
                <!-- Right Side Of Navbar -->
                <?php if(!Route::is('payments')): ?>
                <?php if(!Route::is('payment-success')): ?>    
                <ul class="navbar-nav ml-auto d-flex justify-content-end traslate-down mt-3">
                    <?php if(auth()->guard()->check()): ?>
                    <li><a class="p-0 d-none d-md-block d-xs-none size me-3 hover-underline-animation" href="http://localhost:5174/">goHome( )</a></li>
                    <!-- <a class="p-0 size me-3 hover-underline-animation" href="">showRestaurant()</a> -->
                    <li><a class="p-0 d-none d-md-block d-xs-none size me-3 hover-underline-animation" href="<?php echo e(route('admin.orders.index')); ?>">showOrders( )</a></li>
                    <?php endif; ?>
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="p-0 size me-3 hover-underline-animation" href="<?php echo e(route('login')); ?>">logIn( )</a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a class="p-0 size me-3 hover-underline-animation" href="<?php echo e(route('register')); ?>">createAccount( )</a>
                    </li>
                    <?php endif; ?>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white p-0 me-3 ciao" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right traslate" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark d-sm-block d-md-none" href="http://localhost:5174/">goHome( )</a>
                            <a class="dropdown-item text-dark d-sm-block d-md-none" href="<?php echo e(route('admin.orders.index')); ?>">showOrders( )</a>
                            
                            <a class="dropdown-item text-dark" href="<?php echo e(url('profile')); ?>"><?php echo e(__('showProfile( )')); ?></a>
                            <a class="dropdown-item text-dark" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <?php echo e(__('logOut( )')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</div><?php /**PATH C:\laravel\deliveboo_back\resources\views/includes/navbar.blade.php ENDPATH**/ ?>