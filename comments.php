<?
/**
 * The template for displaying comments
**/

if ( post_password_required() ) {
  return;
}

$twenty_twenty_one_comment_count = get_comments_number();
$show_avatars = get_option( 'show_avatars' ) ? 'show-avatars' : '';
?>

<hr />
<div id="comments" class="comments-area default-max-width <?= $show_avatars; ?>" >

  <h2 class="comments-title">
    <? if ( '1' === $twenty_twenty_one_comment_count ) : ?>
      <? esc_html_e( '1 comment', 'twentytwentyone' ); ?>
    <? else : ?>
      <? printf(
        esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
        esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
      ); ?>
    <? endif; ?>
  </h2>

  <? comment_form( array(
    // 'title_reply'        => esc_html__( 'Leave a comment' ),
    // 'title_reply_before' => '<h2 class="comment-reply-title">',
    // 'title_reply_after'  => '</h2>',
  ) ); ?>

  <? if ( have_comments() ) : ?>

    <ol class="comment-list">
      <? wp_list_comments( array(
        'avatar_size' => 60,
        'style'       => 'ol',
        'short_ping'  => true,
      ) ); ?>
    </ol>

    <? the_comments_pagination( array(
      'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
      'mid_size'           => 0,
      'prev_text'          => sprintf(
        '%s <span class="nav-prev-text">%s</span>',
        is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
        esc_html__( 'Older comments', 'twentytwentyone' )
      ),
      'next_text'          => sprintf(
        '<span class="nav-next-text">%s</span> %s',
        esc_html__( 'Newer comments', 'twentytwentyone' ),
        is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
      ),
    ) ); ?>

    <? if ( ! comments_open() ) : ?>
      <p class="no-comments"><? esc_html_e( 'Comments are closed.' ); ?></p>
    <? endif; ?>
  <? endif; ?>

</div>
