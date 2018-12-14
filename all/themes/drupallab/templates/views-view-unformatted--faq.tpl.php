<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<!-- Adds the div block for wrapper -->
<div class="ziehharmonika">
  <?php foreach ($rows as $id => $row): ?>
    <?php
    // Checks the class is set for row.
    if ($classes_array[$id]): ?>
      <div class="<?php print $classes_array[$id]; ?>">
        <?php print $row; ?>
      </div>
    <?php else: ?>
      <?php print $row; ?>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
