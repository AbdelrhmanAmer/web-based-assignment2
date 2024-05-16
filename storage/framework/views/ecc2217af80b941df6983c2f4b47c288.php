<?php $__env->startSection('title', __('messages.register')); ?>

<?php $__env->startSection('content'); ?>
    <style>
        label.form-label {
            font-size: 14px;
            padding-right: 8px;
        }
    </style>
    <div class="container">
        <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger mb-3"><?php echo e($error); ?></div>
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
                <label for="name" class="form-label"><?php echo e(__('messages.name')); ?>:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(__('messages.enter_name')); ?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label"><?php echo e(__('messages.username')); ?>:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo e(__('messages.enter_username')); ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"><?php echo e(__('messages.email')); ?>:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo e(__('messages.enter_email')); ?>">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label"><?php echo e(__('messages.date_of_birth')); ?>:</label>
                <div class="d-flex align-items-center">
                    <input type="date" class="form-control me-2" id="date" name="date">
                    <a class="btn btn-secondary" href="#" role="button" style="white-space: nowrap;"><?php echo e(__('messages.check_actors')); ?></a>
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label"><?php echo e(__('messages.phone_number')); ?>:</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="<?php echo e(__('messages.enter_phone_number')); ?>">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label"><?php echo e(__('messages.address')); ?>:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="<?php echo e(__('messages.enter_address')); ?>">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"><?php echo e(__('messages.password')); ?>:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo e(__('messages.enter_password')); ?>">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label"><?php echo e(__('messages.confirm_password')); ?>:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="<?php echo e(__('messages.confirm_password')); ?>">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label"><?php echo e(__('messages.profile_image')); ?>:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/auth_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/auth/register.blade.php ENDPATH**/ ?>