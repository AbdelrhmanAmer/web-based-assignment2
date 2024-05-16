<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo e($error); ?></div>
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
        <form action="<?php echo e(route('register.post')); ?>" method="POST" style="width: 500px" class="ms-auto me-auto mt-3">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Enter your username">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <input type="date" class="form-control" name="date" />
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="address" placeholder="Enter your address">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/auth/register.blade.php ENDPATH**/ ?>