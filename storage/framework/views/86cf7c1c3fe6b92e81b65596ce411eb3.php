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
                <a class="navbar-brand" href="/login">Assignment 2</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="/login">LogIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/web-based-assignment2/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>