<?php require('core/init.php'); ?>

<?php 
// Create topic object
$topic = new Topic();
// Get template
$template = new Template('templates/frontpage.php');

//Assign vars
$template->topics = $topic->getAllTopics();

// Display template
echo $template;
?>
