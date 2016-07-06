<?php
/*
Template Name: projects
*/
get_header();
$num = 1;

function randPlaceIMG() {
    $r = rand(0,100);
    echo '<img src="https://unsplash.it/800/500/?random&'.$r.'" width="" alt="" />';
}
?>
    <div id="page_header" class="page projects-header">
            <div class="wrapper">
                <div class="fade-in-up">
                  <h1 class="pagetitle"><span>I'm Mike Mattner.</span> Designer &amp; Developer</h1>
                  <p>I work as an Associate Creative Director at <a href="http://aislerocket.com" rel="nofollow">Aisle Rocket Studios</a>.</p>
                  <p><a href="http://www.mikemattner.com/info/" title="Learn More" class="btn">Learn More</a></p>
                </div>
            </div>
      </div>
      <section id="project-archive" class="clearfix">
            
            <article class="project clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="projects-title">
                        <h2>Longer Project Title In Here</h2>
                        <p>Web, Print, or Strategy</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="project clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="projects-title">
                        <h2>The Project Title</h2>
                        <p>Web, Print, or Strategy</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="project clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="projects-title">
                        <h2>Project Coming Soon</h2>
                        <p>Web, Print, or Strategy</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="project clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="projects-title">
                        <h2>Example Title</h2>
                        <p>Web, Print, or Strategy</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="project clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="projects-title">
                        <h2>Project Example</h2>
                        <p>Web, Print, or Strategy</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="project clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="projects-title">
                        <h2>Short Title</h2>
                        <p>Web, Print, or Strategy</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

        </section>
<?php get_footer(); ?>
