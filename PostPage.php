<?php /* Template Name: PostPage */ ?>

<?php get_header(); ?>
 
    
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER SEC STARTS -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="logo" href="#"><img src="http://localhost/wordpress/wp-content/uploads/2022/05/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="myposts.html">work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="news.html">news</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" >contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- HEADER SEC ENDS -->
    
    <!-- NEWS SEC STARTS -->
    <div class="news-sec-outterwrap">
        <div class="container-fluid">
            <div class="news-sec-innerwrap">
                <h2>news</h2>
                <ul class="nav nav" id="tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="all-news-tab" data-bs-toggle="pill" data-bs-target="#all-news" type="a" role="tab" aria-controls="all-news" aria-selected="true"><span></span> all news</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="cat-a-tab" data-bs-toggle="pill" data-bs-target="#cat-a" type="a" role="tab" aria-controls="cat-a" aria-selected="false"><span></span>cat a</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="cat-b-tab" data-bs-toggle="pill" data-bs-target="#cat-b" type="a" role="tab" aria-controls="cat-b" aria-selected="false"><span></span>cat b</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="cat-c-tab" data-bs-toggle="pill" data-bs-target="#cat-c" type="a" role="tab" aria-controls="cat-c" aria-selected="false"><span></span>cat c</a>
                    </li>
                  </ul>
            </div>
            <div class="news-tabs">
               
                  <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active" id="all-news" role="tabpanel" aria-labelledby="all-news-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
    
    <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                  </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat-a" role="tabpanel" aria-labelledby="cat-a-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat-b" role="tabpanel" aria-labelledby="cat-b-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cat-c" role="tabpanel" aria-labelledby="cat-c-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cat-inner">
                                    <a href="#"><div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p></a>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="cat-inner">
                                    <div class="cat-image">
                                        
                                        <?php
		$image = get_field('image');
		if( !empty($image) ): ?>
			<img style="height: 100%; width: 100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
                                        
                                    </div>
                                    <h3><?php the_field('retail_trends'); ?></h3>
                                    <p><?php the_field('constant'); ?></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                  </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- NEWS SEC ENDS -->

    <!-- PROJECT SEC STARTS -->
    <div class="project-outterwrap">
        <div class="project-inner">
            <h2>Let's start your next project</h2>
            <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- PROJECT SEC ENDS -->

    <!-- FOOTER SEC STARTS -->
    <footer>
        <div class="footer-sec-outterwrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="footer-top">
                        <div class="col-md-2">
                            <div class="footer-content">
                                <ul>
                                    <li><h3>dayton</h3></li>
                                    <li>2056 byers rd. dayton,oh 45342</li>
                                    <li>+1 949 506 1982</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <div class="footer-content">
                                <ul>
                                    <li><h3>los angeles</h3></li>
                                    <li>150 Paularino Ave. Building D, Suite 270 Costa Mesa, CA  92626 </li>
                                    <li>+1 949 506 1982</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <div class="footer-content">
                                <ul>
                                    <li><h3>Detroit</h3></li>
                                    <li>81 Kercheval Avenue Gross Point Farms, MI 48236  </li>
                                    <li>+1 313 530 0816</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="footer-content">
                                <form action="">
                                    <h3>JOIN OUR NEWSLETTER</h3>
                                    <input type="email" placeholder="Email">
                                </form>
                            </div>
                            </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="col-md-6">
                            <div class="copyrights">
                                <p>© 2020 Change Up Inc. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-icons">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SEC ENDS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>