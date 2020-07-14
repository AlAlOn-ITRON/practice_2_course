<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($article->name); ?></title>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
<div id="app">
    <div class="container">
        <h1><?php echo e($article->name); ?></h1>
        <prop-component :urldata="<?php echo e($article); ?>"></prop-component>
    </div>
</div>
</body>
</html>
<?php /**PATH A:\Phpstorm_Projects\practice_2_course\resources\views/articles/current.blade.php ENDPATH**/ ?>