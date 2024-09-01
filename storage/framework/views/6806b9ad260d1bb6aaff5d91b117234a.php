
<?php $__env->startSection('title','Historiques'); ?>
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

$historiques = array_filter($historiques, function ($item) {
    return !in_array(null, $item, true);
});
// dd($historiques)
    ?>
     <style>
   .card {
            height: 100%;
        }
        .yellow-card {
            background-color: #ffc107;
            color: #000;
        }
        .red-card {
            background-color: #dc3545;
            color: #fff;
        }
   </style>
    <?php if(isset($historiques) && !empty($historiques) && $historiques!==null): ?>
    
    <div class="row row-cols-1 row-cols-md-3 w-100 g-1">
        <?php $__currentLoopData = $historiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
       
        <?php if(isset($values)&& isset($keys) && !empty($values)): ?>
        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col height-100">
            <div class="card ">
                <div class="card-header text-center">
                   
                    <p class="text-muted"><?php echo e($value['date']); ?></p>
                    <div class="d-flex justify-content-center align-items-center">
                        <?php if(!empty($value['team1']['image'])): ?>
                        <div class="round-1">
                            <div class="round-2">
                        <img class="img-fluid" src="<?php echo e(asset('assets/images/uploads/'.$value['team1']['image'])); ?>">
                    </div>  
                    </div>
                        <?php else: ?>
                        <div class="round-1">
                            <div class="round-2">
                     
                       <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                    </div>  
                </div>
                       <?php endif; ?>
                        <span class="fs-4 fw-bold"><?php echo e($value['goals1']); ?></span>
                        <span class="fs-4 fw-bold mx-2">-</span>
                        <span class="fs-4 fw-bold"><?php echo e($value['goals2']); ?></span>
                        <?php if(!empty($value['team2']['image'])): ?>
                        <div class="round-1">
                            <div class="round-2">
                        <img class="img-fluid" src="<?php echo e(asset('assets/images/uploads/'.$value['team2']['image'])); ?>">
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="round-1">
                            <div class="round-2">
                     
                       <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                            </div >
                        </div>
                       <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="text-center">
                                <?php echo e($value['team1']['nom']); ?>

                            </h6>
                            <ul class="list-unstyled">
                                <?php if(isset($value['team1Events'])): ?>
                                <?php $__currentLoopData = $value['team1Events']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($event1['type']=='but' || $event1['type']=='jaune' || $event1['type']=='rouge'): ?>
                                <li class="d-flex justify-content-between align-items-center">
                                    <?php echo e($event1['player']); ?>

                                    <span>
                                        <?php if(isset($event1['buts'])): ?>
                                        <span class="badge bg-secondary me-1">⚽<?php echo e($event1['buts']); ?></span>
                                        <?php endif; ?>
                                        <?php if(isset($event1['jaunes'])): ?>
                                        <span class="badge yellow-card">▪<?php echo e($event1['jaunes']); ?></span>
                                        <?php endif; ?>
                                        <?php if(isset($event1['rouges'])): ?>
                                        <span class="badge red-card">▪<?php echo e($event1['rouges']); ?></span>
                                        <?php endif; ?>
                                    </span>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                                
                               
                             
                                
                            </ul>
                        </div>
                        <div class="col-6">
                            <h6 class="text-center">
                                <?php echo e($value['team2']['nom']); ?>

                            </h6>
                            <ul class="list-unstyled">
                                <?php if(isset($value['team2Events'])): ?>
                                <?php $__currentLoopData = $value['team2Events']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($event2['type']=='but' || $event2['type']=='jaune' || $event2['type']=='rouge'): ?>
                                <li class="d-flex justify-content-between align-items-center">
                                    <?php echo e($event2['player']); ?>

                                    <span>
                                        <?php if(isset($event2['buts'])): ?>
                                        <span class="badge bg-secondary me-1">⚽<?php echo e($event2['buts']); ?></span>
                                        <?php endif; ?>
                                        <?php if(isset($event2['jaunes'])): ?>
                                        <span class="badge yellow-card">▪<?php echo e($event2['jaunes']); ?></span>
                                        <?php endif; ?>
                                        <?php if(isset($event2['rouges'])): ?>
                                        <span class="badge red-card">▪<?php echo e($event2['rouges']); ?></span>
                                        <?php endif; ?>
                                    </span>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                                
                               
                             
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
       
       
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> 
        <?php endif; ?>
      
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\teams\scores.blade.php ENDPATH**/ ?>