<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . './admin_functions.php'); ?>
    <?php include(ROOT_PATH . './head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>LifeBlog - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '../logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="menu">
	<div class="card">
		<div class="card-header">
			<h2>Actions</h2>
		</div>
		<div class="card-content">
			<a href="<?php echo BASE_URL . 'admin/create_post.php' ?>">Create Posts</a>
			<a href="<?php echo BASE_URL . 'admin/posts.php' ?>">Manage Posts</a>
			<a href="<?php echo BASE_URL . 'admin/topics.php' ?>">Manage Topics</a>
		</div>
	</div>
</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="posts.php">
				<span>43</span> <br>
				<span>Published posts</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
	<div class="menu">
	<div class="card">
		<div class="card-header">
			<h2>Actions</h2>
		</div>
		<div class="card-content">
			<a href="<?php echo BASE_URL . 'admin/create_post.php' ?>">Create Posts</a>
			<a href="<?php echo BASE_URL . 'admin/posts.php' ?>">Manage Posts</a>
			<a href="<?php echo BASE_URL . 'admin/topics.php' ?>">Manage Topics</a>
		</div>
		</div>
</body>
</html>