<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="" class="register">
            <h1>YouAreBUS Ticket Reservation</h1>
			<?php if(isset($_POST)==true && empty($_POST)==false): 
				$chkbox = $_POST['chk'];
				$BX_startpg=$_POST['BX_startpg'];
				$BX_startloc=$_POST['BX_startloc'];			
				$BX_endpg=$_POST['BX_endpg'];
				$BX_endloc=$_POST['BX_endloc'];	
				$group=$_POST['group'];
				$amount=$_POST['row'];
				
				
		/	for ($i=1, $i<3, $i++) {
			 $ {term{$i} = $_POST['term'.$i];
			 };
			 
			 echo '<p>';
			 echo $term1;
			
			 echo '</p>'; 

			
			
				
				
		 echo file_put_contents ( 'test_'.$group.'.txt', "\n".'<entry>'."\n".
		 '<term>'.$term1.'</term>'."\n".
		 '<finders>'."\n", FILE_APPEND); 
		 
		 $i = 0;
		 
		 do { 
		 
		 echo file_put_contents ('test_'.$group.'.txt', 
		 '<start>'."\n".
		 '<paragraph>'.$BX_startloc.'</paragraph>'."\n".
		 '<page>'.$BX_startpg[$i].'</page>'."\n".
		 '</start>'."\n".
		 '<end>'."\n".
		 '<paragraph>'.$BX_endloc.'</paragraph>'."\n".
		 '<page>'.$BX_endpg.'</page>'."\n".
		 '</end>'."\n".
		 '</finders>'."\n"		 
		  , FILE_APPEND);
		  $i++; }
		  while ($i<=$entries);
		  
		   echo file_put_contents ('test_'.$group.'.txt', '</entry>'."\n", FILE_APPEND);*/
		  ?>				
			
	<!--		
			
			<fieldset class="row1">
			<pre><?php print_r ($amount)?></pre>
                <legend>INDEX</legend>
				<p>
				<?php echo $entries ?>
				</p>
				<p>
                    <label>GROUP
                    </label>
                    <input name="bus" type="text" readonly="readonly" value="<?php echo $group ?>"/>
					
                </p>
                </fieldset>
                <fieldset> -->
                <?php 
                
                echo '<p>'
                echo $term1;
                echo $term2;
                echo '</p>'
                
                 ?>
               <!-- <p>
					<label>Entry Term
                    </label>
                    <input name="term" type="text" readonly="readonly" value="<?php echo $term1 ?>"/>
					 
                </p>
				<div class="clear"></div>
         
            
            <fieldset class="row2">
                <legend>Locations
                </legend>				
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_startpg as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									<label>Start Page</label>
									<input type="text" readonly="readonly" name="BX_startpg[$a]" value="<?php echo $BX_startpg[$a]; ?>">
								</td>
								<td>
									<label for="BX_startloc">Start Location</label>
									<input type="text" readonly="readonly" class="small"  name="BX_startloc[]" value="<?php echo $BX_startloc[$a]; ?>">
								</td>
								<td>
									<label for="BX_endpg">End Page</label>
									<input type="text" readonly="readonly" name="BX_endpg[]" value="<?php echo $BX_endpg[$a]; ?>">
								</td>
								<td>
									<label for="BX_endloc">End Location</label>
									<input type="text" readonly="readonly" name="BX_endloc[]" value="<?php echo $BX_endloc[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } ?>
					
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <?php } ?>
           </fieldset>
                <p>
					<a target="blank" class="submit" href=<?php echo '"test_'.$group.'.txt" type="button">' ?> review .txt XML <a/>
					<a class="submit" href=<?php echo '"index_'.$group.'.html" type="button">'?>next Term</a>
                </p>
				<div class="clear"></div>
            </fieldset>
		<?php else: ?>
		<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>
		<?php endif; ?>
		
		
			<div class="clear"></div>
        </form>-->
    </body> 
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9046834; 
var sc_invisible=1; 
var sc_security="ec55ba17"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>




