<?
/**
 * reactjs-development-services /
 * _vp_ 2022-12-06
**/
get_header();

// // Duplicated from template-parts/content/content-post.php
$description = get_the_archive_description();
global $hero_url_default;
$hero_url = get_post_meta( get_the_ID(), 'wco_hero_url', true);
if (strlen($hero_url) == 0) {
  $hero_url = $hero_url_default;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="page-header" style="background-image: url('<?= $hero_url ?>'); ">
    <div class="page-header-inner">
      <h1 class="entry-title alignwide"><? the_title(); ?></h1>
      <?php twenty_twenty_one_post_thumbnail(); ?>
    </div>
  </header>

  <div class="entry-content alignwide overflow-margin articles">

    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
      <tr>
        <td align="center" valign="top" id="bodyCell">
          <!-- BEGIN TEMPLATE // -->
          <table border="0" cellpadding="0" cellspacing="0" width="100%">

            <tr>
              <td align="center" valign="top" id="templateBody" data-template-container>
                <!--[if (gte mso 9)|(IE)]>
                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                    <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                                    <![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                  <tr>
                    <td valign="top" class="bodyContainer">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                        <tbody class="mcnImageBlockOuter">
                          <tr>
                            <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                              <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                                <tbody>
                                  <tr>
                                    <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">


                                      <img align="center" alt="" src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/12/06141355/600x450-RudolphLee.jpg"
                                        width="564" style="padding-bottom: 0px; vertical-align: bottom; display: inline !important; border-radius: 3%;"
                                        class="mcnImage" >
                                      <span class='figure-caption' >Illustration by Rudolph Lee</span>


                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                              <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->

                              <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>

                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:27px; padding-left:18px;">

                                      <h3>At Wasya Co, our awesome ReactJs&nbsp;development capabilities enable us to create a
                                        responsive, clean-coded, elegant-looking website just for you.</h3>
                                      <br>
                                      <i>We understand the importance of every small detail, which sets us apart from
                                        everyone else, and gives our clients confidence that they are in good hands.</i>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso]>
        </td>
        <![endif]-->

                              <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
                        <tbody class="mcnButtonBlockOuter">
                          <tr>
                            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #009FC7;">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; padding: 18px;">
                                      <a class="mcnButton " title="Wasya Co Project Intake for ReactJs Development"
                                        href="https://wasya.co/contact-us-2/" target="_blank" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;"
                                      >Tell us About your Project</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                              <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->

                              <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>

                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                                      <h1 style="margin-top: 20px;"><em>We Provide</em></h1>

                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso]>
        </td>
        <![endif]-->

                              <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                        <tbody class="mcnCaptionBlockOuter">
                          <tr>
                            <td class="mcnCaptionBlockInner" valign="top" style="padding:9px;">


                              <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionBottomContent" width="188">
                                <tbody>
                                  <tr>
                                    <td class="mcnCaptionBottomImageContent" align="center" valign="top" style="padding:0 9px 9px 9px;">
                                      <img alt="" src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/12/05174731/150x150-orchid.png" width="75" style="max-width:75px;" class="mcnImage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="mcnTextContent" valign="top" style="padding:0 9px 0 9px;" width="188">
                                      <div style="text-align: center;">Slick Design</div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              <table align="right" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionBottomContent" width="188">
                                <tbody>
                                  <tr>
                                    <td class="mcnCaptionBottomImageContent" align="center" valign="top" style="padding:0 9px 9px 9px;">
                                      <img alt="" src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/12/05174732/150x150-trophy.png" width="75" style="max-width:75px;" class="mcnImage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="mcnTextContent" valign="top" style="padding:0 9px 0 9px;" width="188">
                                      <div style="text-align: center;">Strategic Solutions</div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              <table align="right" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionBottomContent" width="188">
                                <tbody>
                                  <tr>
                                    <td class="mcnCaptionBottomImageContent" align="center" valign="top" style="padding:0 9px 9px 9px;">
                                      <img alt="" src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2022/12/05174733/150x150-users.png" width="75" style="max-width:75px;" class="mcnImage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="mcnTextContent" valign="top" style="padding:0 9px 0 9px;" width="188">
                                      <div style="text-align: center;">Awesome Support</div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>





                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                              <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->

                              <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>

                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                                      <h3 style="margin-top: 20px; margin-bottom: 20px;">If you are ready to take your
                                        online business to the next level, talk to us
                                        today!</h3>

                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso]>
        </td>
        <![endif]-->

                              <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
                            </td>
                          </tr>
                        </tbody>
                      </table>


                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%; margin-bottom: 40px;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                              <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->

                              <!--[if mso]>
        <td valign="top" width="300" style="width:300px;">
        <![endif]-->
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:300px;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>

                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-left:18px; padding-bottom:9px; padding-right:18px;">

                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
                                        <tbody class="mcnButtonBlockOuter">
                                          <tr>
                                            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #009FC7;">
                                                <tbody>
                                                  <tr>
                                                    <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px;">
                                                      <a class="mcnButton " title="Wasya Co Project Intake for ReactJs Development" href="https://wasya.co/our-work/" target="_blank" style="padding: 18px; font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">See Our Successful <br />ReactJs Deliveries</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>

                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso]>
        </td>
        <![endif]-->

                              <!--[if mso]>
        <td valign="top" width="300" style="width:300px;">
        <![endif]-->
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:300px;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>

                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-left:18px; padding-bottom:9px; padding-right:18px;">

                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
                                        <tbody class="mcnButtonBlockOuter">
                                          <tr>
                                            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #009FC7;">
                                                <tbody>
                                                  <tr>
                                                    <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Helvetica; font-size: 18px; ">
                                                      <a class="mcnButton " title="Wasya Co Project Intake for ReactJs Development" href="https://wasya.co/contact-us-2/" target="_blank" style="padding: 18px; font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Describe Your Project <br />to Get Started</a>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>


                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso]>
        </td>
        <![endif]-->

                              <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
              </td>
            </tr>

          </table>
          <!-- // END TEMPLATE -->
        </td>
      </tr>
    </table>

  </div>
</article>

<?
get_footer();
