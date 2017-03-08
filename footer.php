    </div>
    <!--end of div#content!-->
</div>
<!--end of div#page_wrapper!-->

<?php get_template_part( 'components/footer/search', 'block' ); ?>
<footer id="footer">
    <section class="master-archive">
      <a href="<?php echo home_url( '/' ); ?>archives" class="btn_master-archive">View Archives <i class="fa fa-angle-right"></i></a>
    </section>
    <section class="lower">
      <p class="hire_me">Get in touch, send an email:<br /> <a href="mailto:hello@mikemattner.com">hello@mikemattner.com</a>.
      <?php /*<section class="social_links">
          <ul>
            <li>
               <a href="http://twitter.com/mikemattner/">The Twitter</a>
            </li>
                         
            <li>
               <a href="http://www.linkedin.com/in/mikeamattner/">The LinkedIn</a>
            </li>
          </ul>
      </section>*/ ?>
      <p>&copy; <?php echo date("Y"); ?> Mike Mattner. Made in Michigan.</p>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>