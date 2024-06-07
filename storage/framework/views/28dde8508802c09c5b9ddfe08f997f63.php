<?php $__env->startSection('title', __('messages.login')); ?>

<?php $__env->startSection('links'); ?>
    <li><a class="dropdown-item" href="<?php echo e(url('/en/login')); ?>"><?php echo e(__('messages.english')); ?></a></li>
    <li><a class="dropdown-item" href="<?php echo e(url('/ar/login')); ?>"><?php echo e(__('messages.arabic')); ?></a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        body {
            padding: 50px;
            background-image: url(https://t4.ftcdn.net/jpg/05/42/73/17/360_F_542731787_npIDENXs9NMkl1mtyHKj8De2WBL2vnFW.jpg);
            background-size: cover;
        }
    </style>
    <div class="container">
        <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error or 'default error'); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
        </div>
        <form action="<?php echo e(route('login.post')); ?>" method="POST" style="width: 500px" class="ms-auto me-auto mt-3">
            <?php echo csrf_field(); ?>

            <div class="container my-4 mb-3">
                <input type="email" class="form-control" name="email" placeholder="<?php echo e(__('messages.enter_email')); ?>">
            </div>
            <div class="container my-4 mb-3">
                <input type="password" class="form-control" name="password"
                    placeholder="<?php echo e(__('messages.enter_password')); ?>">
            </div>
            <div class="container my-4 mb-3">
                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/auth_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/auth/login.blade.php ENDPATH**/ ?>