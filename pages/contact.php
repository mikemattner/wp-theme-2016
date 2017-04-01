<?php
/*
Template Name: contact
*/

//adding qr javascript file in the footer
wp_register_script( 'mm-validate-js', get_template_directory_uri() . '/assets/js/contact/validate.js', array( 'jquery' ), '2016-02-15-1537', true );
wp_enqueue_script( 'mm-validate-js' );

wp_register_script( 'mm-contact-js', get_template_directory_uri() . '/assets/js/contact/contact.js', array( 'jquery' ), '2016-02-15-1537', true );
wp_enqueue_script( 'mm-contact-js' );

// Make the page validate
//ini_set('session.use_trans_sid', '0');

$a      = rand(1, 10);
$b      = rand(1, 10);
$answer = $a + $b;

// Begin the session
session_start();

// Set the session contents
$_SESSION['check_human'] = $answer;

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

 get_header(); ?>
      <div id="page_header" class="page about-header">
            <div class="wrapper">
                <div class="fade-in-up">
                  <h1 class="pagetitle">Contact</h1>
                  <p>I'm a designer and developer currently working at <a href="http://aislerocket.com" rel="nofollow">Aisle Rocket Studios</a> as an Associate Creative Director.  <a href="#comments-surround">Get in touch</a> and say hello or ask a question.</p>
                  <p><a href="http://www.mikemattner.com/resume/mikemattner.pdf" title="View My Resume" class="btn">View My Resume</a></p>
                </div>
            </div>
      </div>
      <article class="entry" id="contact_us">
                  <section>
          <h2>Send A Quick Note</h2>
                      <p>Email me at <a href="mailto:hello@mikemattner.com">hello@mikemattner.com</a> or fill out the form below.</p>
                      <div class="pull-text"><strong>Note:</strong> I am currently unavailable for freelance work.</div>
                      <hr />
                      <div id="contact_form" class="all_forms">
                      <form name="contact_form" id="contactform" method="post" action="http://www.mikemattner.com/process/send.php">
                    <fieldset>  
                            <dl class="details">
                                <dt><label for="name">Full Name</label></dt>
                                <dd><input type="text" id="name" class="formfield-c" name="name" value="" /></dd>
                            </dl>
                            <dl class="details">
                                <dt><label for="email">Email</label></dt>
                                <dd><input type="text" id="email" class="formfield-c" name="email" value="" /></dd>
                            </dl>
                   <dl class="details">
                                <dt><label for="subject">Subject</label></dt>
                                <dd><input type="text" id="subject" class="formfield-c" name="subject" value="" /></dd>
                            </dl>
                      <dl class="details">
                      <dt><label for="message">Message</label></dt>
                                <dd><textarea class="textarea" id="message" name="message" cols="10" rows="5"></textarea></dd>
                            </dl>
                          </fieldset>
                    <fieldset>
                      <legend>Submit</legend>
                            <dl class="check">
                                <dt><label for="check"><?php echo $a .' + ' .$b; ?> = </label></dt>
                                <dd id="humancheck"><input type="text" id="check" name="check" class="formfield-c" value="" /></dd>
                            </dl> 
                                    <button type="submit" name="submit" class="subme"><i class="icon-envelope-alt"></i> Send Message</button>
                  <input type="hidden" name="addr" value="<?php echo getRealIpAddr(); ?>" />
                          </fieldset>
                          </form>
            
                  </div>
                  </section>
            </article>
<?php get_footer(); ?>