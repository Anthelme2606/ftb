<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["name"=>null
,"title"=>null,
"select"=>null,
"ms_team"=>null,
"ms_player"=>null,
"ms_team_player"=>null,
"select1"=>null,
"match_keys"=>null,
"select2"=>null,
"route"=>null,"keys"=>null,"files"=>null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((["name"=>null
,"title"=>null,
"select"=>null,
"ms_team"=>null,
"ms_player"=>null,
"ms_team_player"=>null,
"select1"=>null,
"match_keys"=>null,
"select2"=>null,
"route"=>null,"keys"=>null,"files"=>null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>,

 
 
        <div class="card card-height">
            <div class="card-body">
                <h4 class="card-title text-center mb-4"><?php echo e($title); ?></h4>
                <form   id="<?php echo e($name); ?>-form" method="post" action="<?php echo e($route); ?>"  enctype="multipart/form-data">
                   <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>

                    <?php if($select1 && $select1 !== null): ?>
                    <div class="mb-2">
                        <select class="my-select">
                            <option disabled selected value="Premier team">Première team</option>
                            <?php $__currentLoopData = $select1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($sel['id']); ?>"><?php echo e($sel['nom']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                <?php endif; ?>
                
                <?php if(isset($match_keys) && $match_keys !== null): ?>
                    <?php $__currentLoopData = $match_keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($field['name'])): ?>
                            <div class="mb-2">
                                <input type="number" name="<?php echo e($field['name']); ?>" class="w-100 px-2 rounded input-team" placeholder="temps de jeu" min="0">
                            </div>
                        <?php endif; ?>
          
                        
                            <div class="mb-2">
                                <div class="form-group">
                                   
                                  
                                    <div class="time-input ">
                                        <?php if(isset($field['heure'])): ?>
                                            <input type="text" name="<?php echo e($field['heure']); ?>" id="hours" class="input-team" maxlength="2" placeholder="hh">
                                        <?php endif; ?>
                    
                                        <?php if(isset($field['minute'])): ?>
                                            <input type="text" name="<?php echo e($field['minute']); ?>" id="minutes" class="form-control" maxlength="2" placeholder="mm">
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                            </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                           
                  
                  
                    <?php if(isset($select) && $select!==null): ?>
                   
                    <div class="mb-2">
                            <select class="my-select" name="team">
                                <option disabled selected value="Selectionne la team ">Selectionne la team</option>
                               <?php if(isset($select)): ?>
                            
                               <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($option['id']); ?>"><?php echo e($option['nom']); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>

                        
                    </div>
                   
                    <?php endif; ?>
                    <?php if(isset($ms_team) && $ms_team!==null): ?>
                   
                    <div class="mb-2">
                        <select id="team-select" class="my-select" name="team">
                            <option disabled selected value="">Sélectionnez l'équipe</option>
                            <?php if(isset($ms_team)): ?>
                                <?php $__currentLoopData = $ms_team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option['id']); ?>" data-name="<?php echo e($option['nom']); ?>" data-pseudo="<?php echo e($option['pseudo']); ?>" data-representant="<?php echo e($option['representant']->nom); ?>">
                                        <?php echo e($option['nom']); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="text" id="team-name" class="w-100 px-2 rounded input-team" name="team-name" value="" placeholder="Nom de l'équipe">
                    </div>
                    <div class="mb-2">
                        <input type="text" id="team-pseudo" class="w-100 px-2 rounded input-team" name="team-pseudo" value="" placeholder="Pseudo de l'équipe">
                    </div>
                    <div class="mb-2">
                        <input type="text" id="team-representant" class="w-100 px-2 rounded input-team" name="team-representant" value="" placeholder="Représentant de l'équipe">
                    </div>
                    
                   
                    <?php endif; ?>
                   
                
                    <?php if(isset($keys) && $keys!==null): ?>
                    <?php $__currentLoopData = $keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="mb-2">
                        <label for="<?php echo e(ucfirst($key['name'])); ?>" class="form-label"><?php echo e($key['label']); ?></label>
                        <input type="text" name="<?php echo e($key['name']); ?>" id="<?php echo e(ucfirst($key['name'])); ?>" class="form-control" required>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                   <?php if(isset($files) && $files!==null): ?>
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="uploader">
                            <img id="<?php echo e(ucfirst($file['label'])); ?>Image" src="https://via.placeholder.com/100" alt="Logo for <?php echo e($file['label']); ?>">
                            <input type="file" id="<?php echo e(ucfirst($file['label'])); ?>-image" name="<?php echo e($file['name']); ?>" class="d-none" accept="image/*" onchange="displayImage(this, '<?php echo e(ucfirst($file['label'])); ?>Image')">
                            <label for="<?php echo e(ucfirst($file['label'])); ?>-image" class="btn-upload">Charger le logo pour <?php echo e($file['label']); ?></label>
                       
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  
              
            
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn but-primary " id="<?php echo e($name); ?>-submit">
                            <span id="<?php echo e($name); ?>-loader" class="spinner-border spin-l text-success spinner-border-sm d-none"></span>
                            <?php echo e($name); ?>

                        </button>
                    </div>
                </form>
            </div>
        </div>
      
  
<?php /**PATH C:\projects\ftb-lara\ftb\resources\views\components\form.blade.php ENDPATH**/ ?>