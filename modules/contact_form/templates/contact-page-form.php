<?php
/*

  type: layout

  name: Sporta newsletter

  description: Sporta

 */
?>
<form class="contact-page-form needs-validation" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post" novalidate>
    <?php print csrf_form() ?>
    <module type="custom_fields" template="bootstrap4" default-fields="Your Name[type=text,field_size=6,show_placeholder=true],Voornaamm[type=text,field_size=6,show_placeholder=true],Your.email@domain.com[type=email,field_size=6,show_placeholder=true],Telefonnummer[type=phone, field_size=6, show_placeholder=true],I have question about[type=dropdown,field_size=12,show_placeholder=true],Beoefende sporttakken[type=textarea,field_size=12,show_placeholder=true],Ja ik wil op de hoogte gehouden worden via de nieuwsbrief[type=checkbox,field_size=12,show_placeholder=true]"/>
    <module type="btn" button_action="submit" class="cloneable nodrop" template="sporta-buttons" button_style="btn btn-animate btn-red" button_text="Versturen">

        <div style="display: none" class="message-sent  " id="msg<?php print $form_id ?>">
            <span class="message-sent-icon message-sent-icon-orange"></span>
        </div>
</form>
