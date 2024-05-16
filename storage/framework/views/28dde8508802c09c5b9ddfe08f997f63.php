<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger "><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="container my-4   mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="container my-4   mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/auth_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/auth/login.blade.php ENDPATH**/ ?>