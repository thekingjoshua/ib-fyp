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

<?php if ($errorMessages): ?>
    <?php foreach ($errorMessages as $errorMessage): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message">
                <strong><?=$errorMessage ?></strong>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>