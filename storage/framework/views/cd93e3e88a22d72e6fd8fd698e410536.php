<div>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-2">
            <input class="w-100 px-2 rounded input-team" wire:model.defer="teamName" placeholder="nom de la team ..">
            <?php $__errorArgs = ['teamName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-2">
            <input class="w-100 px-2 rounded input-team" wire:model.defer="teamPseudo" placeholder="Team Pseudo">
            <?php $__errorArgs = ['teamPseudo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-2">
            <input type="text" class="w-100 px-2 rounded input-team" wire:model.defer="repName" placeholder="nom du représentant">
            <?php $__errorArgs = ['repName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-2">
            <div class="file-upload-wrapper">
                <div class="file-upload-input" data-placeholder="team logo"></div>
                <input id="input-image-1" type="file" wire:model="teamImage" class="file-upload-hidden">
                <?php $__errorArgs = ['teamImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-2">
            <div class="file-upload-wrapper">
                <div class="file-upload-input" data-placeholder="Représentant logo"></div>
                <input id="input-image-2" type="file" wire:model="repImage" class="file-upload-hidden">
                <?php $__errorArgs = ['repImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-2 d-flex justify-content-center">
            <button type="submit" class="px-4 py-2 rounded btn but-primary">
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true" wire:loading></span>
                Enregistrer la team
            </button>
        </div>
    </form>
</div>
<?php /**PATH C:\projects\ftb-lara\ftb\resources\views\livewire\team-form.blade.php ENDPATH**/ ?>