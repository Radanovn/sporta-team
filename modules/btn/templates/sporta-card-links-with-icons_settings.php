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
                <option <?php if ($style == 'yellow'): ?>selected<?php endif; ?> value="yellow"><?php _e("Yellow"); ?></option>
                <option <?php if ($style == 'green'): ?>selected<?php endif; ?> value="green"><?php _e("Green"); ?></option>
                <option <?php if ($style == 'red'): ?>selected<?php endif; ?> value="red"><?php _e("Red"); ?></option>
                <option <?php if ($style == 'red text-decoration-none'): ?>selected<?php endif; ?> value="red text-decoration-none"><?php _e("About us Red"); ?></option>
                <option <?php if ($style == 'green text-decoration-none'): ?>selected<?php endif; ?> value="green text-decoration-none"><?php _e("About us Green"); ?></option>
            </select>
        </div>
    </div>
</div>
