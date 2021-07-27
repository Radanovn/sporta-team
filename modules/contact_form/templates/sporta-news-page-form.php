<?php
/*

  type: layout

  name: Sporta news page form

  description: Sporta

 */
?>
<form class="form-widget-subscribe needs-validation" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post" novalidate>
    <?php print csrf_form() ?>
    <module type="custom_fields" template="bootstrap4" default-fields="Firstname[type=text,field_size=12,show_placeholder=true],Lastname[type=text,field_size=12,show_placeholder=true],Your.email@domain.com[type=email,field_size=12,show_placeholder=true]"/>
    <module type="btn" button_action="submit" class="cloneable nodrop" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="SCHRIJF IN">


        <div style="display: none" class="message-sent" id="msg<?php print $form_id ?>">
            <span class="message-sent-icon message-sent-icon-orange"></span>
            <p><?php _e("Your Email was sent successfully"); ?> </p>
        </div>
</form>
