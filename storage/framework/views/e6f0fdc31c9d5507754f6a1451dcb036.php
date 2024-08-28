<div class="row row-cols-1 g-1 w-100">
    <div class="col-md-4">
        <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Enrégistrement de la team'),'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('store-team')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Team'),'keys' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            [
                'label' => 'Nom de la team',
                'name' => 'team-name',
            ],
            [
                'label' => 'Pseudo de la team',
                'name' => 'team-pseudo',
            ],
            [
                'label' => 'Nom du représentant',
                'name' => 'rep-name',
            ],
        ]),'files' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            [
                'label' => 'Team',
                'name' => 'team-image',
            ],
            [
                'label' => 'Coach',
                'name' => 'rep-image',
            ],
        ]),'coach' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('coach'),'rep' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('rep')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>

       
    </div>
    


    <div class="col-md-4">

        <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('store-player')),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Enrégistrement du joueur'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Joueur'),'select' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teams),'keys' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            [
                'label' => 'Nom du joueur',
                'name' => 'nom',
            ],
            [
                'label' => 'Dorsa',
                'name' => 'dorsa',
            ],
        ]),'files' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            [
                'label' => 'Joueur',
                'name' => 'logo',
            ],
        ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>

      
    </div>
    <div class="col-md-4">
        <div class="card card-height">
            <div class="card-header d-flex justify-content-center align-items-center flex-column ">
                <h4> des images équipe/joueur</h4>
                <div class="d-flex justify-content-between align-items-center w-100">
                    <button class="btn btn-warning btn-active px-4 py-2 mx-2 text-white">Equipe</button>
                    <button class="btn btn-warning px-4 py-2 mx-2 text-white">Joueur</button>
                </div>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center flex-column">
                
                <div
                    class="team-or-player d-flex flex-column justify-content-center align-items-center w-100 mb-2">
                    <select class="my-select w-100 mb-2 " name="team">
                        <option disabled selected value="Selectionne la team ">Selectionne la team</option>
                        <?php if(isset($teams)): ?>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tm->id); ?>"><?php echo e($tm['nom']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <select class="my-select w-100 mb-2 " name="player">
                        <option disabled selected value="Selectionne le joueur ">Selectionne le joueur</option>
                        <?php if(isset($teams)): ?>
                            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($tm->players): ?>
                                    <?php $__currentLoopData = $tm->players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($player->team): ?>
                                            <option value="<?php echo e($player['id']); ?>"
                                                data-team-player="<?php echo e($player->team->id); ?>"><?php echo e($player['nom']); ?>

                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="upload-container position-relative"
                    onclick="document.getElementById('file-input').click();">
                    <img id="upload-preview" src="<?php echo e(asset('assets/images/drop-1.png')); ?>" class="img-fluid">
                    <span class="image-loading position-absolute " id="image-loading"></span>
                </div>
                <input type="file" id="file-input" accept="image/*" onchange="uploadImage(event)">

            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 g-1 w-100 mt-1">
    <div class="col-md-4">
        <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Mise à jour de la team'),'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('t_update')),'ms_team' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teams),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Update1')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
       
    </div>
    <div class="col-md-4">
        <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Mise à jour du joueur'),'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('p_update')),'ms_player' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teams),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Update2')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
       
    </div>
    <div class="col-md-4">
        <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('but_carton')),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Buts marqués & Cartons'),'ms_team_player' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teams),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Enrégistrement1')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
        
    </div>
</div>
<!--creation de poules-->
<?php
    $poules = [
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'K',
        'L',
        'M',
        'N',
        'O',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        'Z',
    ];
