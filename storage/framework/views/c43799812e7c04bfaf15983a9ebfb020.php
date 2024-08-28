
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
 
    <div class="col-md-8 mx-auto  height-100">
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
                                <th>Dorsa</th>
                                <th>Photo</th>
                                <th>Nom Joueur</th>
                                
                                <th>Match joué</th>
                                <th>Carton jaune</th>
                                <th>Carton rouge</th>
                                <th>Buts</th>
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

<div class="col-md-4 mx-auto height-100 ">
<div class="matchs d-flex flex-column">
    <div class="card mb-1  ">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class="team d-flex justify-content-center align-items-center ">
            <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">Talent </span>
             </div>
             <div class="team-l1">
                <div class="team-l2">
                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                </div>
             </div>
           </div>
           <div class="versus-time d-flex flex-column justify-content-center align-items-center">
            <div class="date-play">
                <h5 class="small-text">Samedi,21 2024. 14:00</h5></div>
            <div class="text">
            <strong>VS</strong>
            </div>
            <div class="score">
                <span>0:0</span>
            </div>
           </div>
           <div class="team d-flex justify-content-center align-items-center ">
            
             <div class="team-l1">
                <div class="team-l2">
                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                </div>
             </div>
             <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">Talent</span>
             </div>
           </div>
        </div>
    </div>
    <div class="card mb-1 ">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class="team d-flex justify-content-center align-items-center ">
            <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">Talent</span>
             </div>
             <div class="team-l1">
                <div class="team-l2">
                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                </div>
             </div>
           </div>
           <div class="versus-time d-flex flex-column justify-content-center align-items-center">
            <div class="date-play"><h5 class="small-text">Samedi,21 2024. 14:00</h5></div>
            <div class="text">
            <strong>VS</strong>
            </div>
            <div class="score">
                <span>0:0</span>
            </div>
           </div>
           <div class="team d-flex justify-content-center align-items-center ">
            
             <div class="team-l1">
                <div class="team-l2">
                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                </div>
             </div>
             <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">Talent</span>
             </div>
           </div>
        </div>
    </div>
    <div class="card mb-1 ">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div class="team d-flex justify-content-center align-items-center ">
            <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">Talent</span>
             </div>
             <div class="team-l1">
                <div class="team-l2">
                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                </div>
             </div>
           </div>
           <div class="versus-time d-flex flex-column justify-content-center align-items-center">
            <div class="date-play"><h5 class="small-text">Samedi,21 2024. 14:00</h5></div>
            <div class="text">
            <strong>VS</strong>
            </div>
            <div class="score">
                <span>0:0</span>
            </div>
           </div>
           <div class="team d-flex justify-content-center align-items-center ">
            
             <div class="team-l1">
                <div class="team-l2">
                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                </div>
             </div>
             <div class="team-text">
                <span class="px-2 rounded bg-white text-primary">Talent</span>
             </div>
           </div>
        </div>
    </div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

</div>
</div>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/teams.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\teams\list.blade.php ENDPATH**/ ?>