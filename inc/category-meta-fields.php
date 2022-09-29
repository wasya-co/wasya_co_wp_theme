<?

function wco_category_hero($term) {
  if (current_filter() == 'category_edit_form_fields') {
    $wco_hero_url = get_term_meta( $term->term_id, 'wco_hero_url', true );
    ?>
      <tr class="form-field">
        <th valign="top" scope="row"><label for="wco_hero_url">wco_hero_url</label></th>
        <td>
          <input type="text" size="40" value="<?= $wco_hero_url ?>" name="wco_hero_url" ><br />
          <span class="description">wco_hero_url</span>
        </td>
      </tr>
    <?php
  } elseif (current_filter() == 'category_add_form_fields') {
    ?>
      <div class="form-field">
        <label for="wco_hero_url">wco_hero_url</label>
        <input type="text" size="40" value="" name="wco_hero_url">
        <p class="description">wco_hero_url</p>
      </div>
    <?php
  }
}
add_action('category_edit_form_fields', 'wco_category_hero');

function wco_save_category_hero($term_id) {
  if ( isset( $_REQUEST['wco_hero_url'] ) ) {
    update_term_meta( $term_id, 'wco_hero_url', $_REQUEST['wco_hero_url'] );
  }
}
add_action('edited_category', 'wco_save_category_hero');
add_action('create_category', 'wco_save_category_hero');
