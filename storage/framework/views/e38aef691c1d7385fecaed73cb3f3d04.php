
<?php $__env->startSection('title', 'Teams-Players'); ?>
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
<style>
    .round-background {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background-color: #d4edda; /* Vert clair */
        margin: 0 auto;
    }
    .card-title {
        text-align: center;
        margin-top: 10px;
    }
    .hero-container{
        width:100%;
        margin:0;
        padding:0;
        background-color: #4CAF50 ;
       
    }
   .ours-h {
    text-align:center;
    display:flex;
    justify-content:center;
    color:#fff;
    width: 100%;
   
}
.ours-h span{
    color:white;
    font-size:26px;
    font-weight:bold;
}

</style>
    <div class="dashboard">
        <div class="content mt-1">
            <div class="hero-container">
                <div class="ours-h">
                    <span>Gestionnaire</span>

                </div>
                <svg 
                xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 1440 320"><path fill="#f5f6fa" fill-opacity="1" d="M0,160L80,176C160,192,320,224,480,213.3C640,203,800,149,960,117.3C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path></svg>


            </div>
            
          
                    <div class="row row-cols-2 row-cols-md-3 g-1 mb-2 w-100">
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card card-height" data-bs-toggle="modal" data-bs-target="#teamModal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-account-group mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Création d'équipe</h5>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="col">
                            <div class="card card-height" data-bs-toggle="modal" data-bs-target="#equipeModal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-account-plus mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Création de joueur</h5>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3 -->
                        <div class="col">
                            <div class="card card-height"
                             data-bs-toggle="modal" data-bs-target="#ajoutMatchModal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-calendar-check-outline mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Programmer un match</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-height"
                             data-bs-toggle="modal" data-bs-target="#match_aujModal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-trophy-outline mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Match Aujourd'hui</h5>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 4 -->
                        <div class="col">
                            <div class="card card-height" data-bs-toggle="modal" data-bs-target="#pouleModal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-format-list-bulleted mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Création de poule</h5>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 5 -->
                        <div class="col">
                            <div class="card card-height" data-bs-toggle="modal" data-bs-target="#poule-team-Modal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-account-multiple-plus mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Ajout de team au poule</h5>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 6 -->
                        <div class="col">
                            <div class="card card-height" data-bs-toggle="modal" data-bs-target="#ficheModal">
                                <div class="card-body text-center">
                                    <div class="round-background">
                                        <span class="mdi mdi-file-document-outline  mdi-36px text-primary"></span>
                                    </div>
                                    <h5 class="card-title">Remplir la fiche de match Debut-Fin</h5>
                                </div>
                            </div>
                        </div>
                
                    <div class="col">
                        <div class="card card-height" data-bs-toggle="modal" data-bs-target="#updateEquipe">
                            <div class="card-body text-center">
                                <div class="round-background">
                                    <span class="mdi mdi-update mdi-36px text-primary"></span>
                                </div>
                                <h5 class="card-title">Mise à jour des équipes</h5>
                            </div>
                        </div>
                    </div>
                
                <div class="col">
                    <div class="card card-height" data-bs-toggle="modal" data-bs-target="#updatePlayer">
                        <div class="card-body text-center">
                            <div class="round-background">
                                <span class="mdi mdi-account-edit mdi-36px text-primary"></span>
                            </div>
                            <h5 class="card-title">Mise à jour des joueurs</h5>
                        </div>
                    </div>
                </div>
            
            <div class="col">
                <div class="card card-height" data-bs-toggle="modal" data-bs-target="#carton-but">
                    <div class="card-body text-center">
                        <div class="round-background">
                            <span class="mdi mdi-card-account-details mdi-36px text-primary"></span>
                        </div>
                        <h5 class="card-title">Cartons && Buts  ..</h5>
                    </div>
                </div>
            </div>
        </div>
        
                
            
              
               <?php echo $__env->make('players-teams.team',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.player',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.update-team',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.update-player',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.carton-but',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.poule', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              
               <?php echo $__env->make('players-teams.match',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.fiche',['teams'=>$teams,'records'=>$records], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.poule-team',['poules'=>$poules,'teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('players-teams.records',['teams'=>$teams], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
               
                
            
               
            
                <!-- Modal 4: Création de poule -->
                <div class="modal fade" id="pouleModal" tabindex="-1" aria-labelledby="pouleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pouleModalLabel">Création de poule</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="pouleName" class="form-label">Nom de la poule</label>
                                        <input type="text" class="form-control" id="pouleName" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Créer la poule</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Modal 5: Ajout de team au poule -->
                <div class="modal fade" id="ajoutTeamModal" tabindex="-1" aria-labelledby="ajoutTeamModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ajoutTeamModalLabel">Ajout de team au poule</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="selectPoule" class="form-label">Sélectionner une poule</label>
                                        <select class="form-select" id="selectPoule" required>
                                            <option value="">Sélectionnez une poule</option>
                                            <option value="1">Poule A</option>
                                            <option value="2">Poule B</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="selectTeam" class="form-label">Sélectionner une équipe</label>
                                        <select class="form-select" id="selectTeam" required>
                                            <option value="">Sélectionnez une équipe</option>
                                            <option value="1">Équipe 1</option>
                                            <option value="2">Équipe 2</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter l'équipe à la poule</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Modal 6: Ajout de joueur au team -->
                
            
            
        
        </div>
    </div>
    
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/team-player.css')); ?>">

     <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views/players-teams/creation.blade.php ENDPATH**/ ?>