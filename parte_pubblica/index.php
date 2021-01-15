<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
</head>
<body>
    <header>
    <?php include( ROOT_PATH . '/includes/navbar.php') ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <h1><a href="">The Blond Caramel</a></h1>
                <p class="lead"><i class="fa fa-user"></i> by <a href="">Zuzanna Kacka</a>
                </p>
               
                <div class="well">
                    <h4><i class="fa fa-book"></i> Questa sono io:</h4>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                <p style="text-align:center; margin-top:20px;">
                                    <img src="./img/io.jpg" class="img-responsive" alt="">
                                </p>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h3>Questa sono io benvenuti nel mio blog</h3>
                                        <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                <!-- /well -->
                <h2>Ecco i post più recenti:</h2>

                <?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . './blog.jpg' . $post['image']; ?>" class="post_image" alt="">
    
		<?php if (isset($post['topic']['name'])): ?>
			<a 
				href="filtered_posts.php?topic=<?php echo $post['topic']['id']; ?>">
                <div class="btn category">
				<h3><?php echo $post['topic']['name'] ?><h3>
			</a>
		<?php endif ?>

		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
<center>
                    <p><strong>EVERYDAY BEAUTY ROUTINE</strong> </center>

                <div class="vid">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0zlWu75k9Ow" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <br/>
                <br/>
                <p>
                    <h3>Provalo anche tu!</h3>
                </p>
                <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor.</p>
                <blockquote>
                    <p>„Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.”</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <p>
                    <h4>I like the post? Like this!</h4>
                </p>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                            p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + '://platform.twitter.com/widgets.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'twitter-wjs');
                </script>

                <div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

                <script type="text/javascript">
                    (function() {
                        var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/platform.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <br/>
                

<div class="well">
                    <h4><i class="fa fa-tags"></i> Popular Tags:</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href=""><span class="badge badge-info">hair</span></a>
                                </li>
                                <li><a href=""><span class="badge badge-info">beauty</span></a>
                                </li>
                                <li><a href=""><span class="badge badge-info">fashion</span></a>
                                </li>
                                <li><a href=""><span class="badge badge-info">food</span></a>
                                </li>
                                <li><a href=""><span class="badge badge-info">Good Day :)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
     </div>
              
      




            </div>

                </div>

<footer>
           <!-- footer -->
           <?php include( ROOT_PATH . '/includes/footer.php') ?>

  </footer>

</html>