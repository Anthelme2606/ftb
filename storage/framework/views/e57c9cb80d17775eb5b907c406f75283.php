<link rel="stylesheet" href="<?php echo e(asset('assets/css/form.css')); ?>">
<div class="modal fade" id="updateEquipe" tabindex="-1" aria-labelledby="updateequipeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateequipeModalLabel">Mise à jour de l' équipe
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form   id="upe-form" method="post" action="<?php echo e(route('t_update')); ?>"  enctype="multipart/form-data">
                    <?php echo method_field('POST'); ?>
                     <?php echo csrf_field(); ?>
                     <?php if(isset($teams) && $teams!==null): ?>
                   
                    <div class="mb-2">
                        <select id="upe-team-select" class="my-select" name="team">
                            <option disabled selected value="">Sélectionnez l'équipe</option>
                            <?php if(isset($teams)): ?>
                                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option['id']); ?>" data-name="<?php echo e($option['nom']); ?>" data-pseudo="<?php echo e($option['pseudo']); ?>" data-representant="<?php echo e($option['representant']->nom); ?>">
                                        <?php echo e($option['nom']); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="text" id="upe-team-name" class="w-100 px-2 rounded input-team" name="team-name" value="" placeholder="Nom de l'équipe">
                    </div>
                    <div class="mb-2">
                        <input type="text" id="upe-team-pseudo" class="w-100 px-2 rounded input-team" name="team-pseudo" value="" placeholder="Pseudo de l'équipe">
                    </div>
                    <div class="mb-2">
                        <input type="text" id="upe-team-representant" class="w-100 px-2 rounded input-team" name="team-representant" value="" placeholder="Représentant de l'équipe">
                    </div>
                    
                   
                    <?php endif; ?>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn but-primary " id="upe-submit">
                            <span id="upe-loader" class="spinner-border spin-l text-success spinner-border-sm d-none"></span>
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
    document.getElementById('upe-form').addEventListener('submit', function(e) {
e.preventDefault();


const loader = document.getElementById('upe-loader');
loader.classList.remove('d-none');


const submitButton = document.getElementById('upe-submit');
submitButton.disabled = true;


setTimeout(() => {
this.submit(); 
}, 800);
});


    const teamSelect = document.querySelector('#upe-team-select');
  
    const teamNameInput = document.getElementById('upe-team-name');
    const teamPseudoInput = document.getElementById('upe-team-pseudo');
    const teamRepresentantInput = document.getElementById('upe-team-representant');

    teamSelect.addEventListener('change', function() {
        const selectedOption = teamSelect.options[teamSelect.selectedIndex];

        // Extraire les données de l'option sélectionnée
        const teamName = selectedOption.getAttribute('data-name');
        const teamPseudo = selectedOption.getAttribute('data-pseudo');
        const teamRepresentant = selectedOption.getAttribute('data-representant');

        // Mettre à jour les champs d'entrée
        teamNameInput.value = teamName || '';
        teamPseudoInput.value = teamPseudo || '';
        teamRepresentantInput.value = teamRepresentant || '';
    });

</script><?php /**PATH C:\projects\ftb-lara\ftb\resources\views\players-teams\update-team.blade.php ENDPATH**/ ?>