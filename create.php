<?php require 'core/init.php'; ?>
<?php 

// just connect to the DB
$user = new User();

// Get template
$template = new Template('templates/create.php');

//Assign vars

// Display template
echo $template;
?>
