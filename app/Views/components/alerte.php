<div class="container px-5 position-relative">
    <?php
        if (!empty($_SESSION['flash'])): ?>
        <?php
        $type = $_SESSION['flash']['type'] ?? 'info';

        $colors = [
           'error' => 'danger',
           'success' => 'success',
           'warning' => 'warning',
           'info' => 'info'
        ];

        $color = $colors[$type] ?? 'info';
        ?>
        
            <div class="alert alert-<?= $color ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['flash']['message'] ?> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    
</div>