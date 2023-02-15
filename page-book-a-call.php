<?
/**
 * Page: book-a-call
 * _vp_ 2023-01-16
**/

get_header('empty');
the_post();
?>

<body class="t20230116-grayM <?= join(" ", get_body_class()); ?>" >
<div class='wco-container margin-overflow'>


  <div class='main-header'>
    <div class='maxwidth'>
      <div class='logo'><a href="https://wasya.co">WasyaCo</a></div>
    </div>
  </div>

  <div class='hero'>
  </div>

  <div class='maxwidth'>
    <div class='maincol'>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- <header class="page-header" style="background-image: url('<?= $hero_url ?>'); ">
          <div class="page-header-inner">
            <h1 class="entry-title alignwide"><? the_title(); ?></h1>
            <?php twenty_twenty_one_post_thumbnail(); ?>
          </div>
        </header> -->

        <div class="alignwide overflow-margin Card">

          <h1>Book a call with <span class='name'>Jesse</span></h1>

          <!-- <button class='mui-btn mui-btn--primary mui-btn--raised' >My Btn</button> -->

          <form class="mui-form">
            <!-- <legend>Title</legend> -->
            <div class="mui-textfield mui-textfield--float-label">
              <input type="text">
              <label>Your name</label>
            </div>
            <div class="mui-textfield mui-textfield--float-label">
              <input type="text" value="" >
              <label>Email</label>
            </div>
            <div class="mui-textfield mui-textfield--float-label">
              <input type="text" value="" >
              <label>Telephone</label>
            </div>

            <div class="flex-row">
              <div class="mui-textfield mui-textfield--float-label">
                <input type="text" value="" class="datepicker" >
                <label>Day of the meeting</label>
              </div>
              <div class="mui-textfield mui-textfield--float-label">
                <input type="text" value="" class="datepicker" >
                <label>Time (30mins)</label>
              </div>
            </div>

            <div class="mui-textfield mui-textfield--float-label">
              <input type="text" value="" >
              <label>Payment ($1):</label>

              <span>Read our <u>Privacy and Cyber Security</u> statement.</span>
            </div>

            <div class="mui-textfield mui-textfield--float-label">
              <textarea></textarea>
              <label>What would you like to discuss?</label>
            </div>

            <div>
              Recaptcha
            </div>

            <div>
              <span>By submitting this form you agree to our <u>Terms and Conditions</u>.</span>
              <button type="submit" class="mui-btn mui-btn--raised">Submit</button>
            </div>

          </form>

          <script>
            $( "#datepicker" ).datepicker();
            // @TODO: and draggable, for the stupid admin thing
          </script>

          <? // the_content(); ?>

        </div>
      </article>

    </div>
  </div>

  <div class='main-footer'>
    <div class='maxwidth footers'>
    </div>
  </div>
  <div class='footer-copyright'>
    <div class='maxwidth'>
      <div clas='col'>
        Copyright 2023 &copy; WasyaCo &nbsp;|&nbsp;
        <a href="https://wasya.co/terms-of-service/">Terms of Service</a>
      </div>
      <div class='col debug'>
        template: grayMinimal
      </div>
    </div>
  </div>


</div>
</body>
<? get_footer('empty'); ?>

