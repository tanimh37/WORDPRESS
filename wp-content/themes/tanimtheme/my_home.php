<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo get_template_directory_uri() ?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
</head>
<body>
    <?php /* Template Name: home_template */ ?>



<!--------------Header--------------->
 <?php get_header() ?>



<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				<?php
				$query = new WP_Query(array('post_type' => 'tanim_slider',) );
				if($query->have_posts()):
				while($query->have_posts()):	
					$query->the_post(  );?>

					<li><?php the_post_thumbnail() ?></li>


				<?php
				endwhile;
				endif;
				
				?>

				

				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

					<?php
				$query = new WP_Query(array('post_type' => 'post', 'posts_per_page'=> 5 , ) );
				if($query->have_posts()):
				while($query->have_posts()):	
					$query->the_post(  );?>



					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
							<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author()?> on <?php the_date('F d, Y') ?>with<a href="#">01 Commnets</a>]</div>
                        <p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</article>

				<?php
				endwhile;
				endif;
				
				?>

				</div>
			</div>
			<?php get_sidebar() ?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer() ?>

</body></html>