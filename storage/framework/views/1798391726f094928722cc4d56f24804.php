
<?php $__env->startSection('title','Trophés'); ?>
<?php $__env->startSection('sidebar'); ?>
    <?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald31f0a1d6e85408eecaaa9471b609820 = $attributes; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $attributes = $__attributesOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
<div class="dashboard">
    <div class="content mt-1">
        <?php
            $trophies = [
                ['mdi' => 'mdi-trophy', 'trophy' => 'Champion du Tournoi', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-variant', 'trophy' => 'Finaliste', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-soccer', 'trophy' => 'Meilleur Buteur', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-outline', 'trophy' => 'Meilleur Gardien de But', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-star', 'trophy' => 'Meilleur Joueur'],
                ['mdi' => 'mdi-shield', 'trophy' => 'Meilleur Défenseur', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-outline', 'trophy' => 'Meilleur Passer', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-outline', 'trophy' => 'Meilleur Entraîneur', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-handshake', 'trophy' => 'Équipe Fair-Play', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-star-circle', 'trophy' => 'Meilleur Jeune Talent', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-football', 'trophy' => 'Meilleur Joueur de Terrain', 'star' => 'mdi-star'],
                ['mdi' => 'mdi-trophy-award', 'trophy' => 'Meilleur Joueur de la Saison', 'star' => 'mdi-star']
            ];
        ?>
        <div class="row row-cols-1 row-cols-md-4 w-100 g-1">
            <?php $__currentLoopData = $trophies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trophy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col mx-auto d-flex flex-column flex-grow-1 height-100">
                <div class="card flex-grow-1 position-relative">
                    <?php if(isset($trophy['star']) && $trophy['star']): ?>
                        <div class="star">
                            <span class="mdi <?php echo e($trophy['star']); ?> text-warning"></span>
                        </div>
                    <?php endif; ?>
                    <div class="round-1">
                        <div class="round-2">
                            <span class="mdi <?php echo e($trophy['mdi']); ?> text-success fw-bold fs-5"></span>
                        </div>
                    </div>
                    <h6><?php echo e($trophy['trophy']); ?></h6>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\players\trophies.blade.php ENDPATH**/ ?>