<?php require('core/init.php'); ?>

<?php 
// Create topic object
$topic = new Topic();

// Create User Object
$user = new User();

// Get template
$template = new Template('templates/frontpage.php');

//Assign vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();

// Display template
echo $template;
?>
