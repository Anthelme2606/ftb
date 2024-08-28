<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>
<body>
  
   <?php if (isset($component)) { $__componentOriginal9b0da1ce4a7273760fcbfd5667774437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b0da1ce4a7273760fcbfd5667774437 = $attributes; } ?>
<?php $component = App\View\Components\Loader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Loader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b0da1ce4a7273760fcbfd5667774437)): ?>
<?php $attributes = $__attributesOriginal9b0da1ce4a7273760fcbfd5667774437; ?>
<?php unset($__attributesOriginal9b0da1ce4a7273760fcbfd5667774437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b0da1ce4a7273760fcbfd5667774437)): ?>
<?php $component = $__componentOriginal9b0da1ce4a7273760fcbfd5667774437; ?>
<?php unset($__componentOriginal9b0da1ce4a7273760fcbfd5667774437); ?>
<?php endif; ?>
   <div class="contents">
    <?php echo $__env->yieldContent('sidebar'); ?>
    <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalcf93f3ed30076ee062bd95434e5b07b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9 = $attributes; } ?>
<?php $component = App\View\Components\Toastr::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toastr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Toastr::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9)): ?>
<?php $attributes = $__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9; ?>
<?php unset($__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf93f3ed30076ee062bd95434e5b07b9)): ?>
<?php $component = $__componentOriginalcf93f3ed30076ee062bd95434e5b07b9; ?>
<?php unset($__componentOriginalcf93f3ed30076ee062bd95434e5b07b9); ?>
<?php endif; ?>
    <?php echo $__env->yieldContent('container'); ?>
</div>
<?php echo $__env->yieldPushContent('scripts'); ?>
<script src="<?php echo e(asset('assets/js/sidebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH C:\projects\ftb-lara\ftb\resources\views\layouts\index.blade.php ENDPATH**/ ?>