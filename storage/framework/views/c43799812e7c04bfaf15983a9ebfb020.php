
<?php $__env->startSection('title','Teams'); ?>
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
<?php if(isset($teams)): ?>

<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row row-cols-1 g-1 w-100 mb-1">
 
    <div class="col-md-8  height-100">
        <div class="card  text-white ">
            <div class="card-header d-flex flex-column justify-content-center">
                <div class="team-logo-parent">
                    <div class="team-logo">
                        <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>" alt="Team Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2 align-items-center">
                    <span class="px-2 rounded bg-success text-white"><?php echo e($team['nom']); ?></span>
                    <span class="d-flex justify-content-center align-items-center">
                        <div class="round-1">
                            <div class="round-2">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/uploads/'.$team->representant->image)); ?>">
                            </div>
                        </div>
                        <h6 class="mx-1">Coach:<?php echo e($team->representant->nom); ?></h6>
                    </span>
                    <select class="-select px-4 rounded border-blue outline-none" name="players">
                        <option value="4">4</option>
                        <option value="18">18</option>
                    </select>
                </div>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NN</th>
                                <th>PP</th>
                                <th>PL</th>
                                
                                <th>MJ</th>
                                <th>CJ</th>
                                <th>CR</th>
                                <th>Goals</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $team->players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td><?php echo e($player['dorsa']); ?></td>
                                 <td class="d-flex justify-content-center align-items-center">
                                    <div class="round-1">
                                        <div class="round-2">
                                            <img class="img-fluid" src="<?php echo e(asset('assets/images/uploads/'.$player['logo'])); ?>">
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($player['nom']); ?></td>
                                <td><?php echo e($player['match_joues']); ?></td>
                                <td><?php echo e($player['cartons_jaunes']); ?></td>
                                <td><?php echo e($player['cartons_rouges']); ?></td>
                                <td><?php echo e($player['buts_marques']); ?></td>
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
 $opponents=$team_s->opponents($teams,$team);
?>

<div class="col-md-4  height-100 ">
    <?php $__currentLoopData = $opponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body p-0">
            <div class="card-gradient text-white p-4">
                <div class="row align-items-center">
                    <div class="col-4 text-center">
                        <?php if($team['image']): ?>
                        <img class="img-fluid rounded-circle team-avatar" src="<?php echo e(asset('assets/images/uploads/'.$team['image'])); ?>">
                        <?php else: ?>
                        <img class="img-fluid rounded-circle team-avatar" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                        <?php endif; ?>
                          <h2 class="h4 mb-0"><?php echo e($team['nom']); ?></h2>
                    </div>
                    <div class="col-4 text-center">
                        <div class="vs-text mb-3">VS</div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="match-info rounded-pill px-3 py-1 mb-2">
                                <i class="fas fa-calendar-alt me-2"></i>
                                <span>
                                    <?php echo e($opponent['date_match']); ?>

                                </span>
                            </div>
                            <div class="match-info rounded-pill px-3 py-1">
                                <i class="fas fa-clock me-2"></i>
                                <span>
                                    <?php echo e($opponent['heure_matche'] ?? '15:00'); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <?php if($opponent['image']): ?>
                        <img class="img-fluid rounded-circle team-avatar" src="<?php echo e(asset('assets/images/uploads/'.$opponent['image'])); ?>">
                        <?php else: ?>
                        <img class="img-fluid rounded-circle team-avatar" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                        <?php endif; ?>
                         <h2 class="h4 mb-0">
                            <?php echo e($opponent['nom']); ?>

                         </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

</div>
</div>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/teams.css')); ?>">
<style>
    .card-gradient {
       background-color: rgba(184, 134, 11, 0.2)
    }
    .team-avatar {
        width: 40px;
        height: 40px;
        border: 4px solid white;
    }
    .vs-text {
        font-size: 2rem;
        font-weight: 800;
    }
   
    .match-info {
        background-color: rgba(255, 255, 255, 0.2);
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\teams\list.blade.php ENDPATH**/ ?>