<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Index Summary</title>
    <style>
    td.term2 {
    font-weight: bold;
    font-size: 1.2em; 
    width: 40px;  
    }
    tr + td {
    width: 50px;
    }
    </style>
    </head>
    <body>
    <?php
  
    $group = $_POST['group'];
    $row = $_POST['row'];
    $total = count($row);
    for ($i = 1; $i <= $total; $i++) {
    ${"term{$i}"} = $_POST['term'.$i];
    ${"BX_startpg{$i}"} =$_POST['BX_startpg'.$i];
	${"BX_startloc{$i}"} =$_POST['BX_startloc'.$i];			
	${"BX_endpg{$i}"} = $_POST['BX_endpg'.$i];
	${"BX_endloc{$i}"} = $_POST['BX_endloc'.$i];	
	${"index{$i}"} = array ('term' => ${"term{$i}"}, 'startp' => ${"BX_startpg{$i}"}, 'startl' => ${"BX_startloc{$i}"}, 'endp' => ${"BX_endpg{$i}"}, 'endl' => ${"BX_endloc{$i}"});
   
}

?>

<form method="post" action="write.php">
<fieldset class="row1">
			
                <legend>INDEX</legend>
                <h2 class="group"><?php echo $group; ?></h2>
                <p>
                <?php echo '<input type="text" readonly="readonly" method="POST" name="'.$group.'" value="'.$group.'" />'?>
                </p>
				<p> Total Entries: 
				<?php echo $total ?>
				</p>
				<p>
				<?php
				for ($x = 1; $x <= $total; $x++) {
				$varx = ${"index{$x}"};
				$vara = (${"BX_startpg{$x}"});
				$varb = (${"BX_startloc{$x}"});
				$varc = (${"BX_endpg{$x}"});
				$vard = (${"BX_endloc{$x}"});
				
				
				
				?>
				<table>
				<tbody>
				
				<tr>
				
				<td class="term2">
				<p><label>Index Term
        		</label></p>
        		<?php echo '<input name="term'.$x.'" readonly="readonly"  required="required" type="text" value="'.${"term{$x}"}.'" method="POST"/>'
        		?>
        		<p id="rowC"></p>
        		
                <p>
				</td>
	           </tr>
	           <tr>
				<th></th>
				<th>Start Page</th>
				<th>Start Paragraph</th>
				<th>End Page</th>
				<th>End Paragraph</th>
				</tr>
				<?php foreach($vara as $a => $b){ ?>
				<tr>
							<p>
								<td></td>
								<td>
									
									<?php echo '<input type="text" readonly="readonly" method="POST" name="BX_startpg'.$x.'[]" value="'.$vara[$a].'">'?>
								</td>
								<td>
									
									<input type="text" readonly="readonly" method="POST" class="small"  name="BX_startloc<?php echo $x; ?>[]" value="<?php echo $varb[$a]; ?>">
								</td>
								<td>
									
									<input type="text" readonly="readonly" method="POST" name="BX_endpg<?php echo $x; ?>[]" value="<?php echo $varc[$a]; ?>">
								</td>
								<td>
							
									<input type="text" readonly="readonly" method="POST" name="BX_endloc<?php echo $x; ?>[]" value="<?php echo $vard[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } } ?>
					</tbody>
			
				</table>
				
			</fieldset>
			<div class="clear"></div>
           <fieldset>
           
        <label> Write this index to the file? </label>
        <input type="submit" />
        
        
    </fieldset>
    </form>
    </body>
    </hmtl>