    </div>
    <!--end of div#content!-->
</div>
<!--end of div#page_wrapper!-->
<?php
include(TEMPLATEPATH . '/search.archives.php'); 

function randomQuoteMachine() {
      $quotes = array(
              'Be kind. Please rewind.',
              'Persistence is Key.',
              'Knowing is Half the Battle.'
        );
      $rq = rand(0,2);
      echo $quotes[$rq];
}
?>
<footer id="footer">
    <section class="master-archive">
      <a href="http://www.mikemattner.com/archives" class="btn_master-archive">View Archives <i class="fa fa-angle-right"></i></a>
    </section>
    <section class="lower">
      <?php /*<p class="call_me_maybe"><?php randomQuoteMachine(); ?></p>*/ ?>
      <p class="hire_me">Get in touch, send an email:<br /> <a href="mailto:hello@mikemattner.com">hello@mikemattner.com</a>.
      <section class="social_links">
          <ul>
            <li>
               <a href="http://twitter.com/mikemattner/"><i class="fa fa-twitter"></i></a>
            </li>
            <?php /*            <li>
               <a href="http://github.com/mikemattner"><i class="fa fa-github-alt"></i> GitHub</a>
            </li>
            <li>
               <a href="http://codepen.io/mikemattner/"><i class="fa fa-codepen"></i> CodePen</a>
            </li> */ ?>
            <li>
               <a href="http://www.linkedin.com/in/mikeamattner/"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
      </section>
      <p>&copy; <?php echo date("Y"); ?> Mike Mattner. Made in Michigan.</p>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>