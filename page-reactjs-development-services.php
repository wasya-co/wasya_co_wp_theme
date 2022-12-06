<?
/**
 * reactjs-development-services /
 * _vp_ 2022-12-06
**/

// // Duplicated from template-parts/content/content-post.php
$description = get_the_archive_description();
global $hero_url_default;
$hero_url = get_post_meta( get_the_ID(), 'wco_hero_url', true);
if (strlen($hero_url) == 0) {
  $hero_url = $hero_url_default;
}

get_header();
?>

<style type="text/css">

  table td,
  table th {
    /* padding: calc(0.5 * var(--global--spacing-unit)); */
    border: 0;
  }
  .figure-caption {
    display: block;
    text-align: right;
    font-size: 0.6em;
    color: #666666;
  }

  p {
    margin: 10px 0;
    padding: 0;
  }

  table {
    border-collapse: collapse;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    display: block;
    margin: 0;
    padding: 0;
  }

  img,
  a img {
    border: 0;
    height: auto;
    outline: none;
    text-decoration: none;
  }

  body,
  #bodyTable,
  #bodyCell {
    height: 100%;
    margin: 0;
    padding: 0;
    width: 100%;
  }

  .mcnPreviewText {
    display: none !important;
  }

  #outlook a {
    padding: 0;
  }

  img {
    -ms-interpolation-mode: bicubic;
  }

  table {
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
  }

  .ReadMsgBody {
    width: 100%;
  }

  .ExternalClass {
    width: 100%;
  }

  p,
  a,
  li,
  td,
  blockquote {
    mso-line-height-rule: exactly;
  }

  a[href^=tel],
  a[href^=sms] {
    color: inherit;
    cursor: default;
    text-decoration: none;
  }

  p,
  a,
  li,
  td,
  body,
  table,
  blockquote {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
  }

  .ExternalClass,
  .ExternalClass p,
  .ExternalClass td,
  .ExternalClass div,
  .ExternalClass span,
  .ExternalClass font {
    line-height: 100%;
  }

  a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
  }

  .templateContainer {
    max-width: 600px !important;
  }

  a.mcnButton {
    display: block;
  }

  .mcnImage,
  .mcnRetinaImage {
    vertical-align: bottom;
  }

  .mcnTextContent {
    word-break: break-word;
  }

  .mcnTextContent img {
    height: auto !important;
  }

  .mcnDividerBlock {
    table-layout: fixed !important;
  }

  /*
  @tab Page
  @section Heading 1
  @style heading 1
  */
  h1 {
    color: #222222;
    font-family: Helvetica;
    font-size: 40px;
    font-style: normal;
    font-weight: bold;
    line-height: 150%;
    letter-spacing: normal;
    text-align: center;
  }

  /*
  @tab Page
  @section Heading 2
  @style heading 2
  */
  h2 {
    color: #222222;
    font-family: Helvetica;
    font-size: 34px;
    font-style: normal;
    font-weight: bold;
    line-height: 150%;
    letter-spacing: normal;
    text-align: left;
  }

  /*
  @tab Page
  @section Heading 3
  @style heading 3
  */
  h3 {
    color: #444444;
    font-family: Helvetica;
    font-size: 22px;
    font-style: normal;
    font-weight: bold;
    line-height: 150%;
    letter-spacing: normal;
    text-align: left;
  }

  /*
  @tab Page
  @section Heading 4
  @style heading 4
  */
  h4 {
    color: #949494;
    font-family: Georgia;
    font-size: 20px;
    font-style: italic;
    font-weight: normal;
    line-height: 125%;
    letter-spacing: normal;
    text-align: left;
  }

  /*
  @tab Header
  @section Header Container Style
  */
  #templateHeader {
    background-color: #f7f7f7;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-top: 0;
    border-bottom: 0;
    padding-top: 45px;
    /* padding-bottom: 45px; */
  }

  /*
  @tab Header
  @section Header Interior Style
  */
  .headerContainer {
    background-color: #transparent;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-top: 0;
    border-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
  }

  /*
  @tab Header
  @section Header Text
  */
  .headerContainer .mcnTextContent,
  .headerContainer .mcnTextContent p {
    color: #757575;
    font-family: Helvetica;
    font-size: 16px;
    line-height: 150%;
    text-align: left;
  }

  /*
  @tab Header
  @section Header Link
  */
  .headerContainer .mcnTextContent a,
  .headerContainer .mcnTextContent p a {
    color: #007C89;
    font-weight: normal;
    text-decoration: underline;
  }

  /*
  @tab Body
  @section Body Container Style
  */
  #templateBody {
    background-color: #FFFFFF;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-top: 0;
    border-bottom: 0;
  }

  /*
  @tab Body
  @section Body Interior Style
  */
  .bodyContainer {
    background-color: transparent;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-top: 0;
    border-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
  }

  /*
  @tab Body
  @section Body Text
  */
  .bodyContainer .mcnTextContent,
  .bodyContainer .mcnTextContent p {
    color: #757575;
    font-family: Helvetica;
    font-size: 16px;
    line-height: 150%;
    text-align: left;
  }

  /*
  @tab Body
  @section Body Link
  */
  .bodyContainer .mcnTextContent a,
  .bodyContainer .mcnTextContent p a {
    color: #007C89;
    font-weight: normal;
    text-decoration: underline;
  }

  /*
  @tab Footer
  @section Footer Style
  */
  #templateFooter {
    background-color: #333333;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-top: 0;
    border-bottom: 0;
    padding-top: 45px;
    padding-bottom: 63px;
  }

  /*
  @tab Footer
  @section Footer Interior Style
  */
  .footerContainer {
    background-color: transparent;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-top: 0;
    border-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
  }

  /*
  @tab Footer
  @section Footer Text
  */
  .footerContainer .mcnTextContent,
  .footerContainer .mcnTextContent p {
    color: #FFFFFF;
    font-family: Helvetica;
    font-size: 12px;
    line-height: 150%;
    text-align: center;
  }

  /*
  @tab Footer
  @section Footer Link
  */
  .footerContainer .mcnTextContent a,
  .footerContainer .mcnTextContent p a {
    color: #FFFFFF;
    font-weight: normal;
    text-decoration: underline;
  }

  @media only screen and (min-width:768px) {
    .templateContainer {
      width: 600px !important;
    }

  }

  @media only screen and (max-width: 480px) {

    body,
    table,
    td,
    p,
    a,
    li,
    blockquote {
      -webkit-text-size-adjust: none !important;
    }

  }

  @media only screen and (max-width: 480px) {
    body {
      width: 100% !important;
      min-width: 100% !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnRetinaImage {
      max-width: 100% !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnImage {
      width: 100% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    .mcnCartContainer,
    .mcnCaptionTopContent,
    .mcnRecContentContainer,
    .mcnCaptionBottomContent,
    .mcnTextContentContainer,
    .mcnBoxedTextContentContainer,
    .mcnImageGroupContentContainer,
    .mcnCaptionLeftTextContentContainer,
    .mcnCaptionRightTextContentContainer,
    .mcnCaptionLeftImageContentContainer,
    .mcnCaptionRightImageContentContainer,
    .mcnImageCardLeftTextContentContainer,
    .mcnImageCardRightTextContentContainer,
    .mcnImageCardLeftImageContentContainer,
    .mcnImageCardRightImageContentContainer {
      max-width: 100% !important;
      width: 100% !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnBoxedTextContentContainer {
      min-width: 100% !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnImageGroupContent {
      padding: 9px !important;
    }

  }

  @media only screen and (max-width: 480px) {

    .mcnCaptionLeftContentOuter .mcnTextContent,
    .mcnCaptionRightContentOuter .mcnTextContent {
      padding-top: 9px !important;
    }

  }

  @media only screen and (max-width: 480px) {

    .mcnImageCardTopImageContent,
    .mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,
    .mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent {
      padding-top: 18px !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnImageCardBottomImageContent {
      padding-bottom: 9px !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnImageGroupBlockInner {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcnImageGroupBlockOuter {
      padding-top: 9px !important;
      padding-bottom: 9px !important;
    }

  }

  @media only screen and (max-width: 480px) {

    .mcnTextContent,
    .mcnBoxedTextContentColumn {
      padding-right: 18px !important;
      padding-left: 18px !important;
    }

  }

  @media only screen and (max-width: 480px) {

    .mcnImageCardLeftImageContent,
    .mcnImageCardRightImageContent {
      padding-right: 18px !important;
      padding-bottom: 0 !important;
      padding-left: 18px !important;
    }

  }

  @media only screen and (max-width: 480px) {
    .mcpreview-image-uploader {
      display: none !important;
      width: 100% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1 {
      font-size: 30px !important;
      line-height: 125% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2 {
      font-size: 26px !important;
      line-height: 125% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3 {
      font-size: 20px !important;
      line-height: 150% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4 {
      font-size: 18px !important;
      line-height: 150% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,
    .mcnBoxedTextContentContainer .mcnTextContent p {
      font-size: 14px !important;
      line-height: 150% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    .headerContainer .mcnTextContent,
    .headerContainer .mcnTextContent p {
      font-size: 16px !important;
      line-height: 150% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .bodyContainer .mcnTextContent,
    .bodyContainer .mcnTextContent p {
      font-size: 16px !important;
      line-height: 150% !important;
    }

  }

  @media only screen and (max-width: 480px) {

    /*
  @tab Mobile Styles
  @section Footer Text
  @tip Make the footer content text larger in size for better readability on small screens.
  */
    .footerContainer .mcnTextContent,
    .footerContainer .mcnTextContent p {
      font-size: 14px !important;
      line-height: 150% !important;
    }

  }
</style>


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
