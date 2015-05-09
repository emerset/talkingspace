<?php require 'core/init.php'; ?>
<?php 
// Create topics object
$topic = new Topic();

// Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

// Get template and assign vars
$template = new Template('templates/topics.php');

//Assign vars
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $topic->getTotalUsers();
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Posts In "'.$topic->getByCategory($category)->name.'"';
} else {
	$template->topics = $topic->getAllTopics();
}

// Display template
echo $template;
?>
