<?php
$style = get_option('button_style');
$action = get_option('button_action', $params['id']);
$url = get_option('url', $params['id']);
$popupcontent = get_option('popupcontent', $params['id']);
$text = get_option('text', $params['id']);
$description = get_option('description', $params['id']);

$url_blank = get_option('url_blank', $params['id']);
?>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="control-label d-block"><?php _e("Color"); ?></label>
            <small class="text-muted d-block mb-3"><?php _e('Choose your button color from the dropdown.');?></small>
            <select class="mw_option_field selectpicker" data-width="100%" name="button_style">
                <option <?php if ($style == 'btn btn-animate'): ?>selected<?php endif; ?> value="btn btn-animate"><?php _e("Default"); ?></option>
                <option <?php if ($style == 'Clean'): ?>selected<?php endif; ?> value=""><?php _e("Clean"); ?></option>
                <option <?php if ($style == 'footer__menu-link'): ?>selected<?php endif; ?> value="footer__menu-link"><?php _e("footer menu link"); ?></option>
                <option <?php if ($style == 'st-email'): ?>selected<?php endif; ?> value="st-email"><?php _e("footer link email"); ?></option>
                <option <?php if ($style == 'link-email'): ?>selected<?php endif; ?> value="link-email"><?php _e("contacts link email"); ?></option>
                <option <?php if ($style == 'link-phone'): ?>selected<?php endif; ?> value="link-phone"><?php _e("contacts link phone"); ?></option>
                <option <?php if ($style == 'btn btn-animate btn-red'): ?>selected<?php endif; ?> value="btn btn-animate btn-red"><?php _e("Red"); ?></option>
                <option <?php if ($style == 'btn btn-animate btn-small'): ?>selected<?php endif; ?> value="btn btn-animate btn-small"><?php _e("Small"); ?></option>
                <option <?php if ($style == 'btn btn-animate btn-green'): ?>selected<?php endif; ?> value="btn btn-animate btn-green"><?php _e("Green"); ?></option>
                <option <?php if ($style == 'card-info__link-contact'): ?>selected<?php endif; ?> value="card-info__link-contact"><?php _e("Link contact"); ?></option>
            </select>
        </div>
    </div>
</div>
