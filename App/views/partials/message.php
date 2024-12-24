<?php if ($successMessages): ?>
    <?php foreach ($successMessages as $successMessage): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message">
                <strong><?=$successMessage ?></strong>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>