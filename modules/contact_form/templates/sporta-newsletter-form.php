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

    <div class="form-row">
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Your name" required>
            <div class="invalid-feedback">Error text</div>
        </div>
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Voornaam*">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <input type="email" class="form-control" placeholder="Your.email@domain.com" required>
            <div class="invalid-feedback">Error text</div>
        </div>
        <div class="form-group col-sm-6">
            <input type="tel" class="form-control" placeholder="Telefoonnummer">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Naam club">
        </div>
        <div class="form-group col-sm-6">
            <input type="number" class="form-control" placeholder="Aantal leden">
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="1" placeholder="Beoefende sporttakken"></textarea>
    </div>
    <div class="form-group checkbox-wrap">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="check-newsletter">
            <label class="custom-control-label" for="check-newsletter">Ja, ik wil op de hoogte gehouden worden via de nieuwsbrief</label>
        </div>
    </div>
    <div class="text-center text-lg-left">
        <module type="btn" template="sporta-buttons" button_style="btn-red">
    </div>
</form>
