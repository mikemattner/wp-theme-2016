<?php
//adding qr javascript file in the footer
wp_register_script( 'mm-qr-js', get_template_directory_uri() . '/assets/js/js.php?js=qr.js&f=qr', array( 'jquery' ), '2012-02-15-1537', true );
wp_enqueue_script( 'mm-qr-js' );

function getQRForm(){
	$wpqr_out = 'qrcode.php';
	$inForm = '
	<div id="incontentqrgen">
	<div id="wpqr_gen" class="all_forms">

	<form name="qrin_form" id="qrin_form" method="post" action="">
	  <fieldset>
        <legend>Options</legend>
        <div class="clearfix">		
		<dl id="sizegrid" style="float: left; width: 48%; padding-right: 2%;">
			<dt><label for="qrtype" class="small">Size:<dt>
			<dd><select id="sized" class="formfield-c" name="sized">
			    <option value="100">100x100</option>
				<option value="150">150x150</option>
			    <option value="200">200x200</option>
				<option value="250">250x250</option>
				<option value="300">300x300</option>
				<option value="350">350x350</option>
				<option value="400">400x400</option>
				<option value="450">450x450</option>
				<option value="500">500x500</option>
			</select></dd>
		</dl>
		<dl id="qrselect" style="float: left; width: 48%; padding-left: 2%;">
			<dt><label for="qrtype" class="small">Type:</dt>
            <dd><select class="formfield-c" id="qrtype" name="qrtype">
			       <option value="urlqr">URL</option>
				   <option value="buscardqr">Business Card</option>
				   <option value="messageqr">Message</option>
			    </select>
			</dd>
		</dl>
		</div>
	  </fieldset>
      <hr />
	  <fieldset>
	    <legend>Data</legend>
		<dl id="urlqrid" class="details">
            <dt><label for="qrurl">URL</label></dt>
            <dd><input type="text" id="qrurl" name="qrurl" class="formfield-c" value="" size="28" /></dd>
		</dl>
		
		<div id="buscardqrid">
		  <dl class="details">
			<dt><label for="flname">Name:</label></dt>
			<dd><input type="text" name="flname" id="flname" class="formfield-c" value="" size="28" /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="org">Company Name:</label></dt>
			<dd><input type="text" name="org" id="org" class="formfield-c" value="" size="28"  /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="phone">Telephone:</label></dt>
			<dd><input type="text" name="phone" id="phone" class="formfield-c" value="" size="28" /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="addr">Work Address:</label></dt>
			<dd><input type="text" name="addr" id="addr" class="formfield-c" value="" size="28" /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="city">City:</label></dt>
			<dd><input type="text" name="city" id="city" class="formfield-c" value="" size="28"  /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="state">State, ZIP Code:</label></dt>
			<dd><input type="text" name="state" id="state" class="formfield-c" value="" /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="email">Email Address</label></dt>
			<dd><input type="text" name="email" id="email" class="formfield-c" value="" size="28" /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="website">Website</label></dt>
			<dd><input type="text" name="website" id="website" class="formfield-c" value="" size="28" /></dd>
		  </dl>
		  <dl class="details">
			<dt><label for="notes">Memo</label></dt>
			<dd><input type="text" name="notes" id="notes" class="formfield-c" value="" size="28" /></dd>
		  </dl>
		</div>


		<dl id="messageqrid" class="details">
            <dt><label for="qrmessage">Message</label></dt>
			<dd><textarea id="qrmessage" name="qrmessage" class="textarea" value="" cols="10" rows="5" ></textarea></dd>
		</dl>
        
		<hr />
		
		<button type="submit" name="wrqrin_submit" id="wrqrin_submit" class="subme"><i class="icon-cog icon-large"></i> Generate</button>
		<input type="hidden" id="wpqrin_addr" name="wpqrin_addr" value="'. get_template_directory_uri() . '/process/'.$wpqr_out.'" />
		<input type="hidden" id="ip_address" name="ip_address" value="'.$_SERVER['REMOTE_ADDR'].'" />
	  </fieldset>
	</form>
	<img id="qrimagescr" src="" border="none" />
	<p id="the_reset" style="text-align: center;"><a href="#reset" id="reset_form">Reset</a></p>
	</div>
	</div>';
	
	//

	return $inForm;
}

/*
Template Name: qr code generator
*/
get_header(); ?>
		    <div id="page_header" class="project-header">
		    	<div class="wrapper">
                   <h1 class="pagetitle">QR Code Generator</h1>
				   <p>Quickly generate custom QR Code images for URLs, Business Cards, and Messages using <a href="https://developers.google.com/chart/infographics/docs/qr_codes">Google's Chart API</a>.</p>
			    </div>
			</div>
			<article class="entry">
			       <h2>The Generator</h2>
				   <p>Unfortunately this thing has some limitations, and the form itself is slightly confusing. Sorry about that.</p>
				   <hr />
				<?php 
				   $form = getQRForm(); 
                   echo $form;
				?>
			</article>
			<hr />
			<article>
			   <h2>Version History</h2>
			   <p>The most recent version of the QR Generator is 1.2.</p>
			   <dl class="version">
			     <dt>1.2</dt>
				 <dd>
				    <ul>
                      <li>More secure version using CURL, as my server configuration wouldn't allow remote opening of a url.</li>
					  <li>Restyled.</li>
					  <li>Form reset still a little wonky.</li>
					  <li>Google Chart Infographics is deprecated! Oh noes!</li>
				    </ul>
				 </dd>
			     <dt>1.0</dt>
				 <dd>
				    <ul>
                      <li>First version.</li>					
				      <li>Built an ever loving long time ago.</li>
				    </ul>
				 </dd>
			   </dl>
			</article>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php endwhile; endif; ?>
			<?php if ('open' == $post->comment_status) : ?>
			<hr />
			<?php comments_template();  ?>
			<?php endif; ?>
<?php get_footer(); ?>
