
<link rel="stylesheet" href="<?php echo e(asset('assets/css/sidebar.css')); ?>">
<div class="sidebar" id="sidebar">
    <aside>
        <div class="logo logo-sidebar">
            <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" class="img-fluid" alt="">
        </div>
        
        <ul class=" bg-white">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <div class="d-flex align-items-center">
                        <div class="round-50">
                            <span class="mdi mdi-soccer turn-live"></span>
                        </div>
                        <span class="sidebar-title">Dashboard</span>
                    </div>
                </a>
            </li>
            
            <li>
                <a href="<?php echo e(route('teams')); ?>">
                    <div class="d-flex align-items-center">
                        <div class="round-50">
                            <span class="mdi mdi-account-group"></span>
                        </div>
                        <span class="sidebar-title">Equipes</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('team-player')); ?>">
                    <div class="d-flex align-items-center">
                        <div class="round-50">
                            <span class="mdi mdi-account-multiple"></span>
                        </div>
                        <span class="sidebar-title">Gestions</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('scores')); ?>">
                    <div class="d-flex align-items-center">
                        <div class="round-50">
                            <span class="mdi mdi-numeric"></span>
                        </div>
                        <span class="sidebar-title">Scores</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('trophies')); ?>">
                    <div class="d-flex align-items-center">
                        <div class="round-50">
                            <span class="mdi mdi-trophy"></span>
                        </div>
                        <span class="sidebar-title">Trophés</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('login')); ?>">
                    <div class="d-flex align-items-center">
                        <div class="round-50">
                            <span class="mdi mdi-login"></span>
                        </div>
                        <span class="sidebar-title">Login</span>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
</div>



<?php /**PATH C:\projects\ftb-lara\ftb\resources\views\components\sidebar.blade.php ENDPATH**/ ?>