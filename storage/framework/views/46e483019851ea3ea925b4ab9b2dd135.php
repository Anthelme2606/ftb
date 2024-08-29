
<?php $__env->startSection('title','Dashboard'); ?>
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
    <div class="content">
     
      <div class="row g-1 w-100">

        <div class="col-md-9 colonne px-1">
          
          <?php if(isset($match)): ?>
          <div class="card mb-1 current-match-live">
            <div class="card-body team-a-vs-b 
            d-flex align-items-center justify-content-between position-relative z-1">
              <?php if(isset($match->team1)): ?>
            <div class="team-1">
                <div class="team-name">
                  <div class="t-name"><?php echo e($match->team1->nom); ?></div>
                  <div class="t-point"><?php echo e($match->team1->defaites*1 + $match->team1->victoires*3); ?> point(s)</div>
                </div>
                <div class="team-logo">
                  <div class="round-50-team">
                    <?php if(isset($match->team1->image)): ?>
                    <img src="<?php echo e(asset('assets/images/uploads/'.$match->team1->image)); ?>" class="img-fluid" alt="" />
                  
                  <?php else: ?>
                  <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                  
                  <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <div class="versus-time position-relative">
                <div class="match-ps">
                  <span>Vs</span>
                </div>
                <div class="match-time">
                  <span class="fw-bold"><?php echo e($match->heure_match ?? '15:00'); ?></span>
                </div>
                <div class="match-date">
                  <span><?php echo e($match->date_match  ?? 'Date à venir'); ?></span>
                </div>
              </div>
              <?php if(isset($match->team2)): ?>
              <div class="team-2">
                <div class="team-logo">
                  <div class="round-50-team">
                    <?php if(isset($match->team2->image)): ?>
                    <img src="<?php echo e(asset('assets/images/uploads/'.$match->team2->image)); ?>" class="img-fluid" alt="" />
                  
                  <?php else: ?>
                  <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                  
                  <?php endif; ?> 
                </div>
                </div>
                <div class="team-name">
                  <div class="t-name"><?php echo e($match->team2->nom); ?></div>
                  <div class="t-point"><?php echo e($match->team2->defaites*1 + $match->team2->victoires*3); ?> point(s)</div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
          <div class="titre d-flex justify-content-center align-items-center">
            <h5 class="text-pretty text-center">Historique des matchs</h5>
          </div>
          
          <?php if(isset($stats)): ?>
          <div class="row row-cols-1 g-1 row-cols-md-3 ">
         <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
            <div class="col match-list px-1">
              <div class="card  match-li">
                <div class="card-header d-flex flex-column">
                  <?php if($match_p['match']['id']===$match->id): ?>
                  <div class="match-mt live">Live</div>
                  <?php else: ?>
                  <div class="match-mt live"><?php echo e($match_p['match']['date_heure']); ?></div>

                  <?php endif; ?>
                  <div class="teams d-flex">
                    <div class="team-s">
                      <div class="round-50-tea">
                        <?php if($match_p['team1']['image']): ?>
                        <img src="<?php echo e(asset('assets/images/uploads/'. $match_p['team1']['image'])); ?>" class="img-fluid" alt="" />
                       <?php else: ?>
                       <img src="<?php echo e(asset('assets/images/uploads/logo1.png')); ?>" class="img-fluid" alt="" />
                      
                        <?php endif; ?>
                      </div>
                    </div>

                    <div class="team-s">
                      <div class="round-50-tea">
                        <?php if($match_p['team2']['image']): ?>
                        <img src="<?php echo e(asset('assets/images/uploads/'. $match_p['team2']['image'])); ?>" class="img-fluid" alt="" />
                       <?php else: ?>
                       <img src="<?php echo e(asset('assets/images/uploads/logo1.png')); ?>" class="img-fluid" alt="" />
                      
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="where">Tournoi de maya kopé.</div>
                  <div class="vs-team d-flex flex-column">
                    <?php if($match_p['team1']['winner']===1): ?>
                    <div class="winner d-flex justify-content-between">
                      <span><?php echo e($match_p['team1']['nom']); ?></span>
                      <span class="score"><?php echo e($match_p['team1']['goals']); ?></span>
                    </div>
                    <?php else: ?>
                    <div class="winner d-flex justify-content-between">
                      <span><?php echo e($match_p['team2']['nom']); ?></span>
                      <span class="score"><?php echo e($match_p['team2']['goals']); ?></span>
                    </div>

                    <?php endif; ?>
                    <?php if($match_p['team1']['winner']===0): ?>
                    <div class="loser d-flex justify-content-between">
                      <span><?php echo e($match_p['team1']['nom']); ?></span>
                      <span class="score"><?php echo e($match_p['team1']['goals']); ?></span>
                    </div>
                    <?php else: ?>
                    <div class="loser d-flex justify-content-between">
                      <span><?php echo e($match_p['team2']['nom']); ?></span>
                      <span class="score"><?php echo e($match_p['team2']['goals']); ?></span>
                    </div>

                    <?php endif; ?>
                  </div>
                </div>
                <?php if($match_p['match']['id']===$match->id): ?>
                <div class="card-body  fields  d-flex justify-content-center align-items-center flex-column">
                  <div id="teamH" class="teamH"></div>
                  <div id="teamA" class="py-2 teamA"></div>
                </div>
                <?php endif; ?>
              </div>
            </div>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
          </div>
          <?php endif; ?>
          <div class="titre d-flex justify-content-center align-items-center">
            <h5 class="text-pretty text-center">Les 6 meilleurs buteurs</h5>
          </div>
          <div
            class="row row-cols-3 row-cols-md-6 px-3 py-4 d-flex justify-content-center align-items-center"
          >
          <?php if(isset($tops)): ?>
          <?php $__currentLoopData = $tops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> <?php echo e($top->nom); ?> </span>
              </div>
  
              <div class="logo-container">
                <?php if($top['image']): ?>
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/uploads/'.$top['image'])); ?>" class="img-fluid" alt="" />
                </div>
                <?php else: ?>
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <?php endif; ?>
                <i class="mdi mdi-star"></i>
                <div class="number">
                  <?php echo e($top['buts_marques']); ?>

                </div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> 
                  <?php echo e($top->team->nom); ?>

                </span>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
           
              
          </div>
        </div>
        <?php if(isset($matches)): ?>
        <div class="col-md-3 colonne">
          <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match_i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <?php if(isset($match_i->team1)): ?>
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <?php if(isset($match_i->team1->image)): ?>
                      <img src="<?php echo e(asset('assets/images/uploads/'.$match_i->team1->image)); ?>" class="img-fluid" alt="" />
                    
                    <?php else: ?>
                    <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    
                    <?php endif; ?>
                  </div>
                  </div>
                  <div class="t-pseudo"><?php echo e($match_i->team1->pseudo); ?></div>
                </div>
              </div>
              <?php endif; ?>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer">
                    <?php if($match->id===$match_i->id): ?>
                    Live
                    <?php else: ?>
                    <?php echo e($match_i->date_match ?? 'Date à venir'); ?>

                    <?php endif; ?>
                  </span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">
                   <?php echo e($match_i->heure_match ?? '15:20'); ?>


                  </span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé,Top Foot</span>
                </div>
              </div>
              <?php if(isset($match_i->team2)): ?>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <?php if(isset($match_i->team2->image)): ?>
                      <img src="<?php echo e(asset('assets/images/uploads/'.$match_i->team2->image)); ?>" class="img-fluid" alt="" />
                    
                      <?php else: ?>
                    <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    
                    <?php endif; ?>
                    </div>
                  </div>
                  <div class="t-pseudo"><?php echo e($match_i->team2->pseudo); ?></div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
        <?php endif; ?>
      </div>
      
      <div class="row row-cols-1 row-cols-md-3 g-1 w-100 ">
        <?php if(isset($poules)): ?>
        <?php $__currentLoopData = $poules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!empty($poule['teams']) && isset($poule['teams'])): ?>
        <div class="col mx-auto height-100">
            <div class="card">
                <div class="card-header d-flex justify-content-center align-items-center">
                    <h6><?php echo e($poule['poule']); ?></h6>
                </div>
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th></th>
                                    <th class="mdi mdi-star-half-full"></th>
                                    <th>Team</th>
                                    
                                    <th>MJ</th>
                                    <th>V</th>
                                    <th>N</th>
                                    <th>D</th>
                                    <th>BM</th>
                                    <th>BE</th>
                                    <th>DF</th>
                                    <th>Pts</th>

                                </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $poule['teams']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <td>
                                    <?php echo e($key +1); ?>

                                  </td>
                                    <td>
                                        <div class="round-1">
                                            <div class="round-2">
                                                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                      <?php echo e($value['nom']); ?>

                                    </td>
                                    
                                    <td>
                                      <?php echo e($value['match_joues']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['victoires']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['nul']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['defaites']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['buts_marques']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['buts_encaissees']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['differences_buts']); ?>

                                    </td>
                                    <td>
                                      <?php echo e($value['victoires']*3 +$value['nul']*1); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
       
    </div>
    
    </div>
  </div>
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>">
  <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\layouts\dashboard.blade.php ENDPATH**/ ?>