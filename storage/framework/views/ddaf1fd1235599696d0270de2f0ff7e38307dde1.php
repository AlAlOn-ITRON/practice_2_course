<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Articles</title>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
</head>
<body>
<div id="app">
    <div class="container">
        <all-articles :table="<?php echo e($table); ?>"></all-articles>
        <div id="more-articles"></div>
    </div>
</div>
</body>
</html>
<?php /**PATH A:\Phpstorm_Projects\practice_2_course\resources\views/articles/all.blade.php ENDPATH**/ ?>