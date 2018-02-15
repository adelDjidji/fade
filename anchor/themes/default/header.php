<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Fédération Algérienne des Echecs | FADE</title>

		<meta name="description" content="<?php echo site_description(); ?>">
<!--
		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 400px)">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
-->
		<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<!--
		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
-->
	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo page_title(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo page_description(); ?>">

		<link href="<?php echo theme_url('/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
        <link href="<?php echo theme_url('/css/animate.min.css'); ?>" rel="stylesheet">

        <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
		<!--Custom-Theme-files-->
		<link href="<?php echo theme_url('/css/style.css'); ?>" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="<?php echo theme_url('/engine1/style.css'); ?>" />

        <script src="<?php echo theme_url('/js/jquery-1.11.1.min.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/wow.min.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/jquery.flexisel.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/modernizr.custom.min.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/jquery.magnific-popup.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/jquery.chocolat.js'); ?>"></script>
        <script src="<?php echo theme_url('/js/jquery.hoverdir.js'); ?>"></script>

        <!-- slider -->
        <link href="<?php echo theme_url('/css/slider.css'); ?>" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?php echo theme_url('/css/style2.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/css/style33.css'); ?>">

        <link rel="stylesheet" href="<?php echo theme_url('/css/popuo-box.css'); ?>">


        <!--/script-->
	<!--	<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script> -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
        <script>
            new WOW().init();
        </script>

        <script type="text/javascript" src="<?php echo theme_url('/js/jquery.nivo.slider.js'); ?>"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
        <style>
            @font-face {
                font-family: "century_bold";
                src: url(<?php echo theme_url('/css/GOTHICB.TTF'); ?>) format("truetype");
            }
            @font-face {
                font-family: "century";
                src: url(<?php echo theme_url('/css/911Fonts.com_CenturyGothicRegular__-_911fonts.com_fonts_mhpY.ttf'); ?>) format("truetype");
            }
            .century_bold {
                font-family: "century_bold";
            }
            .century,a,p {
                font-family: "century";
            }
            h1,h2,h3,h4,h5,h6 {
                font-family: "century_bold";
            }
            img,article>div{
                transition: all ease 0.5s;
            }
            article>div:hover{
                box-shadow: 1px 2px 13px gray;
                background: whitesmoke;
            }
            .single img{
                margin-right: auto;
                margin-left: auto;
                border: solid #f66f1999;
                border-radius: 6px;
            }
            .single .sub p{
                padding: 20px 19px 13px;
            }
article :hover img{
    filter: blur(2px) brightness(145%);
}
        </style>
	</head>
	<body style="background: #e1e1e1;padding: 0px" class="<?php echo body_class(); ?> century">
		<div class="main-wrap">
			<!--<div class="slidey" id="tray">
				<div class="wrap">
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<label for="term">Search my blog:</label>
						<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
						<input type="hidden" id="whatSearch" name="whatSearch" value="all" />
					</form>

					<aside>
						<b>Categories</b>
						<ul>
						<?php while (categories()):
                                if (category_count() > 0) {
                                    ?>
							<li>
								<a href="<?php echo category_url();
                                    ?>" title="<?php echo category_description();
                                    ?>">
									<?php echo category_title();
                                    ?> <span><?php echo category_count();
                                    ?></span>
								</a>
							</li>
						<?php
                                } endwhile; ?>
						</ul>
					</aside>
				</div>
			</div>-->

			<!--
			<header id="top">
				<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>

				<nav id="main" role="navigation">
					<ul>
						<?php if (has_menu_items()):
                            while (menu_items()): ?>
						<li <?php echo(menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile;
                            endif; ?>
						<li class="tray">
							<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
						</li>
					</ul>
				</nav>
			</header>
-->
            <div class="header" style="background: white;padding: 0px;" id="ban">
                <div class="container">
                    <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <div class="header-search">
                            <div class="search">
                                <input class="search_box" type="checkbox" id="search_box">
                                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                                <div class="search_form">
                                    <form action="#" method="post">
                                        <input type="text" name="Search" placeholder="Search...">
                                        <input type="submit" value="Send">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                <nav class="link-effect-7" id="link-effect-7">
                                    <ul class="nav navbar-nav">
                                        <li class="active act"><a href="/anchor/posts">Articles</a></li>
                                        <li><a href="about.html">Video</a></li>
                                        <li><a href="features.html">Album photo</a></li>
                                        <li><a href="travel.html">Bulletin du tournois</a></li>
                                        <li><a href="fashion.html">LIVE</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <ul>
                            <li><a href="#"> </a></li>
                            <li><a href="#" class="pin"> </a></li>
                            <li><a href="#" class="in"> </a></li>
                            <li><a href="#" class="be"> </a></li>

                            <li><a href="#" class="vimeo"> </a></li>
                        </ul>
                    </div>
<!--                    <img src="--><?php //echo theme_url('/images/fide.png'); ?><!--" alt="">-->
<!--                    <img src="--><?php //echo theme_url('/images/1467408_505866592845495_184816358_n.png'); ?><!--" alt="">-->
<!--                    <img src="--><?php //echo theme_url('/images/cess_alg.png'); ?><!--" alt="">-->
                    <div class="clearfix"> </div>
                </div>
            </div>

            <!--start-main-->
            <div class="header-bottom">
                <div class="container">
                    <div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <h1><a href="index.html">Fédération Algérienne des Echecs</a></h1>
                        <p><label class="of"></label> DZ Chess Federation<label class="on"></label></p>
                    </div>
                </div>
            </div>


           <!-- <div class="banner">
                <div class="container">
                    <h2>Contrary to popular belief, Lorem Ipsum simply</h2>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="singlepage.html">READ MORE</a>
                </div>
            </div>
-->
            <!------
            <div class="slider">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="<?php echo theme_url('/images/banner1.jpg'); ?>" data-thumb="images/1.jpg" alt="" />
                        <img src="<?php echo theme_url('/images/banner2.jpg'); ?>" data-thumb="images/2.jpg" alt="" />
                        <img src="<?php echo theme_url('/images/banner3.jpg'); ?>" data-thumb="images/3.jpg" alt="" />
                    </div>
                </div>
            </div>
     End Slider ------------>

            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
            <div id="wowslider-container1">
                <div class="ws_images"><ul>
                        <li><img src="<?php echo theme_url('/images/1.jpg'); ?>" alt="10659272_840787732619636_8414874905661574424_n" title="Oran - Centre Ville" id="wows1_0"/></li>
                        <li><a href="http://wowslider.com"><img src="<?php echo theme_url('/images/2.jpg'); ?>" alt="http://wowslider.com/" title="Oran - La Baie" id="wows1_1"/></a></li>
                        <li><img src="<?php echo theme_url('/images/3.jpg'); ?>" alt="light_texture2225" title="ORAN - La Nuit" id="wows1_2"/></li>
                        <li><img src="<?php echo theme_url('/images/4.jpg'); ?>" alt="light_texture2225" title="ORAN - La ville" id="wows1_3"/></li>
                        <li><img src="<?php echo theme_url('/images/5.jpg'); ?>" alt="light_texture2225" title="Algérie le sud fascinant" id="wows1_4"/></li>
                        <li><img src="<?php echo theme_url('/images/6.jpg'); ?>" alt="light_texture2225" title="Oran- Front de mer la Nuit" id="wows1_5"/></li>
                    </ul></div>
                <div class="ws_bullets"><div>
                        <a href="#" title="Oran - Centre Ville"><span>1</span></a>
                        <a href="#" title="Oran - La Baie"><span>2</span></a>
                        <a href="#" title="ORAN - La Nuit"><span>3</span></a>
                        <a href="#" title="ORAN - La ville"><span>4</span></a>
                        <a href="#" title="Algérie le sud fascinant"><span>5</span></a>
                        <a href="#" title="Oran- Front de mer la Nuit"><span>6</span></a>
                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wow slider</a> by WOWSlider.com v8.7</div>
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="<?php echo theme_url('/engine1/wowslider.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo theme_url('/engine1/script.js'); ?>"></script>
            <!-- End WOWSlider.com BODY section -->
