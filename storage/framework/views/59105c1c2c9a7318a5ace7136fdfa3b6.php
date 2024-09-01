<link rel="stylesheet" href="<?php echo e(asset('assets/css/form.css')); ?>">
<div class="modal fade" id="equipeModal" tabindex="-1" aria-labelledby="equipeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="equipeModalLabel">Ajout du joueur dans une équipe
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form   id="player-form" method="post" action="<?php echo e(route('store-player')); ?>"  enctype="multipart/form-data">
                    <?php echo method_field('POST'); ?>
                     <?php echo csrf_field(); ?>
                     <div class="mb-2">
                        <select class="my-select" name="team">
                            <option disabled selected value="Selectionne la team ">Selectionne la team</option>
                           <?php if(isset($teams)): ?>
                        
                           <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option['id']); ?>"><?php echo e($option['nom']); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>

                    
                </div>
                     <div class="mb-2">
                        <label for="nom" class="form-label">Nom du joueur</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="dorsa" class="form-label">Dorsa</label>
                        <input type="number" min="1" name="dorsa" id="dorsa" class="form-control" required>
                    </div>
                    <div class="uploader">
                        <img id="playerImage" src="https://via.placeholder.com/100x50" alt="Logo">
                        <input type="file" id="player-image" name="logo" class="d-none" accept="image/*" onchange="displayImage(this, 'playerImage')">
                        <label for="player-image" class="btn-upload">Charger le logo pour le joueur</label>
                   
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn but-primary " id="player-submit">
                            <span id="player-loader" class="spinner-border spin-l text-success spinner-border-sm d-none"></span>
                            Ajout du joueur
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('assets/js/form.js')); ?>"></script>
<script>
    document.getElementById('player-form').addEventListener('submit', function(e) {
e.preventDefault();


const loader = document.getElementById('player-loader');
loader.classList.remove('d-none');


const submitButton = document.getElementById('player-submit');
submitButton.disabled = true;


setTimeout(() => {
this.submit(); 
}, 800);
});
</script><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\players-teams\player.blade.php ENDPATH**/ ?>