
<?php print render($page['info_contact']); ?>
<?php print render($page['main_menu']); ?>
<?php print render($page['content']); ?>
<?php print render($page['footer']); ?>

<?php if ($messages) print $messages; ?>

<?php if ($breadcrumb) print $breadcrumb; ?>
    
<?php if ($title) print "<h1>".$title."</h1>";?>

<?php if ($tabs) print render($tabs); ?>

<?php if($site_name || $site_slogan) echo $site_name . " " . $site_slogan; ?>