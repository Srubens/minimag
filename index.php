<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
  	<meta name="author" content="<?php bloginfo('author'); ?>">
	<?php wp_head(); ?>
</head>
<body>

	<div class="main_header_top">
		<div class="flex">
			<nav class="main_menu_header">
				<ul class="main_ul_menu_header">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li><a href="#">Archive</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="main_bg_logo">
		<div class="flex">
			<h1 class="main_none">Minimag</h1>
			<a class="main_logo_a" href="#" title="Minimag">
				<img class="main_logo" src="<?php bloginfo('template_url') ?>/images/minimag.png" alt="logo">
			</a>
		</div>
	</div>

	<div class="flex">

		<div class="main_menu_category_list">

			<div class="flex">
				<ul class="category_ul_list">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li><a href="#">CATEGORY 1</a></li>
					<li><a href="#">CATEGORY 2</a></li>
					<li><a href="#">CATEGORY 3</a></li>
					<li><a href="#">SITEMAP</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>

				<form action="" class="main_search" method="POST">
					<input type="search" required>
					<input type="submit" value="Buscar">
				</form>
			</div>

		</div>	

	</div>

	
	<div class="flex">

		<div class="main_content">

			<section class="main_all_content">
				
				<header class="main_header_content">
					<div class="flex">
						<h3>What's new?</h3>
						<h3>One Page Free HTML AND CSS Web Site Template</h3>
					</div>
				</header>

				<?php for($b = 0; $b < 4; $b++){ ?>

				<div class="flex">

					<?php for($a = 0; $a < 2; $a++){ ?>

					<div class="main_two_box_post flex-2">

						<article class="box_post">
							<div class="box_main_img">
								<img src="<?php bloginfo('template_url') ?>/images/treino.jpg" alt="imagem do post" title="imagem do post">
								<span class="box_commets">5</span>
							</div>
							<span>Data 13-01-2020</span>
							<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia corporis temporibus ea dolores quos recusandae doloribus aliquid praesentium dolor at repellat cum est, delectus eveniet suscipit blanditiis odio ipsa architecto.</p>
						</article>
						
					</div>

					<?php } ?>

				</div>
				<hr>
				<?php } ?>


				<div class="paginator">
					<span>1</span>
					<span>2</span>
					<span>3</span>
					<span>4</span>
					<span>5</span>
				</div>

			</section>

		</div>

		<div class="main_sidebar">
			<div class="">

				<header class="main_follow">
					<div class="flex">
						<h2>follow:</h2>
						<span>twitter</span>
						<span>facebook</span>
						<span>youtuber</span>
						<span>dribble</span>
						<span>rss</span>
					</div>
				</header>

				<div class="popular_post">

					<header class="popular_post_header">
						<h2>Popular Posts</h2>
					</header>

					<div class="box_popular_posts">
						
						<article>
							<img src="" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</article>

						<hr>

					</div>

					<div class="fa_page_box">
						<h2>Like us on FaceBook</h2>
						<div>arquivo que vamos pegar no facebook</div>
						<hr>
					</div>

					<div class="box_keywords">
						<p>Slide</p>
						<p>Gallery</p>
						<p>Games</p>
						<p>Business</p>
					</div>

				</div>

			</div>

	</div>

	</div>

	<section class="more">
		<div class="flex">
			
			<article class="box_more">
				<h1>flickr images</h1>
			</article>


			<span>scroll top</span>
		</div>
	</section>

	<footer class="main_footer">
		<div class="flex">
			<span>Minimag &copy; All Rights Reseverd.</span>
			<span>Create by Rubens Filipe</span>
		</div>
	</footer>


<?php wp_footer(); ?>
</body>
</html>