<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beanie</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('logo.png')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100">
    <?php echo $__env->make('main.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1 class="text-3xl font-bold underline">
        Hello, Tailwind CSS di Laravel 11!
    </h1>
</body>
</html>
<?php /**PATH E:\DATA\KERJA\NEXA SEMARANG\Web-Programmer-Challenge\resources\views/main/welcome.blade.php ENDPATH**/ ?>