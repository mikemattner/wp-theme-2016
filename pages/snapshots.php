<?php
/*
Template Name: Snapshots
*/
get_header();
$num = 1;

function randPlaceIMG() {
    $r = rand(0,100);
    echo '<img src="https://unsplash.it/500/500/?random&'.$r.'" width="" alt="" />';
}
?>
    <div id="page_header" class="page snapshots-header">
            <div class="wrapper">
                <div class="fade-in-up">
                  <h1 class="pagetitle">Snapshots</h1>
                  <p>Expriments, snapshots, and design ideas.</p>
                </div>
            </div>
      </div>
      <section id="snapshots-archive" class="clearfix">
            
            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>App Proposal in Brand Planning</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>The Snapshots Title</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Snapshots Coming Soon</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Example Title</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Snapshots Example</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Short Title</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Snapshots Example</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Short Title</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Snapshots Example</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Short Title</h2>
                        <p>May 1, 2016</p>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

        </section>
<?php get_footer(); ?>
