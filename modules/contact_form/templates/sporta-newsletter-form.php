<?php
/*

  type: layout

  name: Sporta newsletter

  description: Sporta

 */
?>
<form class="form-newsletter needs-validation" id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post" novalidate>
    <?php print csrf_form() ?>
    <module type="custom_fields"/>
    <module type="btn" button_action="submit" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Versturen">
</form>
