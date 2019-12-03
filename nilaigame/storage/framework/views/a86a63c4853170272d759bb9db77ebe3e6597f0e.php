<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NilaiGame - SignIn</title>
    <link rel="icon" href="loginstyle/images/logo.png">
    <!-- Font Icon -->
    <link rel="stylesheet" href="loginstyle/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="loginstyle/css/loginstyle.css">
    <link rel="stylesheet" href="css/animateit.css">
</head>
<body>
    <div class="main">
        <div class = "fadeInUp animated">
            <!-- Sing in  Form -->
            <div class="container">
                <div class="signin-content">
                    <!-- Signin Image and Signup Direction -->
                    <div class="signin-image">
                        <figure><img src="loginstyle/images/signin.png" alt="sing in image"></figure>
                        <a href="signup.html" class="signup-image-link">Buat akun</a>
                    </div>
                    <!-- Signin Form -->
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <!-- Name Form -->
                        <form method="POST" action="<?php echo e(route('login')); ?>" class="register-form" id="login-form">
                            <?php echo csrf_field(); ?>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password" placeholder="Password">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <!-- Remember Me -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="column">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label for="remember" class="label-agree-term"><span><span></span></span><?php echo e(__('Ingat Saya')); ?></label>
                                    </div>
                                    <!-- Forgot Password -->
                                    <div class="column right">
                                        <a class="btn" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Lupa Password?')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Login Button -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk">
                                </input>
                            </div>

                        </form>
                        <!-- Social Button -->
                        <div class="social-login">
                            <span class="social-label">Masuk dengan</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-steam"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="loginstyle/vendor/jquery/jquery.min.js"></script>
    <script src="loginstyle/js/main.js"></script>
</body>
</html><?php /**PATH D:\xampp\htdocs\test\nilaigame2\resources\views/auth/login.blade.php ENDPATH**/ ?>