<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link href='https://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_head(); ?>
<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
  assets: '<?php echo get_template_directory_uri(); ?>',
  tests: {}
});
</script>
</head>
<body>
<header class="header">
	<div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
		<svg style="position: absolute; opacity: 0.95;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="none" id="svg-bg">
			<path d="M0,0 v100 l100,-100 Z" fill="#EE3281" />
		</svg>	
	</div>
	<nav class="header__nav_above">
		<ul>
			<li><a target="_blank" href="https://www.instagram.com/cerebellum.official/">instagram</a></li>
		</ul>
	</nav>
	<h1 class="header__title">Grow inc.<br><span>地域に愛され、100年続く会社へ</span></h1>
	<p class="header__image" style="text-align: right;">
		<?php if(is_front_page()) : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/logo.png" alt="ロゴ" />
		<?php elseif(is_page('cts')): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/cts_logo.jpg" alt="ロゴ" />
		<?php elseif(is_page('rocoreha')): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/rocoreha_logo.jpg" alt="ロゴ" />
		<?php endif; ?>
	</p>
	<nav class="header__nav_bottom">
		<ul>
			<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
			<li><a href="<?php echo home_url(); ?>/news">お知らせ一覧</a></li>
			<li><a href="<?php echo home_url(); ?>/cts">CTS</a></li>
			<li><a href="<?php echo home_url(); ?>/rocoreha">ロコリハ</a></li>
			<li><a href="<?php echo home_url(); ?>/company">会社情報・アクセス</a></li>
			<li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
		</ul>
	</nav>
	<div id="navArea" class="sp">
		<nav class="sp__nav">
			<div class="inner">
				<ul>
					<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
					<li><a href="<?php echo home_url(); ?>/cts">CTS</a></li>
					<li><a href="<?php echo home_url(); ?>/rocoreha">ロコリハ</a></li>
					<li><a href="<?php echo home_url(); ?>/company">会社情報・アクセス</a></li>
					<li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
				</ul>
			</div>
		</nav>
		<div class="toggle_btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div id="mask"></div>
	</div>
</header>
<section>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
</div>
</section>