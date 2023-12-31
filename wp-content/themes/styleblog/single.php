<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Styleblog
 */

get_header();
?>

<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="agileinfo">

				<h2 class="w3">SINGLE PAGE</h2>
				<div class="single">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sing-1.jpg" class="img-responsive"
						alt="">
					<div class="b-bottom">
						<h5 class="top">What turn out consetetur sadipscing elit</h5>
						<p class="sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem
							Ipsum has been the industry's standard dummy text ever since,Lorem Ipsum is simply dummy
							text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the
							printing and typesetting industryLorem Ipsum has been the industry's standard dummy text
							ever since Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<p>On Aug 01 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0
							</a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a>
						</p>

					</div>
				</div>


				<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/sin1.jpg"
									class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
								passages of Lorem Ipsum available,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jun 21, 2016</li>
								<li><a href="#">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/sin2.jpg"
											class="img-responsive" alt="">
									</a>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
										variations of passages of Lorem Ipsum available,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>July 17, 2016</li>
										<li><a href="#">Reply</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/sin1.jpg"
									class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of
								passages of Lorem Ipsum available,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jul 22, 2016</li>
								<li><a href="#">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/sin2.jpg"
											class="img-responsive" alt="">
									</a>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
										variations of passages of Lorem Ipsum available,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Aug 01, 2016</li>
										<li><a href="#">Reply</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="#" method="post">
						<input type="text" value="Name " name="name" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" name="email" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Website" name="websie" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Your Comment...';}"
							required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php get_sidebar();?>
</div>
</div>
<?php get_footer();