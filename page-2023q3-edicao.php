
<? get_header(); ?>
<? // get_template_part( 'template-parts/header/site-header' ); ?>

<article id="a2023q3issue" class='' >
  <section id='p1' class='hero' >

    <h1 class='lobster'>Innovative solutions for your digital success</h1>

  </section>
  <div class='divider'></div>

  <section id='p2' class='about-us' >
    <div class='max-width'>
      <div class='header'>
        <h2 class='title'>WasyaCo</h2>
        <h3 class='subtitle'>- Est. 2013 -</h3>
      </div>
      <div class='fancy-border'></div>

      <p>At Wasya Co, we understand the challenges that come with developing and maintaining software in today's fast-paced and constantly evolving technological landscape. That's why we offer a comprehensive range of services to help you navigate these challenges and stay ahead of the curve.</p>

      <p>Our focus is always on delivering value to our clients, and we pride ourselves on our ability to work collaboratively and transparently with our clients throughout the development process.</p>

      <p>If you're looking for a trusted partner to help you achieve your digital goals, look no further than Wasya Co. We're committed to providing you with the innovative solutions you need to succeed in today's digital world.</p>
    </div>
  </section>
  <div class='divider'></div>

  <? if ( has_nav_menu( 'issues-nav' ) ) : ?>
    <?
    $lang = explode('-', get_bloginfo('language'))[0];
    // var_dump( $lang );

    $config = get_page_by_path('config');

    $current_issue_id = get_post_meta( $config->ID, $lang .'/wco_current_issue_id', true);
    // var_dump( $current_issue_id );

    ?>
    <section class='issue-navigator' >
      <div class='max-width'>
        <h1>
          <?= ucwords(__('current issue', 't21')); ?>:
          <a href="<? get_page_uri( $current_issue_id ); ?>" ><?= get_the_title($current_issue_id); ?></a>
        </h1>
        <nav >
          <ul >
            <? wp_nav_menu(array( 'theme_location' => 'issues-nav',
                                  'container'      => false,
                                  'depth'          => 1,
                                  'fallback_cb'    => false,
            ) ); ?>
          </ul>
        </nav>
      </div>
    </section>
  <? endif; ?>

  <section id='p4' class='our-services-pg1' >
    <div class='max-width'>
      <div class='header'>
        <h2 class='title'>Our Technology Services</h2>
        <div class='subtitle'>
          <span class='a'>We offer design & development services&nbsp;</span><span class='a'>in a variety of technologies and stacks.</span>
        </div>
      </div>
      <div class='fancy-border'></div>

      <div class='rows'>
        <div class='row'>
          <div class='col-md-6'>

            <div class='wco-card-2'>
              <div class='img ruby'>
                <div class='imgC'></div>
              </div>
              <a href="/dev-ror"><h2>Ruby on Rails</h2></a>
              <div class='sub' >Web Application Development</div>
              <a href="/dev-ror"><button class="button-91" role="button">Explore</button></a>
            </div>

          </div>
          <div class='col-md-6'>

            <div class='wco-card-2'>
              <div class='img reactor'>
                <div class='imgC'></div>
              </div>
              <a href="/dev-react"><h2>ReactJs</h2></a>
              <div class='sub' >Building Elegant Apps & Frontends</div>
              <a href="/dev-react"><button class="button-91" role="button">Learn More</button></a>
            </div>

          </div>
        </div><!--row-->

        <div class='row flex-row'>
          <div class='col-md-6'>

            <? /* <div class='wco-card-2'>
              <div class='img printing-press'>
                <div class='imgC'></div>
              </div>
              <a href="/dev-wp"><h2>Wordpress</h2></a>
              <div class='sub' >Design & Development</div>
              <a href="/dev-wp"><button class="button-91" role="button">Take a Tour</button></a>
            </div> */ ?>

          </div>
          <div class='col-md-6 our-services-exploreW'>

            <? get_template_part('template-parts/our-services/our-stack-link-2'); ?>

          </div>
        </div><!--row-->
      </div><!--container-->
    </div><!--max-width-->
  </section>
  <div class='divider'></div>

  <section id='p5' class='our-process' >
    <div class='row max-width'><? // separate div b/c background and content may be different ?>

      <div class='my-col col-sm-12 col-md-4 order-md-2'>
        <? // <img class='illustration' src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/02/12155105/256x256-robotic-arm-1rm-tiny.png" /> ?>
        <img class='illustration' src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/04/26164122/256x256-robotic-arm-rm-tiny.png" />
      </div>
      <div class='col-sm-12 col-md-8 order-md-1'>
        <div class='my-col'>
          <div class='header'>
            <h2 class='title' >Our Process</h2>
          </div>
          <div class='fancy-border'></div>

          <div class='description'>
            <p>We work in iterative development cycles segmented in 1-week sprints. We hold daily standups, and monthly planning meetings.</p>
            <p>We use Redmine as the ticketing system, along with a number of other productivity tools.</p>
          </div>

          <div class='flex-col'>
            <a href="/our-process-2"><button class="button-91" role="button">Tour our Workshop</button></a>
            <a class='sub' href="/our-process-2">Read about Our Process</a>
          </div>
        </div>
      </div>


    </div>
  </section>
  <div class='divider'></div>

  <? get_template_part( 'template-parts/our-services/frontends'); ?>

  <section id='p6' class='our-clients' >
    <div class='max-width'>
      <div class='header'>
        <h2 class='title' style='color: #aaa;' ><span class='a'>Trusted by </span><span class='a'>Partners Worldwide</span></h2>
      </div>
      <div class='fancy-border'></div>

      <div class='rows'>
        <div class='row r1'>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000856/wasya_co_nexenta.jpg" />
          </div>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000851/wasya_co_creek2.jpg" />
          </div>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000854/wasya_co_liatrio.jpg" />
          </div>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000855/wasya_co_mediatek.jpg" />
          </div>
        </div>
        <div class='row'>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000856/wasya_co_operaevent.jpg" />
          </div>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000858/wasya_co_signvox.jpg" />
          </div>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000903/wasya_co_zmdigital.jpg" />
          </div>
          <div class='col-md-3'>
            <img src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/08/28000857/wasya_co_redes.jpg" />
          </div>
        </div>
      </div>
    </div><!--max-width-->
  </section>

  <section id='p7' class='testimonials' >
    <div class='max-width'>
      <div class='header'>
        <h2 class='title' style='color: #aaa;' >What People are Saying</h2>
      </div>
      <div class='fancy-border'></div>

      <div class='row'>
        <div class='col-md-4 testimonial'>
          <div class='message'>
            They built the application quickly for me and according to spec. Great communication, great service.
          </div>
          <div class='signature'>
            <div class='name'>Stephen Kim</div>
            <div class='subname'>Business Owner</div>
          </div>
        </div>

        <div class='col-md-4 testimonial'>
          <div class='message'>
            Wasya Co provided the necessary technical guidance for the team to succeed, in tight deadlines. Victor was a pleasure to work with.
          </div>
          <div class='signature'>
            <div class='name'>Operaevent</div>
            <div class='subname'>Bay Area startup</div>
          </div>
        </div>

        <div class='col-md-4 testimonial'>
          <div class='message'>
            Wasya Co delivered a great-looking mobile site, just what we wanted.
          </div>
          <div class='signature'>
            <div class='name'>Marchesi Design</div>
            <div class='subname'>Furniture Store</div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <div class='divider'></div>

  <section class='contact-us-2-md' >
    <div class='max-width'>
      <div class='description'>
        <p class='sm' >Ready to make a move? <br />Chat with us about your project:</p>
        <!-- <a href="/w/c2"><button class="button-91" role="button">Schedule a call</button></a> -->
        <a href="/contact-us-4"><button class="button-91" role="button">Contact Us</button></a>
      </div>
      <div class='illustration'></div>
    </div>
  </section>
  <div class='divider'></div>

</article>

<? get_footer(); ?>
