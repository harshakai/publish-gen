<?php
session_start();
?>

<!-- ... (Your existing HTML content) ... -->

<!-- Add a section to display error messages, if any -->
<?php if (isset($_SESSION["apply_error"])): ?>
  <div class="error-message">
    <?php echo $_SESSION["apply_error"]; ?>
  </div>
<?php endif; ?>
<?php unset($_SESSION["apply_error"]); ?>

<!-- ... (Your existing HTML content) ... -->
