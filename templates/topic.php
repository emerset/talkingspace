<?php include 'includes/header.php'; ?>
<ul id="topics">
	<li id="main-topic" class="topic topic">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="avatar pull-left" src="<?php echo BASE_URI ?>/images/avatars/<?php echo $topic->avatar ?>" />
					<ul>
						<li><strong><?php echo $topic->username ?></strong></li>
						<li><?php echo userPostCount($topic->user_id) ?> Posts</li>
						<li><a href="<?php echo BASE_URI ?>topics.php?user=<?php echo $topic->user_id ?>">Profile</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="topic-content pull-right">
					<?php echo $topic->body ?>
				</div>
			</div>
		</div>
	</li>
	<li class="topic topic">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="avatar pull-left" src="img/gravatar.jpg" />
					<ul>
						<li><strong>Casey</strong></li>
						<li>43 Posts</li>
						<li><a href="profile.php">Profile</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="topic-content pull-right">
					<p>Congrats on how to make a href and inserting an image...

					You can learn HTML/CSS pretty fast, though how to use it in different scenarios is a whole other deal.

					I like to check out tutorials on how to implement the newest within html/css (html5 / css3), </p>

				</div>
			</div>
		</div>
	</li>
	<li class="topic topic">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="avatar pull-left" src="img/gravatar.jpg" />
					<ul>
						<li><strong>JohnD</strong></li>
						<li>43 Posts</li>
						<li><a href="profile.php">Profile</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="topic-content pull-right">
					<p>w3schools is very good. I can't code an entire site, but I can handle basic things lik links, fonts and colors. I'm not intimidated by the site of code.</p>
				</div>
			</div>
		</div>
	</li>
</ul>
<h3>Reply To Topic</h3>
<form role="form">
	<div class="form-group">
		<textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
		<script>
			CKEDITOR.replace( 'reply' );
		</script>
	</div>
</form>
<?php include 'includes/footer.php'; ?>
