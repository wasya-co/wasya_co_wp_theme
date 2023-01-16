<?php
/**
 * Template Name: 20230116 grayMinimal
 * Template Post Type: post, page
 * _vp_ 20230116
**/

// get_header();
// get_footer();

?>

<html>
<head>

<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style> @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap'); </style>
<style>
  html, body {
    margin: 0;
    padding: 0;
    font-size: 16px;

    --wco-overflow-size: 32px;
    --wco-tag-tail-width: 15px;
  }

  .container {
    background: url('//d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/01/10155705/bg4.jpg');
  }

  .main-header {
    position: fixed;
    width: 100%;

    background: rgba(0,0,0, 0.2);
    border-bottom: 1px solid gray;
    padding: 10px 0;
  }
  .main-header a {
    color: white;
    text-decoration: none;
  }
  .maxwidth,
  .main-header > .W1 {
    max-width: 1200px;
    margin: auto;
    /* border: 2px solid red; */
  }
  .main-header .logo {
    font-family: 'Lobster', cursive;
    font-size: 2em;
    color: white;
  }

  .hero,
  .main-footer {
    height: 200px;
    /* background: url('bg2.jpg'); */
    background: rgba(0,0,0, 0.3);
    /* position: absolute; */
  }
  .footer-copyright {
    background: rgba(0,0,0, 0.6);
    /* height: 3rem; */
    padding: 1rem 0;
  }
  .footer-copyright a {
    color: white;
  }

  .main-footer,
  .footer-copyright {
    color: white;
  }


  .flex-row {
    display: flex;
  }
  .maincol {
    margin-right: 2rem;
  }
  .maincol {
    max-width: 750px;
    flex-grow: 1;
  }
  .Sidebar {
    max-width: 450px;
    margin-top: 1rem;
  }


  .CardAsymm {
    /* border: 5px solid red; */
    border-radius: 50px 0 50px 0;

    background: white;
    padding: .5rem 1rem;

    /* box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px; */

    box-shadow: 0.5rem 0.5rem 0.5rem black, -0.5rem -0.5rem 0.5rem #eee;

    margin: 1rem 0;
  }

  .container.margin-overflow .maincol {
    margin-top:    calc(-1 * ( 1rem + var(--wco-overflow-size) ) );
    margin-bottom: calc(-1 * ( 1rem + var(--wco-overflow-size) ) );
  }
  .container.margin-overflow .main-footer {
    padding-top: calc(var(--wco-overflow-size) + 1em);
  }

  .TagsListMini {
    display: flex;
    margin: .5rem auto;
  }
  .TagsListMini > *:not(:last-child) {
    margin-right: 0.5rem;
  }
  .Tag {
    display: flex;
    align-items: center;
    /* border: 1px solid red; */
    background: #666;
    color: white;
    border-radius: 1rem 0 0 1rem;
  }
  .Tag > * {
    margin-left: 0.33rem;
  }
  .metaline a {
    color: black;
  }
  .Tag a {
    color: white;
    text-decoration: none;
  }
  .Tag i {
    display: block;
    margin-right: calc(0.33 * var(--wco-tag-tail-width) );
  }
  .Tag .tag-tail {
    border:       var(--wco-tag-tail-width) solid #666;
    border-left:  0;
    border-right: var(--wco-tag-tail-width) solid white;
    width:        var(--wco-tag-tail-width);
  }

  .feature-image {
    width: 500px;
    height: 309px;
    background: url('feature1.jpg');
    float: left;

    margin: 0 2rem 1rem calc( -40px );

    /* box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px; */

    box-shadow: 0.5rem 0.5rem 0.5rem black, -0.5rem -0.5rem 0.5rem #eee;
  }

  .subhead {
    font-style: italic;
    margin: 0.5rem 5rem;
  }

  .Markers {
    display: flex;
    flex-wrap: wrap;
  }
  .Markers > .Marker {
    margin: 0 0.5rem 0.5em 0;
    border: 2px solid white;
  }
  .Marker .thumb {
    width: 100px;
    height: 100px;
    background: #666;
    margin: 10px;
  }
  .Marker .label {
    text-align: center;
  }


  .SubscribeToNewsletter {
    padding-bottom: 2rem;
  }
  .SubscribeToNewsletter h2 {
    margin-bottom: 0;
  }
  .SubscribeToNewsletter .subtitle {
    color: #999;
    font-size: 0.8em;
    margin-bottom: 0.75rem;
  }
  .SubscribeToNewsletter h2,
  .SubscribeToNewsletter .subtitle {
    text-align: center;
  }
  .SubscribeToNewsletter .form-field {
    width: 100%;
    display: flex;
  }
  .SubscribeToNewsletter .form-field:not(:last-child) {
    margin-bottom: 0.5em;
  }
  .SubscribeToNewsletter .col.fields {
    flex-grow: 1;
    margin-right: 1rem;
  }
  .SubscribeToNewsletter label {
    /* flex-grow: 1; */
    width: 5em;
    text-align: right;
    /* border: 1px solid red; */
  }
  .SubscribeToNewsletter .actions {
    width: 5em;
  }
  .SubscribeToNewsletter input[type='text'] {
    flex-grow: 1;
    margin-left: 1rem;
  }
  .SubscribeToNewsletter .flex-row {
    align-items: flex-end;
  }



  .square-rads-row {
    display: flex;
  }
  .square-rads-row > .cell {
    width: 50%;
  }
  .square-rads-row > .cell:not(:last-child) {
    margin-right: 1rem;
  }
  .SquareRad {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1rem 0 2rem 0;
  }

  .footers {
    display: flex;
    flex-direction: row;
  }
  .footers > * {
    flex-grow: 1;
  }
  .footers > *:not(:last-child) {
    margin-right: 1rem;
  }
