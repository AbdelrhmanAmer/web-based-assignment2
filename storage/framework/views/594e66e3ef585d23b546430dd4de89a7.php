<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        .underline-link {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo e(__('messages.dashboard')); ?></a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <ul class="nav nav-pills nav-fill me-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(__('messages.language')); ?>

                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item text-light" href="<?php echo e(route('locale.switch', 'en')); ?>"><?php echo e(__('messages.english')); ?></a></li>
                                <li><a class="dropdown-item text-light" href="<?php echo e(route('locale.switch', 'ar')); ?>"><?php echo e(__('messages.arabic')); ?></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link underline-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('messages.login')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('register')); ?>"><?php echo e(__('messages.register')); ?></a>
                        </li>
                    </ul>
                    <a class="btn btn-dark px-3" href="https://github.com/AbdelrhmanAmer/web-based-assignment2"
                        role="button"><i class="bi bi-github"></i></a>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH C:\Users\dell\Desktop\folders\web-based-assignment2\resources\views/layouts/auth_nav.blade.php ENDPATH**/ ?>