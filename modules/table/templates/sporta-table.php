<?php
/*

type: layout

name: Sporta table

description: Sporta table template

*/
?>
<script>

mw.moduleJS('<?php print module_url(); ?>js/table.js');

$(document).ready(function () {
	var foundData = false;
    <?php if(!empty($tablehtml)) { ?>
    	foundData = true;
    <?php } elseif(!empty($json)) { ?>
        // -- Depricated start --
	try {
	  var json = <?php print htmlspecialchars_decode($json);?>;
	  var jdata = json.tabledata;
	  var tableId = '<?php print $params['id'];?>';
	  $("#"+tableId+" thead").children().remove();
	  $("#"+tableId+" tbody").children().remove();
	  buildTable(tableId,jdata);
	  foundData = true;
	} catch (e) {
	  console.log('No json data found');
	}
        // -- Depricated end --
	<?php } ?>
	if(foundData==false){
		    $('.modtable > #<?php print $params['id']; ?> > tbody > tr > td').eq(0).text('No data found');
            //$('.r1c1').text('Data not found');
	}
});
</script>

<div class="wrap-table table-responsive">
    <?php
    if(!empty($tablehtml)) {
    	print $tablehtml;
    } else {
    ?>
    <table id="<?php print $params['id']; ?>" class="table text-center">
		<thead>
			<tr>
				<th scope="col">Column</th>
				<th scope="col">Column</th>
				<th scope="col">Column</th>
				<th scope="col">Column</th>
				<th scope="col">Column</th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
            </tr>
            <tr>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
            </tr>
            <tr>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
            </tr>
            <tr>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
            </tr>
            <tr>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
                <td>Text</td>
            </tr>
		</tbody>
    </table>
    <?php } ?>
</div>
