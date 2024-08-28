<div class="modal fade" id="ajoutMatchModal" tabindex="-1" aria-labelledby="ajoutMatchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajoutMatchModalLabel">Nouveau match</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    <div class="card card-custom">
        <div class="card-header text-center">
            <h2 class="card-title">Créer un nouveau match</h2>
        </div>
        <div class="card-body">
            <form   id="matchForm" method="post" action="<?php echo e(route('m_creation')); ?>"  enctype="multipart/form-data">
                 <?php echo method_field('POST'); ?>
                 <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="team1" class="form-label">Équipe 1</label>
                    <select id="team1" class="form-select" name="team1_id" required>
                        <option value="">Choisissez l'équipe 1</option>
                        <?php if(isset($teams)): ?>
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($team['id']); ?>"><?php echo e($team['nom']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      
                    </select>
                </div>
                <div class="mb-3">
                    <label for="team2" class="form-label">Équipe 2</label>
                    <select id="team2" class="form-select" name="team2_id" required>
                        <option value="">Choisissez l'équipe 2</option>
                        <?php if(isset($teams)): ?>
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option  value="<?php echo e($team['id']); ?>"><?php echo e($team['nom']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gameTime" class="form-label">Temps de jeu (minutes)</label>
                    <input type="number" id="gameTime" name="timer" class="form-control" placeholder="90" required>
                </div>
                <div class="mb-3">
                    <label for="matchDate" class="form-label">Date du match</label>
                    <input type="date" id="matchDate" name="date" class="form-control" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn but-primary " id="match-submit">
                        <span id="match-loader" class="spinner-border spin-l text-success spinner-border-sm d-none"></span>
                       Match
                    </button>
                </div> </form>
        </div>
        <div class="card-footer">
            <h3 class="card-title">Aperçu du match</h3>
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div id="preview-teams">
                            <span>Équipe 1 vs Équipe 2</span>
                        </div>
                        <div id="preview-time">
                            <span>90 min</span>
                        </div>
                    </div>
                    <div id="preview-date">
                        <span>Date à définir</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('assets/js/form.js')); ?>"></script>
<script>
    document.getElementById('matchForm').addEventListener('submit', function(e) {
e.preventDefault();


const loader = document.getElementById('match-loader');
loader.classList.remove('d-none');


const submitButton = document.getElementById('match-submit');
submitButton.disabled = true;


setTimeout(() => {
this.submit(); 
}, 800);
});

    document.getElementById('matchForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const team1 = document.getElementById('team1').value || "Équipe 1";
        const team2 = document.getElementById('team2').value || "Équipe 2";
        const gameTime = document.getElementById('gameTime').value || "90";
        const matchDate = document.getElementById('matchDate').value || "Date à définir";

        document.getElementById('preview-teams').innerHTML = `<span>${team1} vs ${team2}</span>`;
        document.getElementById('preview-time').innerHTML = `<span>${gameTime} min</span>`;
        document.getElementById('preview-date').innerHTML = `<span>${matchDate}</span>`;
    });
</script>
 <script>
    const team1Select = document.getElementById('team1');
    const team2Select = document.getElementById('team2');
    const originalTeam2Options = [...team2Select.options];

    team1Select.addEventListener('change', function () {
        updateTeamOptions(team1Select, team2Select);
    });

    team2Select.addEventListener('change', function () {
        updateTeamOptions(team2Select, team1Select);
    });

    function updateTeamOptions(changedSelect, otherSelect) {
        const selectedValue = changedSelect.value;
        const otherOptions = [...originalTeam2Options]; // Clone original options

        // Clear the other select options
        otherSelect.innerHTML = '';

        otherOptions.forEach(option => {
            if (option.value !== selectedValue) {
                otherSelect.appendChild(option);
            }
        });

        // Re-add a placeholder option
        otherSelect.insertAdjacentHTML('afterbegin', '<option value="">Choisissez l\'équipe</option>');

        // Retain the previous selection if still valid
        const previousSelection = otherSelect.dataset.selectedValue;
        if (previousSelection && otherSelect.querySelector(`option[value="${previousSelection}"]`)) {
            otherSelect.value = previousSelection;
        } else {
            otherSelect.value = "";
        }

        // Store the new selection
        changedSelect.dataset.selectedValue = selectedValue;
    }
</script>
<?php /**PATH C:\projects\ftb-lara\ftb\resources\views\players-teams\match.blade.php ENDPATH**/ ?>