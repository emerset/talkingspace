<?php require 'core/init.php'; ?>
<?php 
// Create topics object
$topic = new Topic();

// Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

// Get user from URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

// Get template and assign vars
$template = new Template('templates/topics.php');

//Assign vars
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $topic->getTotalUsers();

// Check for category filter
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Posts In "'.$topic->getByCategory($category)->name.'"';
}
	
// Check for user filter
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	$template->title = 'Posts By "'.$topic->getByUser($user_id)->name.'"';
}

if(!isset($category) && !isset($user_id)){
	$template->topics = $topic->getAllTopics();
}

// Display template
echo $template;
?>
