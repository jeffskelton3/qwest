<? $page="Home"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="description" content="Qwest Credit Enhancement Solutions- Credit repair, tradelines, credit tips, credit laws, late payments, foreclosures, collections, banktruptcies, liens" />
    <meta name="keywords" content="credit repair, tradelines, credit tips, credit laws, late payments, foreclosures, collections, banktrupcies, liens">

<title>Qwest Credit Enhancement | <?php echo $page; ?></title>
<? include("inc/global-header-data.php"); ?>
<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.4.min.js" type="text/javascript"></script> 
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.5.5/jquery.validate.min.js" type="text/javascript"></script> 
<script type="text/javascript">
  $(document).ready(function(){
    $("#aff_form").validate();
  });
  </script>
</head>
<body>
<?php require('blog/wp-blog-header.php'); //wordpress integration?>
<div id="container">
  <div id="hdr">
    <? include("inc/content-header.php"); ?>
  </div>
  <div id="content">
    <div id="main-content" class="home w-side-bar">
      <!-- content begins here -->
      <p></p>
      <p>Our team of trusted and experienced financial advisors have helped thousands of clients restore their credit and realize their financial dreams.</p>
      <div class="hr">&nbsp;</div>
      <h2>What Do We Do?</h2>
      <p>The Qwest Credit Advisors focus on all things affecting the three major factors of your credit score.  Our advisors are experts on FICO scoring.  We consult and advise our clients on how to build, improve, and maintain the best possible credit score.  See our <a href="/credit-tips.php">Credit Tips</a></p>
      <p>The Qwest financial advisors will also work vigorously to remove negative items from your credit report.  We utilize consumer protection <a href="/laws.php">Laws</a> to challenge any adverse information appearing in your credit file, such as:</p>
      <div class="float-wrap">
        <ul class="services">
          <li>Late Payments</li>
          <li>Collections</li>
          <li>Bankruptcies</li>
          <li>Tax Liens</li>
        </ul>
        <ul class="services">
          <li>Judgements</li>
          <li>Foreclosures</li>
          <li>Charge Offs</li>
          <li>Repossessions</li>
        </ul>
      </div>
      <br />
      <p>Due to our extremely efficient process and dedicated team, the average time for our clients to see negative items removed is 30 days.  See <a href="/how-it-works.php">How it Works</a>.
      <h2>Industry Leader</h2>
      <p>The Qwest Credit team sets the standard in Credit Enhancement, with our revolutionary  combination of expert advice, removal of negative items, and adding seasoned <a href="/tradelines.php">Tradelines</a>, most clients experience dramatic increases to their credit score in less than 60 days. </p>
	
		<div id="blog_teaser" style="margin-top:15px;min-height:175px">
		<h2>Recent Blog Posts</h2>
		<div class="padding">
			<ul>
				<?php
				$args=array(
				  'post_type' => 'post',
				  'post_status' => 'publish',
				  'posts_per_page' => 5,
				  'caller_get_posts'=> 1
				  );
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  echo '';
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				  <li><span class="postdate"><?php the_time('F j, Y'); ?></span> <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				   <?php
				  endwhile;
				}
				wp_reset_query();
				?>
			</ul>
		</div>
	</div>

	  
	  <a class="social-link social-fb" href="http://www.facebook.com/pages/Qwest-Credit-Enhancement/136717709730357" target="_blank">
		Like us on Facebook
	  </a>
    
		
	
	</div>
    <div id="side-bar">
      <!-- optional side-bar *** remove class=" w-side-bar" from id="main-content" if this side-bar is not here -->


      

      <div class="testimonial testi-home">
        <p class="quote">Qwest has helped me<br />
          find peace of mind.</p>
        <p class="quoter">--Joseph Baker,<br />
          Homeowner &amp;<br />
          Father of Three</p>
        <a href="#" title="More success stories &raquo;" class="more">More success stories &raquo;</a> </div>
      <div class="float-wrap">
        <div class="left-col credit-web-sites">
          <h3>Credit Monitoring Sites</h3>
          <ul class="links">
            <li><a href="http://www.myfico.com">MYFICO.com</a></li>
            <li><a href="http://www.truecredit.com">TrueCredit.com</a></li>
            <li><a href="http://www.creditchecktotal.com">CreditCheckTotal.com</a></li>
          </ul>
          <h3>Credit Bureaus Web Sites</h3>
          <ul class="links">
            <li><a href="http://www.equifax.com">Equifax.com</a></li>
            <li><a href="http://www.transunion.com">Transunion.com</a></li>
            <li><a href="http://www.experian.com">Experian.com</a></li>
          </ul>
          <h3>Other Links</h3>
          <ul class="links">
            <li><a href="http://www.creditcards.com">Creditcards.com</a></li>
            <li><a href="http://www.credit.com">Credit.com</a></li>
            <li><a href="http://www.mortgage.com">Mortgage.com</a></li>
          </ul>
        </div>
        <div class="right-col did-you-know">
          <h3>Did you know?</h3>
          <p><a href="http://www.youtube.com/watch?v=5geYlYRj5xg" target="_blank">&ldquo;Dateline NBC<br />
            did a special<br />
            report on Collection<br />
            Agencies&rdquo;</a></p>
        </div>
      </div>
      <div class="hr">&nbsp;</div>
      <form id="aff_form" action="https://www.creditstatusnow.com/default.aspx" method='POST'>     
	<div id="aff_portal">
	<h3>Member Login</h3>		
	<label for='username'>User Name:</label>
	<input type="text" name="username" id="username" class="required" />	
	<label for='password'>Password:</label>
	<input type="password" name="password" id="password"  class="required" />				
	<input type="submit" name="button" id="button" value="Submit" />		
	</div>
      </form>
 
    </div>
    <!-- end content -->
  </div>
  <div id="ftr">
    <? include("inc/content-footer.php"); ?>
  </div>
</div>
<? include("inc/global-ga.php"); ?>
</body>
</html>