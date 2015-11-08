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

echo file_put_contents ( 'test_'.$group.'.txt', '<section group="'.$group.'">'."\n",FILE_APPEND);

		for ($z=1; $z <= $total; $z++) {
		
		echo file_put_contents ( 'test_'.$group.'.txt', 
		"\n".'<entry>'."\n".
		 '<term>'.${"term{$z}"}.'</term>'."\n".
		 '<finders>'."\n", FILE_APPEND);
		 
		        $va = (${"BX_startpg{$z}"});
				$vb = (${"BX_startloc{$z}"});
				$vc = (${"BX_endpg{$z}"});
				$vd = (${"BX_endloc{$z}"});
		 
		 foreach ($va as $a => $b){
		 
		 echo file_put_contents ('test_'.$group.'.txt', 
		 '<group>'."\n".'<start>'."\n".
		 '<paragraph>'.$vb[$a].'</paragraph>'."\n".
		 '<page>'. $va[$a].'</page>'."\n".
		 '</start>'."\n".
		 '<end>'."\n".
		 '<paragraph>'.$vd[$a].'</paragraph>'."\n".
		 '<page>'.$vc[$a].'</page>'."\n".
		 '</end>'."\n".'</group>'."\n", 
		 FILE_APPEND);
		   }
		
		  
		   echo file_put_contents ('test_'.$group.'.txt', '</finders>'."\n".'</entry>'."\n", FILE_APPEND); }
		 
		  echo file_put_contents ('test_'.$group.'.txt', '</section>'."\n", FILE_APPEND);
		  ?>				
		
		}

		 ?>

<form method="post" action="write.php">
<fieldset class="row1">
			
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
        <a target="blank" class="submit" href=<?php echo '"test_'.$group.'.txt" type="button">' ?> review .txt XML <a/>
        
    </fieldset>
    </form>
    </body>
    </hmtl>