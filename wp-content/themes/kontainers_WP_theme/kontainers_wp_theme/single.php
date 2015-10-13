<?php
/**
 * kontainers_WP_theme template for displaying Single-Posts
 *
 * @package WordPress
 * @subpackage kontainers_WP_theme
 * @since kontainers_WP_theme 1.0
 */

get_header(); ?>

	<!--  This holds the WP page Content - k-blog-holder class for blog pages only -->
	<div class="non-app k-blog-holder">

		<!--  Sliding shutters preloader -->
		<div class="page-loader">
			<div class="page-loader-slide-one"></div>
			<div class="page-loader-slide-two"></div>
		</div>



		<!--  Top bar with nav -->
		<?php include('top-nav.php') ?>







		<!--  form_holder - holds scrolling content -->
		<div class="form_holder">

			<!--  conent_holder - positions content -->
			<div class="content_holder">
				<h1> <a class="blogURL.html">Shipping Blog</a></h1>

				<!--  blog-nav - holds navigation elements scraped from standard WP elements -->
				<div class="blog-nav">
					<div class="row">
						<div class="four columns">

							<!--  widget_recent_entries - scraped from standard WP recent entries -->
							<aside id="recent-posts-2" class="widget widget_recent_entries">
								<h2 class="widget-title">Recent Posts</h2>
								<ul>
									<li> <a href="blog-post.html">Hazardous Materials and Goods</a> </li>
									<li> <a href="blog-post.html">Blog Post 2</a> </li>
									<li> <a href="blog-post.html">Blog Post 3</a> </li>
									<li> <a href="blog-post.html">Blog Post 4</a> </li>
									<li> <a href="blog-post.html">Blog Post 5</a> </li>
									<li> <a href="blog-post.html">Blog Post 6</a> </li>
								</ul>
							</aside>
							<!--  /widget_recent_entries-->

						</div>
						<div class="four columns">

							<!--  widget_categories - scraped from standard WP categories -->
							<aside id="categories-2" class="widget widget_categories">
								<h2 class="widget-title">Categories</h2>
								<ul>
									<li class="cat-item cat-item-1"><a href="blog-category.html">Exporting</a></li>
									<li class="cat-item cat-item-2"><a href="blog-category.html">Importing</a></li>
								</ul>
							</aside>
							<!--  /widget_categories - scraped from standard WP categories -->

						</div>
						<div class="four columns">

							<!--  search-form - scraped from standard WP search -->
							<form role="search" method="get" class="search-form" action="http://chaosdigital.co.uk/kontainers/">
								<label> <span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Search the Blog" value="" name="s" title="Search for:">
								</label>
								<input type="submit" class="search-submit screen-reader-text" value="Search">
							</form>
							<!--  /search-form -->

						</div>
					</div>
				</div>

				<!-- main - scraped from standard WP page structure -->
				<main id="main" class="site-main" role="main">



					<?php
					if ( have_posts() ) : the_post();

						get_template_part( 'loop', get_post_format() ); ?>

						<aside class="post-aside">

						<div class="post-links">
							<?php previous_post_link( '%link', __( '&laquo; Previous post', 'kontainers_wp_theme' ) ) ?>
							<?php next_post_link( '%link', __( 'Next post &raquo;', 'kontainers_wp_theme' ) ); ?>
						</div>

						<?php
						if ( comments_open() || get_comments_number() > 0 ) :
							comments_template( '', true );
						endif;
						?>

						</aside><?php

					else :

						get_template_part( 'loop', 'empty' );

					endif;
					?>



					<!-- post - scraped from standard WP post -->
					<article  class=" post type-post status-publish format-standard hentry category-uncategorized">
						<header class="entry-header">
							<h2 class="entry-title"><a href="blog-post.html" rel="bookmark">Hazardous Materials and Goods</a></h2>
						</header>
						<div class="entry-content"> <a href="blog-post.html"><img src="http://chaosdigital.co.uk/kontainers/wp-content/uploads/2015/09/oil-802209-1024x760.jpg" alt="hazardous" /></a>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
							<p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
						</div>
						<footer class="entry-footer"> <a href="blog-post.html"> <span class="posted-on"><span class="screen-reader-text">Posted on </span></span></a><a href="blog-post.html" rel="bookmark">
								<time class="entry-date published" datetime="2015-09-24T14:49:09+00:00">September 24, 2015</time>
								<time class="updated" datetime="2015-10-07T07:19:20+00:00">October 7, 2015</time>
							</a> </footer>



						<!-- Social Media Feather - WP plugin widget -->
						<aside id="synved_social_share-2" class="widget widget_synved_social_share"><h2 class="widget-title">Sharing</h2><div><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-facebook nolightbox" data-provider="facebook" target="_blank" rel="nofollow" title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F&amp;t=Less%20than%20Container%20Load&amp;s=100&amp;p[url]=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F&amp;p[images][0]=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Fwp-content%2Fuploads%2F2015%2F09%2Fpayment.jpg&amp;p[title]=Less%20than%20Container%20Load" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;margin-right:5px;"><img alt="facebook" title="Share on Facebook" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/facebook.png"></a><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-twitter nolightbox" data-provider="twitter" target="_blank" rel="nofollow" title="Share on Twitter" href="http://twitter.com/share?url=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F&amp;text=Hey%20check%20this%20out" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;margin-right:5px;"><img alt="twitter" title="Share on Twitter" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/twitter.png"></a><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-google_plus nolightbox" data-provider="google_plus" target="_blank" rel="nofollow" title="Share on Google+" href="https://plus.google.com/share?url=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;margin-right:5px;"><img alt="google_plus" title="Share on Google+" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/google_plus.png"></a><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-reddit nolightbox" data-provider="reddit" target="_blank" rel="nofollow" title="Share on Reddit" href="http://www.reddit.com/submit?url=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F&amp;title=Less%20than%20Container%20Load" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;margin-right:5px;"><img alt="reddit" title="Share on Reddit" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/reddit.png"></a><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-pinterest nolightbox" data-provider="pinterest" target="_blank" rel="nofollow" title="Pin it with Pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F&amp;media=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Fwp-content%2Fuploads%2F2015%2F09%2Fpayment.jpg&amp;description=Less%20than%20Container%20Load" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;margin-right:5px;"><img alt="pinterest" title="Pin it with Pinterest" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/pinterest.png"></a><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-linkedin nolightbox" data-provider="linkedin" target="_blank" rel="nofollow" title="Share on Linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F&amp;title=Less%20than%20Container%20Load" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;margin-right:5px;"><img alt="linkedin" title="Share on Linkedin" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/linkedin.png"></a><a class="synved-social-button synved-social-button-share synved-social-size-48 synved-social-resolution-single synved-social-provider-mail nolightbox" data-provider="mail" rel="nofollow" title="Share by email" href="mailto:?subject=Less%20than%20Container%20Load&amp;body=Hey%20check%20this%20out:%20http%3A%2F%2Fchaosdigital.co.uk%2Fkontainers%2Findex.php%2F2015%2F09%2F24%2Fless-than-container-load%2F" style="font-size: 0px; width:48px;height:48px;margin:0;margin-bottom:5px;"><img alt="mail" title="Share by email" class="synved-share-image synved-social-image synved-social-image-share" width="48" height="48" style="display: inline; width:48px;height:48px; margin: 0; padding: 0; border: none; box-shadow: none;" src="http://chaosdigital.co.uk/kontainers/wp-content/plugins/social-media-feather/synved-social/image/social/regular/96x96/mail.png"></a></div></aside>    <!-- /Social Media Feather - WP plugin widget -->


					</article>
					<!-- /post -->


					<!-- newsletter -->
					<div class="k-newsletter">
						<div class="row">
							<div class="four columns">

								<!-- Twitter button -->
								<a href="https://twitter.com/KontainersUK" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @KontainersUK</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>
							<div class="eight columns">

								<!-- MailChimp for WordPress v2.3.12 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
								<aside id="mc4wp_widget-3" class="widget widget_mc4wp_widget">
									<h2 class="widget-title">Newsletter</h2>
									<div id="mc4wp-form-1" class="form mc4wp-form">
										<form method="post">
											<p>
												<label>Email address: </label>
												<input type="email" name="EMAIL" placeholder="Your email address" required="">
											</p>
											<p>
												<input type="submit" value="Sign up">
											</p>
											<div style="position: absolute; left: -5000px;">
												<input type="text" name="_mc4wp_h_dd8f77d18e608e9045463917cd6efbfc" value="" tabindex="-1" autocomplete="off">
											</div>
											<input type="hidden" name="_mc4wp_timestamp" value="1444378160">
											<input type="hidden" name="_mc4wp_form_id" value="0">
											<input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
											<input type="hidden" name="_mc4wp_form_submit" value="1">
											<input type="hidden" name="_mc4wp_form_nonce" value="f4bac3f6da">
										</form>
									</div>
								</aside>
								<!-- / MailChimp for WordPress Plugin -->

							</div>
						</div>
					</div>
					<!-- /newsletter -->



					<!-- comments -->
					<div id="comments" class="comments-area">
						<h2 class="comments-title"> One thought on “Hazardous Materials and Goods” </h2>
						<ol class="comment-list">
							<li id="comment-2" class="comment byuser comment-author-guest bypostauthor even thread-even depth-1 parent">
								<article id="div-comment-2" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard"> <img alt="" src="http://2.gravatar.com/avatar/e011866cf26a98c43a1627c9b3aef9a5?s=56&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e011866cf26a98c43a1627c9b3aef9a5?s=112&amp;d=mm&amp;r=g 2x" class="avatar avatar-56 photo" height="56" width="56"> <b class="fn">guest</b> <span class="says">says:</span> </div>
										<!-- .comment-author -->

										<div class="comment-metadata"> <a href="http://chaosdigital.co.uk/kontainers/index.php/2015/09/24/less-than-container-load/#comment-2">
												<time datetime="2015-10-07T14:30:53+00:00"> October 7, 2015 at 2:30 pm </time>
											</a> <span class="edit-link"><a class="comment-edit-link" href="http://chaosdigital.co.uk/kontainers/wp-admin/comment.php?action=editcomment&amp;c=2">Edit</a></span> </div>
										<!-- .comment-metadata -->

									</footer>
									<!-- .comment-meta -->

									<div class="comment-content">
										<p>Wow, Kontainers sure seem like the guys to go to for all your people smugging needs!</p>
									</div>
									<!-- .comment-content -->

									<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://chaosdigital.co.uk/kontainers/index.php/2015/09/24/less-than-container-load/?replytocom=2#respond" onclick="return addComment.moveForm( &quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;6&quot; )" aria-label="Reply to guest">Reply</a></div>
								</article>
								<!-- .comment-body -->
								<ol class="children">
									<li id="comment-4" class="comment byuser comment-author-guest bypostauthor odd alt depth-2">
										<article id="div-comment-4" class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard"> <img alt="" src="http://2.gravatar.com/avatar/e011866cf26a98c43a1627c9b3aef9a5?s=56&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e011866cf26a98c43a1627c9b3aef9a5?s=112&amp;d=mm&amp;r=g 2x" class="avatar avatar-56 photo" height="56" width="56"> <b class="fn">guest</b> <span class="says">says:</span> </div>
												<!-- .comment-author -->

												<div class="comment-metadata"> <a href="http://chaosdigital.co.uk/kontainers/index.php/2015/09/24/less-than-container-load/#comment-4">
														<time datetime="2015-10-08T12:55:08+00:00"> October 8, 2015 at 12:55 pm </time>
													</a> <span class="edit-link"><a class="comment-edit-link" href="http://chaosdigital.co.uk/kontainers/wp-admin/comment.php?action=editcomment&amp;c=4">Edit</a></span> </div>
												<!-- .comment-metadata -->

											</footer>
											<!-- .comment-meta -->

											<div class="comment-content">
												<p>That's very offensive.</p>
											</div>
											<!-- .comment-content -->

											<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://chaosdigital.co.uk/kontainers/index.php/2015/09/24/less-than-container-load/?replytocom=4#respond" onclick="return addComment.moveForm( &quot;div-comment-4&quot;, &quot;4&quot;, &quot;respond&quot;, &quot;6&quot; )" aria-label="Reply to guest">Reply</a></div>
										</article>
										<!-- .comment-body -->
									</li>
									<!-- #comment-## -->
								</ol>
								<!-- .children -->
							</li>
							<!-- #comment-## -->

							<!-- #comment-## -->
							<li id="comment-3" class="comment byuser comment-author-guest bypostauthor odd alt thread-odd thread-alt depth-1">
								<article id="div-comment-3" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard"> <img alt="" src="http://2.gravatar.com/avatar/e011866cf26a98c43a1627c9b3aef9a5?s=56&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/e011866cf26a98c43a1627c9b3aef9a5?s=112&amp;d=mm&amp;r=g 2x" class="avatar avatar-56 photo" height="56" width="56"> <b class="fn">guest</b> <span class="says">says:</span> </div>
										<!-- .comment-author -->

										<div class="comment-metadata"> <a href="http://chaosdigital.co.uk/kontainers/index.php/2015/09/24/less-than-container-load/#comment-3">
												<time datetime="2015-10-08T12:53:09+00:00"> October 8, 2015 at 12:53 pm </time>
											</a> <span class="edit-link"><a class="comment-edit-link" href="http://chaosdigital.co.uk/kontainers/wp-admin/comment.php?action=editcomment&amp;c=3">Edit</a></span> </div>
										<!-- .comment-metadata -->

									</footer>
									<!-- .comment-meta -->

									<div class="comment-content">
										<p>I like!</p>
									</div>
									<!-- .comment-content -->

									<div class="reply"><a rel="nofollow" class="comment-reply-link" href="http://chaosdigital.co.uk/kontainers/index.php/2015/09/24/less-than-container-load/?replytocom=3#respond" onclick="return addComment.moveForm( &quot;div-comment-3&quot;, &quot;3&quot;, &quot;respond&quot;, &quot;6&quot; )" aria-label="Reply to guest">Reply</a></div>
								</article>
								<!-- .comment-body -->
							</li>
							<!-- #comment-## -->

						</ol>
						<!-- .comment-list -->


						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/kontainers/index.php/2015/09/24/less-than-container-load/#respond">Cancel reply</a></small></h3>
							<form action="http://chaosdigital.co.uk/kontainers/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
								<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>							<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="required"></p>
								<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-describedby="email-notes" aria-required="true" required="required"></p>
								<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30"></p>
								<p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p>
								<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="6" id="comment_post_ID">
									<input type="hidden" name="comment_parent" id="comment_parent" value="3">
								</p>					</form>
						</div>

						<!-- #respond -->

					</div>
					<!-- /comments -->

				</main>
				<!-- /main -->

			</div>
			<!--/content_holder-->

		</div>
		<!--/form_holder-->

	</div>
	<!-- This holds the WP page Content - /non-app k-blog-holder-->

<?php get_footer(); ?>