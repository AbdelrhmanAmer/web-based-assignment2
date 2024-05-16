<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>

                <ul class="nav nav-pills ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-light" href="locale/en">English</a></li>
                            <li><a class="dropdown-item text-light" href="locale/ar">Arabic</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('logout')); ?>" class="nav-link active" aria-current="page">Log out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container my-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/layouts/app_nav.blade.php ENDPATH**/ ?>