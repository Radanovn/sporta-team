<?php
/*

  type: layout

  name: Sporta newsletter

  description: Sporta

 */
?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Thank you</strong>!
</div>

<form class="form-newsletter needs-validation" id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post" novalidate>
    <?php print csrf_form() ?>
    <module type="custom_fields"/>
    <module type="btn" template="sporta-buttons" button_style="btn-red">
</form>
