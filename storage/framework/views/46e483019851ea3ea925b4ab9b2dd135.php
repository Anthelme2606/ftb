
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
          
          <div class="card mb-1 current-match-live">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-name">Liverpool</div>
                  <div class="t-point">20 points</div>
                </div>
                <div class="team-logo">
                  <div class="round-50-team">
                    <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" alt="image" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-ps">
                  <span>D.Final</span>
                </div>
                <div class="match-time">
                  <span class="fw-bold">12:00</span>
                </div>
                <div class="match-date">
                  <span>Aujourd'hui</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-logo">
                  <div class="round-50-team">
                    <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" alt="image" class="img-fluid" />
                  </div>
                </div>
                <div class="team-name">
                  <div class="t-name">Arsenal</div>
                  <div class="t-point">22 points</div>
                </div>
              </div>
            </div>
          </div>
          <div class="titre d-flex justify-content-center align-items-center">
            <h5 class="text-pretty text-center">Historique des matchs</h5>
          </div>
          <div class="row row-cols-1 g-1 row-cols-md-3 ">
            <div class="col match-list px-1">
              <div class="card  match-li">
                <div class="card-header d-flex flex-column">
                  <div class="match-mt live">Live</div>
                  <div class="teams d-flex">
                    <div class="team-s">
                      <div class="round-50-tea">
                        <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                      </div>
                    </div>
                    <div class="team-s">
                      <div class="round-50-tea">
                        <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                      </div>
                    </div>
                  </div>
                  <div class="where">Tournoi de maya kopé.</div>
                  <div class="vs-team d-flex flex-column">
                    <div class="winner d-flex justify-content-between">
                      <span>Liverpool</span>
                      <span class="score">3</span>
                    </div>
                    <div class="loser d-flex justify-content-between">
                      <span>Arsenal</span>
                      <span class="score">2</span>
                    </div>
                  </div>
                </div>
                <div class="card-body  fields  d-flex justify-content-center align-items-center flex-column">
                  <div id="teamH" class="teamH"></div>
                  <div id="teamA" class="py-2 teamA"></div>
                </div>
              </div>
            </div>
            
            <div class="col match-list">
              <div class="card match-li">
                  <div class="card-header d-flex flex-column">
                      <div class="match-mt finished">Terminé</div>
                      <div class="teams d-flex">
                          <div class="team-s">
                              <div class="round-50-tea">
                                  <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                              </div>
                          </div>
                          <div class="team-s">
                              <div class="round-50-tea">
                                  <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                              </div>
                          </div>
                      </div>
                      <div class="where">Tournoi de maya kopé.</div>
                      <div class="vs-team d-flex flex-column">
                          <div class="winner d-flex justify-content-between">
                              <span>Liverpool</span>
                              <span class="score">3</span>
                          </div>
                          <div class="loser d-flex justify-content-between">
                              <span>Arsenal</span>
                              <span class="score">2</span>
                          </div>
                      </div>
                  </div>
                  <div class="card-body  d-flex flex-column justify-content-center align-items-center">
                      <div class="rounded-team-image">
                          <img src="<?php echo e(asset('assets/images/team.png')); ?>" class="img-fluid" alt="" />
                      </div>
                      <div class="rounded-team-image">
                          <img src="<?php echo e(asset('assets/images/team.png')); ?>" class="img-fluid" alt="" />
                      </div>
                  </div>
              </div>
          </div>
          <div class="col match-list">
              <div class="card match-li">
                  <div class="card-header d-flex flex-column">
                      <div class="match-mt finished">Terminé</div>
                      <div class="teams d-flex">
                          <div class="team-s">
                              <div class="round-50-tea">
                                  <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                              </div>
                          </div>
                          <div class="team-s">
                              <div class="round-50-tea">
                                  <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                              </div>
                          </div>
                      </div>
                      <div class="where">Tournoi de maya kopé.</div>
                      <div class="vs-team d-flex flex-column">
                          <div class="winner d-flex justify-content-between">
                              <span>Liverpool</span>
                              <span class="score">3</span>
                          </div>
                          <div class="loser d-flex justify-content-between">
                              <span>Arsenal</span>
                              <span class="score">2</span>
                          </div>
                      </div>
                  </div>
                  <div class="card-body  d-flex flex-column justify-content-center align-items-center w-100">
                      <div class="rounded-team-image">
                          <img src="<?php echo e(asset('assets/images/team.png')); ?>" class="img-fluid" alt="" />
                      </div>
                      <div class="rounded-team-image">
                          <img src="<?php echo e(asset('assets/images/team.png')); ?>" class="img-fluid" alt="" />
                      </div>
                  </div>
              </div>
          </div>
          </div>
          <div class="titre d-flex justify-content-center align-items-center">
            <h5 class="text-pretty text-center">Les 6 meilleurs buteurs</h5>
          </div>
          <div
            class="row row-cols-3 row-cols-md-6 px-3 py-4 d-flex justify-content-center align-items-center"
          >
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> Kevin</span>
              </div>
  
              <div class="logo-container">
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <i class="mdi mdi-star"></i>
                <div class="number">5</div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> Talent Fc</span>
              </div>
            </div>
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> Kevin</span>
              </div>
  
              <div class="logo-container">
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <i class="mdi mdi-star"></i>
                <div class="number">5</div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> Talent Fc</span>
              </div>
            </div>
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> Kevin</span>
              </div>
  
              <div class="logo-container">
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <i class="mdi mdi-star"></i>
                <div class="number">5</div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> Talent Fc</span>
              </div>
            </div>
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> Kevin</span>
              </div>
  
              <div class="logo-container">
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <i class="mdi mdi-star"></i>
                <div class="number">5</div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> Talent Fc</span>
              </div>
            </div>
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> Kevin</span>
              </div>
  
              <div class="logo-container">
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <i class="mdi mdi-star"></i>
                <div class="number">5</div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> Talent Fc</span>
              </div>
            </div>
            <div
              class="col d-flex justify-content-center flex-column align-items-center"
            >
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 soccer-player"> Kossi Dosseh</span>
              </div>
  
              <div class="logo-container">
                <div class="logo-player">
                  <img src="<?php echo e(asset('assets/images/player1.png')); ?>" class="img-fluid" alt="" />
                </div>
                <i class="mdi mdi-star"></i>
                <div class="number">5</div>
                <div class="active"></div>
              </div>
              <div
                class="rounded text-black py-1 bg-white text-center d-flex justify-content-center align-items-center"
              >
                <span class="px-2 bg-warning team-name-player"> Talent Fc</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 colonne">
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">LVP</div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer">Live</span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">3:2</span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">ARS</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">LVP</div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer upcoming">13:00</span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">0:0</span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">ARS</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">LVP</div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer upcoming">Sam,15:15</span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">0:0</span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">ARS</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">LVP</div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer upcoming">Sam,14:20</span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">0:0</span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">ARS</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">LVP</div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer upcoming">Dim,13:00</span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">0:0</span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">ARS</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-1">
            <div class="card-body team-a-vs-b">
              <div class="team-1">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">LVP</div>
                </div>
              </div>
              <div class="versus-time position-relative">
                <div class="match-live">
                  <span class="timer upcoming">Dim,15:20</span>
                </div>
                <div class="match-score">
                  <span class="fw-bold">0:0</span>
                </div>
                <div>
                  <span>Tournoi de Maya Kopé</span>
                </div>
              </div>
              <div class="team-2">
                <div class="team-name">
                  <div class="t-logo">
                    <div class="round-50-ps">
                      <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <div class="t-pseudo">ARS</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-1 w-100 ">
        <div class="col mx-auto height-100">
            <div class="card">
                <div class="card-header d-flex justify-content-center align-items-center">
                    <h6>Poule A</h6>
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
                                <tr>
                                  <td>1</td>
                                    <td>
                                        <div class="round-1">
                                            <div class="round-2">
                                                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>Talent</td>
                                    
                                    <td>3</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td>+4</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                    <td>
                                        <div class="round-1">
                                            <div class="round-2">
                                                <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>Talent</td>
                                    
                                    <td>3</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>+2</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mx-auto height-100">
            <div class="card">
                <div class="card-header d-flex justify-content-center align-items-center">
                    <h6>Poule B</h6>
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
                              <tr>
                                <td>1</td>
                                  <td>
                                      <div class="round-1">
                                          <div class="round-2">
                                              <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                          </div>
                                      </div>
                                  </td>
                                  <td>Talent</td>
                                  
                                  <td>3</td>
                                  <td>2</td>
                                  <td>1</td>
                                  <td>0</td>
                                  <td>6</td>
                                  <td>2</td>
                                  <td>+4</td>
                                  <td>7</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                  <td>
                                      <div class="round-1">
                                          <div class="round-2">
                                              <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                          </div>
                                      </div>
                                  </td>
                                  <td>Talent</td>
                                  
                                  <td>3</td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>5</td>
                                  <td>3</td>
                                  <td>+2</td>
                                  <td>4</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mx-auto height-100">
            <div class="card">
                <div class="card-header d-flex justify-content-center align-items-center">
                    <h6>Poule C</h6>
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
                              <tr>
                                <td>1</td>
                                  <td>
                                      <div class="round-1">
                                          <div class="round-2">
                                              <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                          </div>
                                      </div>
                                  </td>
                                  <td>Talent</td>
                                  
                                  <td>3</td>
                                  <td>2</td>
                                  <td>1</td>
                                  <td>0</td>
                                  <td>6</td>
                                  <td>2</td>
                                  <td>+4</td>
                                  <td>7</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                  <td>
                                      <div class="round-1">
                                          <div class="round-2">
                                              <img class="img-fluid" src="<?php echo e(asset('assets/images/logo1.png')); ?>">
                                          </div>
                                      </div>
                                  </td>
                                  <td>Talent</td>
                                  
                                  <td>3</td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>5</td>
                                  <td>3</td>
                                  <td>+2</td>
                                  <td>4</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
  </div>
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>">
  <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\layouts\dashboard.blade.php ENDPATH**/ ?>