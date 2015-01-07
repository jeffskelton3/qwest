<? $page="Home"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Qwest Credit Enhancement Solutions- Credit repair, tradelines, credit tips, credit laws, late payments, foreclosures, collections, banktruptcies, liens" />
<meta name="keywords" content="credit repair, tradelines, credit tips, credit laws, late payments, foreclosures, collections, banktrupcies, liens">

<title>Qwest Credit Enhancement | <?php echo $page; ?></title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" title="" />
<? include("inc/global-header-data.php"); ?>
<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.7.1.min.js" type="text/javascript"></script> 
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.5.5/jquery.validate.min.js" type="text/javascript"></script> 
  <script src="js/bootstrap.min.js" type="text/javascript"></script> 
  <script type="text/javascript">
    $(document).ready(function(){
    $("#aff_form").validate();
     // Grab all the excerpt class
      $('.excerpt').each(function () {
        var wordCount = parseInt($(this).attr("data-word-count")) || 80;
        // Run formatWord function and specify the length of words display to viewer
        $(this).html(formatWords($(this).html(), wordCount));
         
        // Hide the extra words
        $(this).children('span').not(".trailer-dots").hide();
       
      // Apply click event to read more link
      }).click(function () {
     
        // Grab the hidden span and anchor
        var more_text = $(this).children('span.more_text');
        var more_link = $(this).children('a.more_link');
        var trailer_dots = $(this).children("span.trailer-dots");
           
        // Toggle visibility using hasClass
        // I know you can use is(':visible') but it doesn't work in IE8 somehow...
        if (more_text.hasClass('hide')) {
          more_text.show();
          trailer_dots.hide();
          more_link.html(' hide');      
          more_text.removeClass('hide');
        } else {
          more_text.hide();
          trailer_dots.show();
          more_link.html(' Read More');          
          more_text.addClass('hide');
        }
     
        return false;
       
      });
    });

    function formatWords(sentence, show) { 
      // split all the words and store it in an array
      var words = sentence.split(' ');
      var new_sentence = '';
     
      // loop through each word
      for (i = 0; i < words.length; i++) {
     
        // process words that will visible to viewer
        if (i <= show) {
          new_sentence += words[i] + ' ';
           
        // process the rest of the words
        } else {
       
          // add a span at start
          if (i == (show + 1)) new_sentence += '<span class="trailer-dots">...</span><span class="more_text hide">';       
     
          new_sentence += words[i] + ' ';
         
          // close the span tag and add read more link in the very end
          if (words[i+1] == null) new_sentence += '</span><a href="#" class="more_link"> Read More</a>';
        }       
      } 
     
      return new_sentence;
     
    }
  </script>
</head>
<body>
<?php require('blog/wp-blog-header.php'); //wordpress integration?>
  <div class="container">
    <div id="hdr">
    <? include("inc/content-header.php"); ?>
  </div>
  
  <div id="content_wrapper" style="padding-top:10px;">    
    <?php include("inc/slideshow.php"); ?>
    <div class="row-fluid">
      <div id="primary_content" class="span7">
        <div class="padding">
        <!-- content begins here -->

        


        <h2>Who We Are</h2>
        <p class="excerpt" data-word-count="100">Our employees are CDIA Certified as FCRA Experts, Certified FICO Professionals, and nationally recognized credit reporting and credit scoring experts.  We have helped thousands of clients with credit challenges.  At Qwest, we not only provide credit solutions, we also make sure each client obtains a comprehensive understanding of credit and credit scoring.  We feel that these secrets have been hidden for long enough and it is time to share these credit fundamentals with the world.  We do our very best to ensure that our clients FCRA and FDCPA rights are enforced, and that they are better prepared to handle their credit in the marketplace.  Imagine a personal trainer for your credit score.  Just like a personal trainer, we can only help our clients achieve results if they are committed to achieving those results.  In alot of cases, we are talking about years of bad credit habits that need to be re-programmed.  So, while we can achieve some great things for our clients, it does take a very committed, interactive client for the best results to be reached.</p>
        
        <h2>Our Commitment</h2> 
        <p class="excerpt" data-word-count="125">We have a very high rate of success with our clients.  The reason for that is we are very selective in which files we will take on.  We can not take every case.  As you see, there is no ability to simply sign up and pay on our website.  That is by design.  We promise to evaluate every scenario on a case by case basis, and determine if we can provide solutions.  While we would like to help everyone, there are simply some cases that are not ideal for this type of work.  We have all seen the websites that claim they can do everything, and help everyone...unfortunately, that is misleading.  We honestly dont know how any company can agree to take a client without fully reviewing their case first, and determining if it is a file that can be helped.  We promise to evaluate every scenario on a case by case basis, and determine if we can provide solutions.  Unfortunately this means that some files will be turned away. We also promise that if we cannot provide the solutions that you need, we will politely and professionally advise you of that fact and offer a detailed explanation.  We are happy to review your case.</p>
        <div id="cta_buttons" class="row-fluid">
          <div class="span9">
            <a href="/signup-form.php" class="btn btn-large btn-success btn-primary pull-left"><i class="icon-white icon-ok"></i> Submit Your Case</a>
            <a href="/affiliate-form.php" class="btn btn-large btn-inverse pull-right"><i class="icon-white icon-user"></i> Become an Affiliate</a>
          </div>
        </div>
      
        <div id="blog_teaser" style="min-height:170px;position:relative; top:-5px">
        <h2>Recent Blog Posts</h2>
        <div class="well">
          <div class="padding">
            <ul class="unstyled">
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
      </div>

        
        
        </div><!--/padding-->
      </div><!--/primary_content-->
      
      <div id="side_bar" class="span5">
       <div class="padding">
        
        
        <script src="//www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&amp;up_channel=QwestCreditTube&amp;synd=open&amp;w=340&amp;h=390&amp;title=Videos&amp;border=%23ffffff%7C0px%2C1px+solid+%23595959%7C0px%2C1px+solid+%23797979%7C0px%2C2px+solid+%23898989&amp;output=js"></script>
        <div class="hr">&nbsp;</div>
        <form id="aff_form" action="https://www.creditstatusnow.com/default.aspx" method='POST'>     
        <div id="aff_portal">
          <h3>Member Login</h3>   
          <label for='username'>User Name:</label>
          <input type="text" name="username" id="username" class="required" />  
          <label for='password'>Password:</label>
          <input type="password" name="password" id="password"  class="required" />       
          <input type="submit" name="button" id="button" value="Submit" class="btn" />    
        </div>
        </form>
        </div><!--/padding-->
      </div> <!--/side_bar-->
    </div><!--/row-->
  </div><!--/content_wrapper-->
  <!-- end content -->
  <div id="ftr">
    <? include("inc/content-footer.php"); ?>
  </div>
  </div>
  
<? include("inc/global-ga.php"); ?>
  
</body>
</html>