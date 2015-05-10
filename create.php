<?php require 'core/init.php'; ?>
<?php 

// Create topic object
$topic = new Topic();

// Get template
$template = new Template('templates/create.php');

//Assign vars

// Display template
echo $template;
?>
