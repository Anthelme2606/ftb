
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

$historiques = array_filter($historiques, function ($item) {
    return !in_array(null, $item, true);
});
// dd($historiques)
    ?>
    <?php if(isset($historiques) && !empty($historiques) && $historiques!==null): ?>
    
    <div class="row row-cols-1 row-cols-md-4 w-100 g-1">
        <?php $__currentLoopData = $historiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
        
        <?php if(isset($values)&& isset($keys) && !empty($values)): ?>
        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e(dd($value[$sub_k])); ?>

        
      
        <div class="col mx-auto d-flex flex-column flex-grouw-1 height-100">
            <div class="card flex-grow-1 flex-column position-relative">
                <div class="versus d-flex align-items-center justify-content-between">
                   
                    <div class="round-1">
                        <div class="round-2">
                            <?php if(!empty($value['team1']['image'])): ?>
                            <img class="img-fluid" src="<?php echo e(asset('assets/images/uploads/'.$value['team1']['image'])); ?>">
                           <?php else: ?>
                           <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                           <?php endif; ?>
                        </div>  
                    </div>
                    
                    <div class="date&time d-flex flex-column justify-content-center align-items-center">
                        <h6>
                        <?php echo e($value['date']); ?></h6>
                        <span>VS</span>
                        <span class="score">
                            <?php echo e($value['goals1']); ?>:<?php echo e($value['goals2']); ?>

                        </span>
                      </div> 
                      <div class="round-1">
                        <div class="round-2">
                            <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                        </div>  
                    </div>
                </div>
                <style>
                     .player-list {
            font-size: 8px; 
            text-align: center;
           
        }
        .player-item {
            margin-right: 8px; 
        }
                </style>
                <div class="buteurs d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column">
                        <?php if(isset($value['team1Events'])): ?>
                        <?php $__currentLoopData = $value['team1Events']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($event1['type']=='but'): ?>
                        <span class="text-center text-success">Buts</span>
                        <div class="player&score">
                           
                              <div class="player-list row g-1">
                                <?php for($i=0;$i<$event1['buts'];$i++): ?>
                                <div class="col-md-3 col-3 player-item ">
                                    <?php echo e($event1['player']); ?>

                                </div>
                                <?php endfor; ?>
                            
                              </div> 
                        </div>
                        <?php endif; ?>
                        <?php if($event1['type']=='jaune'): ?>
                        <span class="text-center text-warning">Cj</span>
                        <div class="player&score">
                           
                              <div class="player-list row g-1">
                                <?php for($i=0;$i<$event1['jaunes'];$i++): ?>
                                <div class="col-md-3 col-3 player-item ">
                                    <?php echo e($event1['player']); ?>

                                </div>
                                <?php endfor; ?>
                            
                              </div> 
                        </div>
                        <?php endif; ?>
                        <?php if($event1['type']=='rouge'): ?>
                        <span class="text-center text-danger">CR</span>
                        <div class="player&score">
                           
                              <div class="player-list row g-1">
                                <?php for($i=0;$i<$event1['rouges'];$i++): ?>
                                <div class="col-md-3 col-3 player-item ">
                                    <?php echo e($event1['player']); ?>

                                </div>
                                <?php endfor; ?>
                            
                              </div> 
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="d-flex flex-column">
                        <?php if(isset($value['team2Events'])): ?>
                        <?php $__currentLoopData = $value['team2Events']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($event2['type']=='but'): ?>
                        <span class="text-center text-success">Buts</span>
                        <div class="player&score">
                           
                              <div class="player-list row g-1">
                                <?php for($i=0;$i<$event2['buts'];$i++): ?>
                                <div class="col-md-3 col-3 player-item">
                                    <?php echo e($event2['player']); ?>

                                </div>
                                <?php endfor; ?>
                              
                              </div> 
                        </div>
                        <?php endif; ?>
                        <?php if($event2['type']=='jaune'): ?>
                        <span class="text-center text-warning">CJ</span>
                        <div class="player&score">
                           
                              <div class="player-list row g-1">
                                <?php for($i=0;$i<$event2['jaunes'];$i++): ?>
                                <div class="col-md-3 col-3 player-item ">
                                    <?php echo e($event2['player']); ?>

                                </div>
                                <?php endfor; ?>
                            
                              </div> 
                        </div>
                        <?php endif; ?>
                        <?php if($event1['type']=='rouge'): ?>
                        <span class="text-center text-danger">CR</span>
                        <div class="player&score">
                           
                              <div class="player-list row g-1">
                                <?php for($i=0;$i<$event2['rouges'];$i++): ?>
                                <div class="col-md-3 col-3 player-item ">
                                    <?php echo e($event2['player']); ?>

                                </div>
                                <?php endfor; ?>
                            
                              </div> 
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
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