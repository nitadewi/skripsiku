<head>

      <!--Import Google Icon Font-->
    <title><?php echo e(__('Login')); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<div class="row">
    <div class="col s12 m4 offset-m4">
        <div class="card">
            <div class="card-action white text" style="text-align: center">
            <img src="<?php echo e(asset('foto/logo.png')); ?>" style="height: 100px" alt="logo">
                <h3><?php echo e(__('Login')); ?></h3>
            </div>
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
            <div class="card-content">
                <div class="form-field">
                    <label for="username"><?php echo e(__('Username')); ?></label>
                    <input type="text" id="username"class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" autofocus>
                    
                    <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                    <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div><br>

                <div class="form-field">
                    <label for="password"><?php echo e(__('Password')); ?></label>
                    <input type="password" id="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div><br>

                <div class="form-field">
                    <input type="checkbox"  name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label for="remember"> <?php echo e(__('Remember Me')); ?></label>
                </div><br>

                <div class="form-field">
                 <button class="btn-large waves-effect waves-dark" style="width:100%"> <?php echo e(__('Login')); ?></button>
                </div>
                <div>
                    <br>
                </div>
                <div class="form-field">
                 <?php if(Route::has('password.request')): ?>
                 <a class="btn btn-link" style="width:100%" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                 </a>
                 <?php endif; ?>
                </div><br>
            </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\bismillah\resources\views/auth/login.blade.php ENDPATH**/ ?>