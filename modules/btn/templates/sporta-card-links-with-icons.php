<?php

/*

type: layout

name: Sporta card links with icons

description: Sporta template for cards link with icons

*/
?>

<?php if($action == 'submit'): ?>
    <button type="submit" id="<?php print $btn_id ?>" class="btn <?php print $style . ' ' . $size; ?>"><?php print $text; ?></button>
<?php else: ?>
    <a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
        print ' target="_blank" ';
    } ?> class="card-link link color-<?php print $style ;?>"
        <span><?php print $text; ?></span>
        <span class="link__arrow">
            <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.70711 0.370774C1.31658 -0.0197506 0.683417 -0.0197506 0.292893 0.370774C-0.0976315 0.761298 -0.0976314 1.39446 0.292893 1.78499L1.70711 0.370774ZM5 5.07788L5.70711 5.78499C5.89464 5.59745 6 5.3431 6 5.07788C6 4.81266 5.89464 4.55831 5.70711 4.37077L5 5.07788ZM0.292893 8.37077C-0.0976311 8.7613 -0.0976311 9.39446 0.292893 9.78499C0.683418 10.1755 1.31658 10.1755 1.70711 9.78499L0.292893 8.37077ZM0.292893 1.78499L4.29289 5.78499L5.70711 4.37077L1.70711 0.370774L0.292893 1.78499ZM4.29289 4.37077L0.292893 8.37077L1.70711 9.78499L5.70711 5.78499L4.29289 4.37077Z" fill="#000000"/>
            </svg>
        </span>
    </a>
<?php endif; ?>
