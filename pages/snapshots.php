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
                  <p>Expriments, snapshots, and design ideas all wrapped up into neat little experiments.</p>
                </div>
            </div>
      </div>
      <section id="snapshots-archive" class="clearfix">
            
            <article class="snapshots clearfix">
              <section class="thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Brand Planning</h2>
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">Simple app proposal used in a project planning session.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">App design.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">Motion design experiment.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">    
                            <p class="snapshots-desc">Music app design expriment.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">I did this thing here.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">Weather app design proposal.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">Snap it.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">This is a generic description of this design.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
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
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">Designing a single page web app.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

            <article class="snapshots clearfix">
              <section class="snapshots-thumb">
                <?php randPlaceIMG(); ?>
                <header>
                    <section class="snapshots-title">
                        <h2>Short Title</h2>
                        <aside class="snapshots-info">
                            <p class="snapshots-desc">Just one simple design experiment for four.</p>
                            <p class="snapshots-date">May 1, 2016</p>
                        </aside>
                    </section>
                    <a href="#" class="permalink">Permalink</a>
                </header>
              </section>
            </article>

        </section>
<?php get_footer(); ?>
