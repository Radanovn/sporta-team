<?php
/*

  type: layout

  name: Why participate form

  description: Why participate form

 */
?>

<form class="form-information-package needs-validation" id="<?php print $form_id ?>" novalidate data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form() ?>
    <module type="custom_fields" template="bootstrap4" default-fields="Your.email@domain.com[type=email,field_size=12,show_placeholder=true]"/>
    <module type="captcha"/>

    <module type="btn" button_action="submit" class="cloneable nodrop" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="GET">


        <div style="display: none" class="message-sent" id="msg<?php print $form_id ?>">
            <span class="message-sent-icon message-sent-icon-orange"></span>
        </div>

</form>


