<?php
/*
Template Name: pancake
*/
get_header(); ?>
		    <div id="page_header" class="project-header">
		    	<div class="wrapper">
                   <h1 class="pagetitle">Clean Admin Theme For Pancake 3.x</h1>
				   <h2 style="font-size: 1.5em; color: #777;font-family: 'proxima-nova', sans-serif;font-weight:300;">This theme is designed as a simpler, paired down administration theme for the <a href="http://pancakeapp.com/ref/r1W9cwfF">Pancake App 3.x</a> back end that also includes a matching front end theme.</h2>
                   <p style="max-width:100%;">
					  <a class="proj_link" href="https://github.com/mikemattner/clean-pancake-theme" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.6']);">
					    <span class="btn"><em><strong><i class="icon-github"></i> Available on GitHub</strong> Currently Version 2.6</em></span>
						<img src="http://www.mikemattner.com/wp-content/uploads/2012/11/pancake-2-e1360782364889.jpg" alt="" title="clean_2" width="1297" />
					  </a>
                   </p>
                </div>
			</div>
			<article>
			   <header>
			   <h2>What is this?</h2>
			   </header>
			   <section>
			   <p><strong>Quick Update:</strong> I've transitioned this project over to <a href="https://github.com/mikemattner/clean-pancake-theme">GitHub</a>, however due to the impending release of Pancake 4.0, I will no longer be continuing development on this version of the theme, but I will continue supporting it.</p>
			   <hr />
			   <p>The Clean Admin theme is primarily a cosmetic upgrade to the default theme and, as a result, uses much of the same underlying code and functionality. It made the process easier for me, and will make the switch less jarring for you, when it came time to upgrade Pancake. Each update usually provides a few new features that can break custom themes. I'll do my best to keep up to date with it and provide a fix in a reasonable amount of time.</p>
			   <p>Off the shelf, Pancake is a nice system, but the style didn't particularly appeal to me:</p>
			   <p class="image">
  			           <img src="http://www.mikemattner.com/wp-content/uploads/2012/05/default.jpg" alt="" title="default" width="1297" style="border: 1px solid rgba(0, 0, 0, 0.05);" />
			           Default admin theme.
			   </p>
			   <p>I decided to modify the default templates for both the front end and admin to work for my own needs. In the process I made something I liked, and hope others might like as well.</p>
		       <p>You can install this theme, along with the provided matching front-end theme for free! Not bad. As a result, I'm not really going to provide much support for it, but I'll do what I can with limited resources.</p>
		       <div class="clearfix">
			   <p style="width: 48%; margin-right: 2%; float: left;">
			     <a class="download_file" href="https://github.com/mikemattner/clean-pancake-theme" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme']);"><i class="icon-github"></i> Available on GitHub</a>
			   </p>
               <p style="width: 48%; margin-left: 2%; float: left;">			   
				 <a class="download_file" href="#" id="donate">Leave a Tip</a>
			   </p>
			   </div>
			       <form id="donate_form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			           <input type="hidden" name="cmd" value="_s-xclick">
			           <input type="hidden" name="hosted_button_id" value="NEYVPC8XWS3V2">
			           <?php /*<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">*/ ?>
					   <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			       </form>
				   <script type="text/javascript">
				       $('#donate').click(function() {
                           $('#donate_form').submit();
						   return false;
                       });
				   </script>
				</section>
			</article>
			<hr />			
			<article>
			   <header>
			   <h2>Frequently Asked Questions</h2>
			   </header>
               <section>
			   <div class="pull-text">
			       Full disclosure: any links back to pancake are using an affiliate referral code.
			   </div>				
				<dl class="faq">
			     <dt>Something is broken, in general.</dt>
				 <dd>
				    I would like to know as soon as possible if you discover something that appears out of place, or if some new version of Pancake breaks the theme. I've also been known to make some glaringly embarassing mistakes in development. Sorry. Feel free to leave a comment detailing your issue.
				 </dd>
				 <dt>What browsers does this theme support?</dt>
				 <dd>
				    I would lean towards using this theme in a more modern browser, like Firefox, Safari, and Chrome. It does work in Internet Explorer 9, but anything below that is asking for trouble.
				 </dd>
				 <dt>What is pancake?</dt>
				 <dd>
				    <a href="http://pancakeapp.com/ref/r1W9cwfF">Pancake</a> is a "simple, easy, awesome business suite" that allows you to track time, manage projects, send proposals, and invoice your customers. It's an app I use on a daily basis, and one of the things I love about it is that you buy it once, install it on your server, and customize it for your needs. You aren't stuck paying a monthly fee for features you don't want.
				 </dd>

			   </dl>
			   <section>
			</article>
			<hr />
			<article>
			   <header>
			   <h2>Version History</h2>
			   </header>
			   <section>
			   <p>The most recent version of the <a href="https://github.com/mikemattner/clean-pancake-theme" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.6']);">Clean Admin Theme is 2.6</a> and should work perfectly with <a href="http://pancakeapp.com/ref/r1W9cwfF">Pancake 3.6.8</a>.</p>
			   <dl class="version">
			     <dt>2.6 - <a href="https://github.com/mikemattner/clean-pancake-theme" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.6']);">Available on Github</a></dt>
				 <dd>
				    <ul>
					  <li>Updated front end theme for compatibility with new features.</li>
					  <li>Removed my name from the front end theme (Thanks, Joseph!).</li>
					  <li>Now on GitHub</li>
				    </ul>
				 </dd>
			     <dt>2.5 - <a href="http://www.mikemattner.com/wp-content/uploads/2012/11/clean_2.5.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.5']);">clean_2.5.zip</a></dt>
				 <dd>
				    <ul>
				      <li>Redesigned header and menu. Same minimal feel.</li>	
				      <li>Simplified some of the design and code.</li>			
					  <li>CSS Updates/Fixes</li>
					  <li>Javascript Updates/Fixes</li>
					  <li>Updated front end theme design.</li>
				    </ul>
				 </dd>
			     <dt>2.4 - Internal release.</dt>
			     <dt>2.3 - Internal release.</dt>
			     <dt>2.2 - <a href="http://www.mikemattner.com/wp-content/uploads/2012/07/clean_2.2.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.2']);">clean_2.2.zip</a></dt>
				 <dd>
				    <ul>				
				      <li>Minor release.</li>
					  <li>CSS Updates/Fixes.</li>
					  <li>Added link back to my site.</li>
					  <li>Fixed view issues.</li>
				    </ul>
				 </dd>
				 <dt>2.1 - <a href="http://www.mikemattner.com/wp-content/uploads/2012/07/clean_2.1.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.1']);">clean_2.1.zip</a></dt>
				 <dd>
				    <ul>				
				      <li>Minor release. CSS Updates/Fixes. Changes to the collected and outstanding boxes based on <a href="http://help.pancakeapp.com/customer/portal/articles/634545--freshness-theme-by-justin">another newly released theme</a>, 'Freshness,' by Justin. Better differentiates the two areas.</li>
				    </ul>
				 </dd>
				 <dt>2.0 - <a href="http://dl.dropbox.com/u/21401334/clean_2.0.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 2.0']);">clean_2.0.zip</a></dt>
				 <dd>
				    <ul>				
				      <li>Updated design.</li>
				    </ul>
				 </dd>
				 <dt>1.6 - Internal release.</dt>
				 <dt>1.5 - <a href="http://dl.dropbox.com/u/21401334/clean_pancake_admin_1.5.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 1.5']);">clean_pancake_admin_1.5.zip</a></dt>
				 <dd>
				    <ul>
				      <li>Custom logo is removed in the backend so it should no longer break the layout.</li>
					  <li>Notifications are handled a little differently, so they look a little less strange</li>
					  <li>In the front end theme, I added the invoice date to all invoices.</li>
				    </ul>
				 </dd>
				 <dt>1.4 - Internal release.</dt>
				 <dt>1.3 - Internal release.</dt>
				 <dt>1.2 - <a href="http://dl.dropbox.com/u/21401334/clean_pancake_admin_1.2.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 1.2']);">clean_pancake_admin_1.2.zip</a></dt>
				 <dd>
				    <ul>
				      <li>This version adds the front end theme to the download.</li>
				    </ul>
				 </dd>
				 <dt>1.1 - Internal release.</dt>
				 <dt>1.0 - <a href="http://dl.dropbox.com/u/21401334/clean_pancake_admin_1.0.zip" onClick="javascript: _gaq.push(['_trackPageview', 'Clean Admin Theme 1.0']);">clean_pancake_admin_1.0.zip</a></dt>
				 <dd>
				    <ul>				
				      <li>First version.</li>
				    </ul>
				 </dd>
			   </dl>
			   </section>
			</article>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php endwhile; endif; ?>
			<?php if ('open' == $post->comment_status) : ?>
			<hr />
			<?php comments_template();  ?>
			<?php endif; ?>
<?php get_footer(); ?>
