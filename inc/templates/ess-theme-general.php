<h1>Ess-geneve General</h1>
<?php settings_errors(); ?>


<form method="post" class="ny-general-form" action="options.php">
  <?php settings_fields('ny-theme-support'); ?>
  <?php do_settings_sections('ny_theme') ?>
  <?php submit_button(); ?>
</form>
