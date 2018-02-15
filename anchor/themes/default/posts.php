<?php theme_include('header'); ?>

<!--
<section class="content">

	<?php if (has_posts()): ?>
		<ul class="items">
			<?php posts(); ?>
			<li>
				<article class="wrap">
					<h1>
						<p> image = <?php echo article_custom_field('id_img'); ?> </p>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>

					<div class="content">
						<?php echo article_html(); ?>
					</div>

					<footer>
						Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
					</footer>
				</article>
			</li>
			<?php $i = 0; while (posts()): ?>
			<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
			<li style="<?php echo $bg; ?>">
				<article class="wrap">
					<h2>
						<p> image = <?php echo article_custom_field('id_img'); ?> </p>

						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if (has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<div class="wrap">
			<h1>No posts yet!</h1>
			<p>Looks like you have some writing to do!</p>
		</div>
	<?php endif; ?>

</section>
-->

<!--<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">-->
<!--	<div class="container">-->
<!--		<div class="grid_3 grid_5">-->
<!--			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">-->
<!--				<ul id="myTab" class="nav nav-tabs" role="tablist">-->
<!--					<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">FASHION</a></li>-->
<!--					<li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">TRAVEL</a></li>-->
<!--					<li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">MUSIC</a></li>-->
<!--				</ul>-->
<!--				<div id="myTabContent" class="tab-content">-->
<!--					<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">-->
<!---->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/f2.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/f4.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/f3.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="clearfix"></div>-->
<!--					</div>-->
<!---->
<!---->
<!--					<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/t1.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/t2.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/t3.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="clearfix"></div>-->
<!--					</div>-->
<!--					<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">-->
<!---->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/m2.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/m1.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="col-md-4 col-sm-5 tab-image">-->
<!--							<img src="images/m3.jpg" class="img-responsive" alt="Wanderer">-->
<!--						</div>-->
<!--						<div class="clearfix"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- technology-left -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="tech-no">
				<!-- technology-top -->

				<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

					<div class="tch-img">
						<a href=""><img src="<?php echo theme_url('/images/assala.jpg'); ?>" class="img-responsive" alt=""></a>
					</div>

					<h3><a href="">2017 African individual chess championship</a></h3>
					<h6><i class="glyphicon glyphicon-map-marker"> </i> ORAN</h6>
					<p>Hotel ASSALA ORAN * Championnat d'Afrique individuel des échecs ORAN 2017</p>

					<div class="soci">
						<ul>
							<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
							<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
							<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
							<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
							<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<!-- technology-top -->


<!--				VIDEO section-->

				<div class="video-grids">
					<div class=" video-grids-left">

						<div class="video-grids-left2">
							<div class="course_demo1">
								<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -243px; display: block;">



											<li class="nbs-flexisel-item" style="width: 243px;">
												<div class="item">
													<img src="images/10.jpg" alt=" " class="img-responsive">
													<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														<iframe src="https://player.vimeo.com/video/145787219" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>
													</div>
													<div class="floods-text">
														<h3>The fed and inequality <span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
														<p>5:56</p>
													</div>
												</div>
											</li><li class="nbs-flexisel-item" style="width: 243px;">
												<div class="item">
													<img src="images/11.jpg" alt=" " class="img-responsive">
													<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														<iframe src="https://player.vimeo.com/video/145787219" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>
													</div>
													<div class="floods-text">
														<h3>The fastest insect in the world <span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
														<p>5:56</p>
													</div>
												</div>
											</li><li class="nbs-flexisel-item" style="width: 243px;">
												<div class="item">
													<img src="images/12.jpg" alt=" " class="img-responsive">
													<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														<iframe src="https://player.vimeo.com/video/145787219" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>
													</div>
													<div class="floods-text">
														<h3>Billionaires versus Millionaires<span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
														<p>5:56</p>
													</div>
												</div>
											</li><li class="nbs-flexisel-item" style="width: 243px;">
												<div class="item">
													<img src="images/10.jpg" alt=" " class="img-responsive">
													<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														<iframe src="https://player.vimeo.com/video/145787219" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>
													</div>
													<div class="floods-text">
														<h3>The fed and inequality <span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
														<p>5:56</p>
													</div>
												</div>
											</li><li class="nbs-flexisel-item" style="width: 243px;">
												<div class="item">
													<img src="images/11.jpg" alt=" " class="img-responsive">
													<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														<iframe src="https://player.vimeo.com/video/145787219" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>
													</div>
													<div class="floods-text">
														<h3>The fastest insect in the world <span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
														<p>5:56</p>
													</div>
												</div>
											</li><li class="nbs-flexisel-item" style="width: 243px;">
												<div class="item">
													<img src="images/12.jpg" alt=" " class="img-responsive">
													<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														<iframe src="https://player.vimeo.com/video/145787219" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="500" height="281" frameborder="0"></iframe>
													</div>
													<div class="floods-text">
														<h3>Billionaires versus Millionaires<span>Blogger <label>|</label> <i>Adom Smith</i></span></h3>
														<p>5:56</p>
													</div>
												</div>
											</li></ul>
<!--										<div class="nbs-flexisel-nav-left" style="top: 91px;"></div>-->
<!--										<div class="nbs-flexisel-nav-right" style="top: 91px;"></div>-->
									</div></div>
							</div>
							<!-- pop-up-box -->
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							<!--//pop-up-box -->
							<script>
								$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});

								});
							</script>
							<!-- requried-jsfiles-for owl -->
							<script type="text/javascript">
								$(window).load(function() {
									$("#flexiselDemo1").flexisel({
										visibleItems: 3,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: {
											portrait: {
												changePoint:480,
												visibleItems: 1
											},
											landscape: {
												changePoint:640,
												visibleItems: 2
											},
											tablet: {
												changePoint:768,
												visibleItems: 3
											}
										}
									});

								});
							</script>
							<script type="text/javascript" src="js/jquery.flexisel.js"></script>
						</div>
					</div>

					<div class="clearfix"> </div>
				</div>




				<?php $i = 0; while (posts()): ?>
					<?php  if( article_category()=="post" ): ?>
					<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>

						<article >
							<div class="wthree">
								<div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
									<div class="tch-img">
										<a href="<?php echo article_url(); ?>">
											<img src=" <?php echo article_custom_field('id_img'); ?>" class="img-responsive" alt="">
										</a>
									</div>
								</div>
								<div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
									<h3><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h3>
									<p><i class="glyphicon glyphicon-user"> </i> <a href="#"><?php echo article_author(); ?> </a>| <i class="glyphicon glyphicon-calendar"> </i> <?php echo article_date(); ?>.</p>
									<p>
										<?php echo article_description(); ?>
									</p>
									<div class="bht1">
										<a href="<?php echo article_url(); ?>">Lire la suite</a>
									</div>
									<div class="soci">
										<ul>

											<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
											<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>

								</div>
								<div class="clearfix"></div>
							</div>

						</article>
					<?php endif; ?>
				<?php endwhile; ?>

				<?php if (has_pagination()): ?>
					<nav class="pagination">
						<div class="wrap">
							<div class="previous">
								<?php echo posts_prev(); ?>
							</div>
							<div class="next">
								<?php echo posts_next(); ?>
							</div>
						</div>
					</nav>
				<?php endif; ?>

			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">


			<div class="blo-top1">

				<div class="tech-btm">
                    <iframe src="http://www.fade-dz.net/live/live/live-mosaic-tile - Copie.html?initialGame=1" name="board1" marginwidth="0" width="255px" height="300x" frameborder="0"></iframe>
					<div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<form action="#" method="post">
							<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
					<h4>Gallerie photos </h4>
                    <?php $i = 0; while (posts()): ?>
						<?php if( article_category()=="image" ): ?>
                        <?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>

                        <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="blog-grid-left">
                                <a href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('id_img'); ?>" class="img-responsive" alt=""></a>
                            </div>
                            <div class="blog-grid-right">

                                <h5><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a> </h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

						<?php endif; ?>
                    <?php endwhile; ?>






					<div class="twt">
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
				</div>



			</div>


		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>

<!--
<script type="text/javascript">
	$(function() {
		$('.gallery a').Chocolat();
	});
</script>
<!--script-->

<!--
<div class="gallery" id="gallery">
	<div class="container">
		<h3>Gallery</h3>
		<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g2.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g2.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?><?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo theme_url('/images/g1.jpg'); ?>" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo theme_url('/images/g1.jpg'); ?>" alt="" />
							<div>
								<h5>project</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
				</ul>
				<div class="clearfix"> </div>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
			<script type="text/javascript">
				$(function() {

					$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

				});
			</script>
		</div>
	</div>
</div>
<!--//gallery-->


<?php theme_include('footer'); ?>
