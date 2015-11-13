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
    $first = $_POST['first'];
    $group = $_POST['group'];
    $row = $_POST['row'];
    $total = count($row);
    for ($i = 1; $i <= $total; $i++) {
    ${"term{$i}"} = $_POST['term'.$i];
    ${"BX_startpg{$i}"} =$_POST['BX_startpg'.$i];
	${"BX_startloc{$i}"} =$_POST['BX_startloc'.$i];			
	${"BX_endpg{$i}"} = $_POST['BX_endpg'.$i];
	${"BX_endloc{$i}"} = $_POST['BX_endloc'.$i];	
	${"index{$i}"} = array('term' => ${"term{$i}"}, 'startp' => ${"BX_startpg{$i}"}, 'startl' => ${"BX_startloc{$i}"}, 'endp' => ${"BX_endpg{$i}"}, 'endl' => ${"BX_endloc{$i}"});
   
}

if ($first == 'yes') {
echo file_put_contents ( '../index/test.xml', '<?xml-stylesheet type="text/xsl" href="../common/transform.xsl"?>'."\n".'<index xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../common/index.xsd">'."\n".'<indexGroup>'."\n",FILE_APPEND);
}

		for ($z=1; $z <= $total; $z++) {
		
		echo file_put_contents ( '../index/test.xml', 
		"\n".'<entry>'."\n".
		 '<term>'.${"term{$z}"}.'</term>'."\n".
		 '<finders>'."\n", FILE_APPEND);
		 
		        $va = (${"BX_startpg{$z}"});
				$vb = (${"BX_startloc{$z}"});
				$vc = (${"BX_endpg{$z}"});
				$vd = (${"BX_endloc{$z}"});
		 
		 foreach ($va as $a => $b){
		 
		 	$stchap = substr($vb[$a],0,1); 
			$hrefstrt = 'ch0'.$stchap.'.xhtml#p'.$vb[$a];
			$endchap = substr($vd[$a],0,1);
			$hrefend = 'ch0'.$endchap.'.xhtml#p'.$vd[$a];
	
			 $t = substr_count($vb[$a],'k');			
				      
				      if ($t == 1){
				      $kt = substr($vb[$a],2);
				      $hrefstrt = 'ch0'.$stchap.'.xhtml#'.$kt;
				      };
				      
			$t = substr_count($vb[$a],'h');
				      
				      if ($t == 1){
				      $kt = substr($vb[$a],2);
				      $hrefstrt = 'ch0'.$stchap.'.xhtml#'.$kt;
				      };
				      
		    $g = substr_count($vd[$a],'h');
				      
				      if ($g == 1){
				      $kt = substr($vd[$a],2);
				      $hrefend = 'ch0'.$endchap.'.xhtml#'.$kt;
				      };
				      
				  if ($vc[$a] == 0){
				      $hrefend = '';
				      };
		 
		 echo file_put_contents ('../index/test.xml', 
		 '<group>'."\n".'<start>'."\n".
		 '<paragraph>'.$hrefstrt.'</paragraph>'."\n".
		 '<page>'. $va[$a].'</page>'."\n".
		 '</start>'."\n".
		 '<end>'."\n".
		 '<paragraph>'.$hrefend.'</paragraph>'."\n".
		 '<page>'.$vc[$a].'</page>'."\n".
		 '</end>'."\n".'</group>'."\n", 
		 FILE_APPEND);
		   }
		
		  
		   echo file_put_contents ('../index/test.xml', '</finders>'."\n".'</entry>'."\n", FILE_APPEND); }
		 
		  echo file_put_contents ('../index/test.xml', '</indexGroup>'."\n".'</index>', FILE_APPEND);
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
				<th>Start Location</th>
				<th>End Page</th>
				<th>End Location</th>
				</tr>
				<?php foreach($vara as $a => $b){ ?>
				<?php $stch = substr($varb[$a],0,1); 
				      $hrefs = 'ch0'.$stch.'.xhtml#p'.$varb[$a];
				      $endch = substr($vard[$a],0,1);
				      $hrefe = 'ch0'.$endch.'.xhtml#p'.$vard[$a];
				      
				      $t = substr_count($varb[$a],'k');			
				      
				      if ($t == 1){
				      $kt = substr($varb[$a],2);
				      $hrefs = 'ch0'.$stch.'.xhtml#'.$kt;
				      };
				      
				         $t = substr_count($varb[$a],'h');
				      
				      if ($t == 1){
				      $kt = substr($varb[$a],2);
				      $hrefs = 'ch0'.$stch.'.xhtml#'.$kt;
				      };
				      
				      			      
				         $g = substr_count($vard[$a],'h');
				      
				      if ($g == 1){
				      $kt = substr($vard[$a],2);
				      $hrefe = 'ch0'.$endch.'.xhtml#'.$kt;
				      };
				      
				      if ($varc[$a] == 0){
				      $kt = substr($varb[$a],2);
				      $hrefe = '';
				      };
				     
				?>
				
				<tr>
							<p>
								<td></td>
								<td>
									
									<?php echo '<input type="text" readonly="readonly" method="POST" name="BX_startpg'.$x.'[]" value="'.$vara[$a].'">'?>
								</td>
								<td>
									
									<input type="text" readonly="readonly" method="POST" class="small"  name="BX_startloc<?php echo $x; ?>[]" value="<?php echo $hrefs; ?>">
								</td>
								<td>
									
									<input type="text" readonly="readonly" method="POST" name="BX_endpg<?php echo $x; ?>[]" value="<?php echo $varc[$a]; ?>">
								</td>
								<td>
							
									<input type="text" readonly="readonly" method="POST" name="BX_endloc<?php echo $x; ?>[]" value="<?php echo $hrefe; ?>">
								</td>
							</p>
						</tr>
					<?php } } ?>
					</tbody>
			
				</table>
				
			</fieldset>
			<div class="clear"></div>
           <fieldset>
           
           
        <!--<label> Write this index to the file? </label>
        <input type="submit" />-->
        <a href="../index/test.xml">review XML <a/></br>
        <a href="../index.html">Continue the Index</a>
    </fieldset>
    </form>
    </body>
    </hmtl>