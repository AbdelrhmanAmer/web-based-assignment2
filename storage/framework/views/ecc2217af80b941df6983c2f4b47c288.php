<?php $__env->startSection('title', __('messages.register')); ?>

<?php $__env->startSection('links'); ?>
    <li><a class="dropdown-item" href="<?php echo e(url('/en/register')); ?>"><?php echo e(__('messages.english')); ?></a></li>
    <li><a class="dropdown-item" href="<?php echo e(url('/ar/register')); ?>"><?php echo e(__('messages.arabic')); ?></a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        body {
            padding: 50px;
            background-image: url(https://t4.ftcdn.net/jpg/05/42/73/17/360_F_542731787_npIDENXs9NMkl1mtyHKj8De2WBL2vnFW.jpg);
            background-size: cover;
        }
        
        label.form-label {
            font-size: 14px;
            padding-right: 8px;
        }

        .form-container {
            max-width: 800px;
            margin: auto;
        }

        .form-control {
            width: 100%;
        }
    </style>
    <div class="container">
        <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
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
        <div class="form-container">
            <form action="<?php echo e(route('register.post')); ?>" method="POST" class="mt-3">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="name" class="form-label"><?php echo e(__('messages.name')); ?>:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>"
                        placeholder="<?php echo e(__('messages.enter_name')); ?>">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label"><?php echo e(__('messages.username')); ?>:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo e(old('username')); ?>"
                        placeholder="<?php echo e(__('messages.enter_username')); ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><?php echo e(__('messages.email')); ?>:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>"
                        placeholder="<?php echo e(__('messages.enter_email')); ?>">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label"><?php echo e(__('messages.date_of_birth')); ?>:</label>
                    <div class="d-flex align-items-center">
                        <input type="date" class="form-control me-2" id="date" name="date"
                            value="<?php echo e(old('date')); ?>">
                        <button type="button" class="btn btn-secondary" id="checkActorsBtn"
                            style="white-space: nowrap;"><?php echo e(__('messages.check_actors')); ?></button>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label"><?php echo e(__('messages.phone_number')); ?>:</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>"
                        placeholder="<?php echo e(__('messages.enter_phone_number')); ?>">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label"><?php echo e(__('messages.address')); ?>:</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo e(old('address')); ?>"
                        placeholder="<?php echo e(__('messages.enter_address')); ?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"><?php echo e(__('messages.password')); ?>:</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="<?php echo e(__('messages.enter_password')); ?>">
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
    </div>
    <script>
        document.getElementById('checkActorsBtn').addEventListener('click', function() {
            var date = document.getElementById('date').value;
            if (date) {
                var formattedDate = new Date(date).toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: '2-digit'
                }).split('/').join('-');
                var url = "<?php echo e(route('actors_ids', ['date' => ':date'])); ?>";
                url = url.replace(':date', formattedDate);
                window.location.href = url;
            } else {
                alert('Please select a date');
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/auth_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/auth/register.blade.php ENDPATH**/ ?>