</style>

</head>
<body class='t20230116-grayM' >
<div class='container margin-overflow'>


  <div class='main-header'>
    <div class='W1'>
      <div class='logo'><a href="https://wasya.co">WasyaCo</a></div>
    </div>
  </div>

  <div class='hero'>
  </div>

  <div class='maxwidth flex-row'>
    <div class='col maincol'>

      <? the_post(); get_template_part( 'template-parts/content/content-post20230110' ); ?>

    </div>
    <div class='col Sidebar'>

      <div class='CardAsymm SubscribeToNewsletter'>
        <div class='W1'>
          <h2>Subscribe to our newsletter</h2>
          <div class='subtitle'>We email updates about once a month
            <!-- <br />Unsubscribe at any time -->
          </div>
          <form>
            <div class='flex-row'>
              <div class='col fields'>
                <div class='form-field'>
                  <label>Your name</label>
                  <input type='text'>
                </div>
                <div class='form-field'>
                  <label>Email</label>
                  <input type='text'>
                </div>
              </div>
              <div class='col actions'>
                <input type='submit' value='Subscribe' />
              </div>
            </div>
        </div>
      </div>

      <!-- <div class='square-rads-row'>

        <div class='cell'>
          <div class='CardAsymm PiAd SquareRad'>
            <div class='W1'>
              <div class='Marker'>
                <div class='thumb img'></div>
                <div class='label'>Piousbox.com</div>
              </div>
            </div>
          </div>
        </div>

        <div class='cell'>
          <div class='CardAsymm BjjcAd SquareRad'>
            <div class='W1'>
              <div class='Marker'>
                <div class='thumb img'></div>
                <div class='label'>BJJCollective</div>
              </div>
            </div>
          </div>
        </div>

      </div> -->

      <? if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
        <section class='sidebar-right' >
          <? dynamic_sidebar( 'sidebar-right' ); ?>
        </section>
      <? endif; ?>

    </div>

  </div>

  <div class='main-footer'>
    <div class='maxwidth footers'>

      <!-- <div class='footer-1'>
        <h2>Some footer</h2>
      </div>
      <div class='footer-2'>
        <h2>Another footer</h2>
      </div>
      <div class='footer-3'>
        <h2>Third footer column</h2>
      </div> -->

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

</body></html>
