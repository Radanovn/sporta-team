<?php
/*

  type: layout

  name: Sporta news page form

  description: Sporta

 */
?>
<form class="form-widget-subscribe needs-validation" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post" novalidate>
    <?php print csrf_form() ?>
    <module type="custom_fields"/>
    <module type="btn" button_action="submit" template="sporta-buttons" button_style="Red" button_text="SCHRIJF IN">
</form>
