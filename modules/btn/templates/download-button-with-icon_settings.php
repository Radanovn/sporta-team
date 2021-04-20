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
                <option <?php if ($style == 'Red'): ?>selected<?php endif; ?> value="btn btn-animate btn-red"><?php _e("Red"); ?></option>
                <option <?php if ($style == 'Green'): ?>selected<?php endif; ?> value="btn btn-animate btn-green"><?php _e("Green"); ?></option>
            </select>
        </div>
    </div>
</div>
