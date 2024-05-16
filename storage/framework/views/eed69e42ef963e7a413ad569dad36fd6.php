<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a href="<?php echo e(route('logout')); ?>" class="nav-link active" aria-current="page" href="#">Log out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/layouts/app_nav.blade.php ENDPATH**/ ?>