<?php

/*

  type: layout

  name: default

  description: Default template


*/

?>
<?php
if ($json == false) {
    print lnotif(_e('Click to edit slider', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}
?>

<script>
    $(document).ready(function() {



    })
</script>

<?php
    $sldrid = 'heroSlider' . uniqid();
?>
<div id="<?php print $sldrid; ?>" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <?php
        $count = -1;
        foreach ($json as $key => $slide) :
            $count++;

            $edit_field_key = $key;
            if (isset($slide['id'])) {
                $edit_field_key = $slide['id'];
            }
        ?>
         <li data-target="#<?php print $sldrid; ?>" data-slide-to="<?php print $count; ?>" class="<?php print $count === 0 ? 'active' : ''; ?>"></li>
        <?php endforeach; ?>

    </ol>
    <div class="carousel-inner">
        <?php

        $count = -1;
        foreach ($json as $key => $slide) :
            $count++;
            $edit_field_key = $key;
            if (isset($slide['id'])) {
                $edit_field_key = $slide['id'];
            }
            $lastWordColor = isset($slide['lastwordcolor']) ? $slide['lastwordcolor'] : 'red';
            $bgcolor = isset($slide['bgcolor']) ? $slide['bgcolor'] : 'yellow';
            $title = isset($slide['title']) ? $slide['title'] : '';
            $lastword = isset($slide['lastword']) ? $slide['lastword'] : '';
            $image = (isset($slide['image']) and isset($slide['image'][0])) ? $slide['image'][0] : '#';
            $image2 = (isset($slide['image2']) and isset($slide['image2'][0])) ? $slide['image2'][0] : '#';
        ?>
        <div class="carousel-item <?php print $count === 0 ? 'active' : ''; ?>">
            <div class="row no-gutters">
                <div class="col-12 col-md-4 order-1 slide__text">
                    <h1 class="slide__text-title"><?php print $title; ?> <span class="text-<?php print $lastWordColor; ?>"><?php print $lastword; ?></span></h1>
                </div>
                <div class="col-12 col-md-8 order-0 order-md-1 slide__img">
                     <picture>
                        <source srcset="<?php print $image2; ?>" media="(max-width: 767px)">
                        <img src="<?php print $image; ?>" alt="" class="img-cover">
                    </picture>
                    <div class="slide__img-decor-left bg-<?php print $bgcolor; ?> d-none d-md-block"></div>
                    <div class="slide__img-decor-right d-none d-md-block"></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-next d-none d-md-flex" href="#<?php print $sldrid; ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


