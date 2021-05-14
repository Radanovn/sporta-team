<?php

/*

type: layout

name: No result search

description: No result search

*/

?>
<script>mw.moduleCSS("<?php print modules_url(); ?>search/search.css"); </script>
<form class="d-flex mb-0 search-form">

    <div class="mw-search mw-search-default" id="search_box_holder_<?php print $params['id'] ?>">
        <div class="input-group">

                <input type="text"
                       id="search_field_<?php print $params['id'] ?>"
                       class="form-control border-top-0 border-left-0 border-right-0 bg-transparent border-bottom"


                       onkeyup="mw.url.windowHashParam('keyword<?php print $seach_prefix ?>', this.value);"

                       placeholder="Search..."/>
            <span class="input-group-append">
                <button type="submit" class="btn border-bottom btn-search" onclick="mw.url.windowHashParam('keyword<?php print $seach_prefix ?>', document.getElementById('search_field_<?php print $params['id'] ?>').value);">
                    <img class="mb-0" src="<?php print template_url(); ?>modules/layouts/svg/no-result/skin-2.svg">
                </button>
            </span>

        </div>
        <div class="mw-search-results" id="search_results_holder_<?php print $params['id'] ?>"></div>
    </div>
</form>

<script>
    $(document).ready(function () {

        mw.on.hashParam("keyword<?php print $seach_prefix ?>", function (pval) {
            mw.$("#search_box_holder_<?php  print $params['id'] ?>").addClass("loading");
            var key = pval;
            if (key != '') {
                var holder = mw.$('#search_results_holder_<?php  print $params['id'] ?>');
                mw.search(key, holder, {
                    done: function () {
                        mw.$("#search_box_holder_<?php  print $params['id'] ?>").removeClass("loading");
                    }
                });
            } else {
                mw.$('#search_results_holder_<?php  print $params['id'] ?>').hide();
            }
        });


        mw.$("#search_field_<?php  print $params['id'] ?>").on("keyup", function (e) {
            if (e.keyCode == 13) {
                mw.url.windowHashParam('keyword<?php print $seach_prefix ?>', this.value);
            }
        });

        var s = mw.url.windowHashParam("keyword<?php print $seach_prefix ?>");
        if (!!s) {
            document.getElementById('search_field_<?php  print $params['id'] ?>').value = decodeURIComponent(s);
        }

    });
</script>