?>
<div class="row row-cols-1 g-1 w-100 mt-1">
    <div class="col-md-2">
        <div class="card card-height">
            <div class="card-header d-flex justify-content-center align-items">
                <h4>Création de poule</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-2">
                        <select class="my-select">
                            <option disabled selected value="creation de poule">Creéation de poule</option>
                            <?php $__currentLoopData = $poules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="Poule <?php echo e($poule); ?>">Poule <?php echo e($poule); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                    </div>


                    <div class="mb-2 d-flex justify-content-center">
                        <button type="submit" class="px-4 py-2 rounded btn but-primary">Création..</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card card-height">
            <div class="card-header d-flex justify-content-center align-items">
                <h4>Ajout des équipes </h4>
            </div>
            <div class="card-body flex-grow-1 d-flex flex-column">
                <div class="man-ou-auth d-flex justify-content-between align-items-center">
                    <button id="manuelBtn"
                        class="px-2 mx-2 border-0 btn btn-solo btn-active py-2">Manuel</button>
                </div>
                <div>
                    <div class="flex-grow-1 d-flex flex-column">
                        <!--team1-->
                        <div class="row g-1 w-100">
                            <div class="col-5 col-md-4 mx-auto d-flex flex-column flex-grow-1 height-100">
                                <div
                                    class="card flex-grow-1 d-flex justify-content-center align-items-center flex-column">
                                    <div class="card-body">
                                        <div class="dropdown">
                                            <button class="dropdown-btn bg-success">
                                                Poule A
                                                <span class="mdi mdi-dots-vertical text-white"></span>
                                            </button>
                                            <div class="dropdown-content">
                                                <a class="text-primary text-center "
                                                    href="#">Ajouter</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-7 col-md-8 mx-auto d-flex flex-column flex-grow-1 height-100">
                                <div class="row w-100 g-1 row-cols-1 row-cols-md-3">
                                    <div class="col mx-auto d-flex flex-column flex-grow-1 height-1001">
                                        <div
                                            class="card flex-grow-1 d-flex justify-content-center align-items-center flex-column">
                                            <div class="card-body">
                                                <div class="dropdown">
                                                    <button class="dropdown-btn">
                                                        Talent
                                                        <span class="mdi mdi-dots-vertical text-white"></span>
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <a class="text-danger text-center"
                                                            href="#">Retirer</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mx-auto d-flex flex-column flex-grow-1 height-100">
                                        <div
                                            class="card flex-grow-1 d-flex justify-content-center align-items-center flex-column">
                                            <div class="card-body">
                                                <div class="dropdown">
                                                    <button class="dropdown-btn">
                                                        Talent
                                                        <span class="mdi mdi-dots-vertical text-white"></span>
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <a class="text-danger text-center"
                                                            href="#">Retirer</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mx-auto d-flex flex-column flex-grow-1 height-100">
                                        <div
                                            class="card flex-grow-1 d-flex justify-content-center align-items-center flex-column">
                                            <div class="card-body">
                                                <div class="dropdown">
                                                    <button class="dropdown-btn">
                                                        Talent
                                                        <span class="mdi mdi-dots-vertical text-white"></span>
                                                    </button>
                                                    <div class="dropdown-content">
                                                        <a class="text-danger text-center"
                                                            href="#">Retirer</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['select1' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($teams),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Création de match'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('creation-match'),'match_keys' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            [
                'label' => 'Date du match',
                'name' => 'date_match',
            ],
            [
                
                'heure' => 'heure_match',
            ],
             [
                
                'minute' => 'minute_match',
            ],
        ]),'select2' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('$teams')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
        
    </div>
</div>
<?php if(isset($teams)): ?>
<div class="row g-0 w-100 mt-1">
    <div class="col-md-12 mx-auto d-flex flex-column flex-grow-1 height-100">
        <div class="card flex-grow-1">
            <div class="d-flex justify-content-center align-items-center">Fiche de match</div>

            <!-- Sélecteur d'équipe -->
            <select id="team-select-four" class="my-select">
                <option disabled selected value="">Sélectionnez l'équipe</option>
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($team->nom); ?>" data-players="<?php echo e(json_encode($team['players'])); ?>">
                        <?php echo e($team->nom); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <!-- Formulaire de joueurs -->
            <form id="players-form">
                <div class="table-responsive">
                    <table class="table" id="players-table">
                        <thead>
                            <tr>
                                <th scope="col">Joueur</th>
                                <th scope="col">CJ</th>
                                <th scope="col">CR</th>
                                <th scope="col">Play</th>
                                <th scope="col">But</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Les lignes de joueurs seront ajoutées ici dynamiquement -->
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn but-primary">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\players-teams\aide.blade.php ENDPATH**/ ?>