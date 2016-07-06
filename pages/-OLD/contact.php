<?php
/*
Template Name: contact
*/

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
  <div id="main" role="main">
    <div class="wrapper">
		  <div id="page_header">
        <h1 class="pagetitle">Feel like chatting with me?</h1>
      </div>
			<article>
          <h2>Need to get in touch?</h2>
        <p>I'm generally open to conversations through email; a little 140 character banter on Twitter will do as well.</p>
        <p class="email_us"><a href="mailto:hello@mikemattner.com"><i class="icon-envelope-alt"></i> hello @ mikemattner.com</a></p>
        <p class="email_us"><a href="http://twitter.com/mikemattner"><i class="icon-twitter"></i> @ mikemattner</a></p>
      </article>    
      <article id="contact_us">
          <h2>Don't want to write an email?</h2>
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
                                <dd><textarea class="textarea" id="message" name="message" cols="10" rows="8"></textarea></dd>
                            </dl>
                          </fieldset>
                    <fieldset>
                      <legend>Submit</legend>
                            <dl class="check">
                                <dt><label for="check"><?php echo $a .' + ' .$b; ?> = </label></dt>
                                <dd id="humancheck"><input type="text" id="check" name="check" class="formfield-b" value="" /></dd>
                            </dl> 
                            <p><button type="submit" name="submit" class="subme"><i class="icon-envelope-alt"></i> Send Message</button></p>
                  <input type="hidden" name="addr" value="<?php echo getRealIpAddr(); ?>" />
                          </fieldset>
                          </form>
            
                  </div>
        </article>
    </div>
  </div>
<?php get_footer(); ?>
