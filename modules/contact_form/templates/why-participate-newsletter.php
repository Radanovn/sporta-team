<?php
/*

  type: layout

  name: Why participate form

  description: Why participate form

 */
?>

<form class="form-information-package needs-validation edit" field="contact-form-whyParticipate" rel="global" id="<?php print $form_id ?>" novalidate data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form() ?>
    <module type="custom_fields" default-fields="Your.email@domain.com[type=email,field_size=12,show_placeholder=true]"/>

    <module type="btn" button_action="submit" class="cloneable nodrop" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="GET">
</form>


