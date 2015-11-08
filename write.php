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
    $word = $_POST['term1'];
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


<fieldset class="row1">

<p> view text file </p>
<p><?php echo $word; ?></p>
			
                <legend>INDEX</legend>
                <h2 class="group"><?php echo $group; ?></h2>
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
								<?php echo $varx['term'];
				                echo '<br />';	?>
				                <input
				</td>
	           </tr>
	           <tr>
				<th><p><?php echo $term1;?></th>
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
									
									<input type="text" readonly="readonly" name="$vara[$a]" value="<?php echo $vara[$a]; ?>">
								</td>
								<td>
									
									<input type="text" readonly="readonly" class="small"  name="$varb[$a]" value="<?php echo $varb[$a]; ?>">
								</td>
								<td>
									
									<input type="text" readonly="readonly" name="$varc[$a]" value="<?php echo $varc[$a]; ?>">
								</td>
								<td>
							
									<input type="text" readonly="readonly" name="$vard[$a]" value="<?php echo $vard[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } } ?>
					</tbody>
			
				</p>
			</fieldset>
           
          
    
    </body>
    </hmtl>