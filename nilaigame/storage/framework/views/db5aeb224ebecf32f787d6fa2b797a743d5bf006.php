<nav class="navbar navbar-expand-lg navbar-light">
        <!-- Navbar Logo -->
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"> <img src="img/logo.png" alt="logo"> </a>
        <!-- Toogler Navbar-->
        <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav align-items-center"> 
                <!-- Guest Session -->
                <?php if(auth()->guard()->guest()): ?>
                    <!-- Register Page -->
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Masuk')); ?></a> </li>
                    <!-- Login Page -->
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Daftar')); ?></a> </li>
                    <?php endif; ?>
                    <!-- After Logged In -->
                    <?php else: ?>
                        <!-- Profile Bar -->
                        <li class="nav-item dropdown">
                            <!-- Logged In -->
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                            href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                <!-- Profile Button -->
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Profile')); ?>

                                </a>
                                <!-- Logout Button -->
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>
                            	<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                	<?php echo csrf_field(); ?>
                            	</form>
                            </div>
                        </li>
                        <!-- Review Bar -->
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Buat Review')); ?></a>
                        </li>
                <?php endif; ?>
            </ul>
            <!-- Search Bar-->
            <ul class="nav navbar-nav ml-auto"> 
                <form class="form-inline">
                    <input class = "form-control ml-sm-4" type="search" placeholder="Cari" aria-label="Search">
                    <button class= "btn btn-search  my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form> 
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\xampp\htdocs\test\nilaigame2\resources\views/inc/navbar.blade.php ENDPATH**/ ?>