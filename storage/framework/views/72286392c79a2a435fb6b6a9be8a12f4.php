

<link rel="stylesheet" href="<?php echo e(asset('assets/css/form.css')); ?>">
<div class="modal fade" id="updatePlayer" tabindex="-1" aria-labelledby="updateplayerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateplayerModalLabel">Mise à du joueur
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="upp-form" method="post" action="<?php echo e(route('p_update')); ?>"  enctype="multipart/form-data">
                    <?php echo method_field('POST'); ?>
                     <?php echo csrf_field(); ?>
                    
                     <?php if(isset($teams) && $teams!==null): ?>
                    <div class="mb-2">
                        <select id="team-select-two" class="my-select" name="team">
                            <option disabled selected value="">Sélectionnez l'équipe</option>
                            <?php if(isset($teams) && $teams !== null): ?>
                                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option['id']); ?>" data-name="<?php echo e($option['nom']); ?>" data-players="<?php echo e(json_encode($option['players'])); ?>">
                                        <?php echo e($option['nom']); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                        
                        <select id="player-select" class="my-select mt-2" name="player">
                            <option disabled selected value="">Sélectionnez le joueur</option>
                        </select>
                    </div>
                    
                    <div class="mb-2">
                        <input type="text" id="player-name" class="w-100 px-2 rounded input-team" name="nom" value="" placeholder="Nom du joueur" >
                    </div>
                    <div class="mb-2">
                        <input type="number" min="0" id="player-dorsa" class="w-100 px-2 rounded input-team" name="dorsa" value="" placeholder="Dorsa">
                    </div>
                    
                   
                    <?php endif; ?>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn but-primary " id="upp-submit">
                            <span id="upp-loader" class="spinner-border spin-l text-success spinner-border-sm d-none"></span>
                            Mise à jour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('assets/js/form.js')); ?>"></script>
<script>
    document.getElementById('upp-form').addEventListener('submit', function(e) {
e.preventDefault();


const loader = document.getElementById('upp-loader');
loader.classList.remove('d-none');


const submitButton = document.getElementById('upp-submit');
submitButton.disabled = true;


setTimeout(() => {
this.submit(); 
}, 800);
});

    const teamSelect1 = document.getElementById('team-select-two');
    const playerSelect = document.getElementById('player-select');
    const playerNameInput = document.getElementById('player-name');
    const playerDorsaInput = document.getElementById('player-dorsa');

    teamSelect1.addEventListener('change', function() {
        // Réinitialiser le menu déroulant des joueurs
        playerSelect.innerHTML = '<option disabled selected value="">Sélectionnez le joueur</option>';

        const selectedOption = teamSelect1.options[teamSelect1.selectedIndex];
        const players = JSON.parse(selectedOption.getAttribute('data-players'));

        // Ajouter les options de joueurs au menu déroulant
        players.forEach(player => {
            const option = document.createElement('option');
            option.value = player.id;
            option.textContent = player.nom;
            option.setAttribute('data-dorsa', player.dorsa);
            playerSelect.appendChild(option);
        });
    });

    playerSelect.addEventListener('change', function() {
        const selectedOption = playerSelect.options[playerSelect.selectedIndex];
        playerNameInput.value = selectedOption.textContent;
        playerDorsaInput.value = selectedOption.getAttribute('data-dorsa');
    });

</script><?php /**PATH C:\projects\ftb-lara\ftb\resources\views/players-teams/update-player.blade.php ENDPATH**/ ?>