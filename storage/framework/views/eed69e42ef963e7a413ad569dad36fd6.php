<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a href="<?php echo e(route('logout')); ?>" class="nav-link active" aria-current="page" href="#">Log
                            out</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container my-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>


</body>

</html>

<?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/layouts/app_nav.blade.php ENDPATH**/ ?>