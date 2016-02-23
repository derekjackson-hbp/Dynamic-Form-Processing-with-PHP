<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
		<script type="text/javascript" src="../js/script.js"></script> 
    </head>
    <body>    
        <form action="../common/process.php" class="register" method="POST">
            <h1>Index</h1>
			<fieldset class="row1">
                <legend>First Index Group</legend>
			    <select style="width:3em;" name="group">
			        <option selected="selected"> a </option>
			         <option style="margin-left:.5em;">b</option>
			          <option>c</option>
			           <option>d</option> 
			          <option>e</option>
			          <option>f</option>
			           <option>g</option>
			           <option>h</option>
			          <option>i</option>
			           <option>j</option>
			           <option>k</option>
			          <option>l</option>
			           <option>m</option>
			           <option>n</option>
			          <option>o</option>
			           <option>p</option>
			           <option>q</option>
			          <option>r</option>
			           <option>s</option>
			             <option>t</option>
			           <option>u</option>
			          <option>v</option>
			           <option>w</option>
			           <option>x</option>
			          <option>y</option>
			           <option>z</option>
			    </select>
			    
			    </select>
			</fieldset>
        	<table id="terms" class="form">
        		
        		
        			<tbody>
        				<tr>
        					<td><p id="rowC">
        					</p>entry No.<br />
        		<input name="row[]" required="required" value="1" style="width:14px"/>
        					</p></td>
        					<td>
        	<fieldset class="row1">
        		
        		<p><label>Index Term
        		</label></p>
        		<input name="term1" required="required" type="text" style="width:230px"/>
        		<p id="rowC"></p>
        		
                <p>
					
        <!--            
					<label>Does this term have a sub group?</label><br/>
					<label>no</label>
                    <input name="hasSubGroup" id="no" type="radio"></input>
                    <label>yes</label>
                    <input name="hasSubGroup" id="yes" type="radio"></input> -->
                </p>
        					
        				
				
            </fieldset>
        					
        				
        	<div class="clear"></div>
        					
        					</td>
        				
        					<td>
        					<fieldset>
				<legend>page and location</legend>
        						<input type="button" id="loc1" value="Add Location" onClick="addRow('dataTable')" /> 
        						<input type="button" value="Remove Location" onClick="deleteRow('dataTable')"/> 
        						<p>(All actions apply only to entries with check marked check boxes only.)</p>	
					
				
        					</fieldset>
       	</td>
        		<td>
      <fieldset>
       		<table id="dataTable" class="form" border="1"><tbody><tr><td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td><td><label>Start Page</label><input type="text" required="required" name="BX_startpg1[]"/></td><td><label for="BX_startloc1">Start Paragraph</label><input type="text" required="required" name="BX_startloc1[]"/></td><td><label for="BX_endpg1">End Page</label><input id="BX_endpg1" name="BX_endpg1[]" required="required" type="text"></input></td><td><label for="BX_endloc1">End Paragraph</label><input id="BX_endloc1" name="BX_endloc1[]" required="required" type="text"></input></td></tr></tbody></table>
        </fieldset>
        		
				<div class="clear"></div>
        		</td>
       </tr>
        			</tbody>
            </table>
            <fieldset>
        	<p>
        		<input type="button" value="Add term" onClick="addterm('terms')" /> 
        		<input type="button" value="Remove term" onClick="removeTerm('terms')"  /> 
        	</p>
        	</fieldset>
       
            <fieldset class="row4">
                <legend>Submitting</legend>
                <p class="agreement">
                    <input type="checkbox" value="" required="required"/>
                    <label>*  Ready to Submit</label>
                </p>
                
				
				<div class="clear"></div>
            </fieldset>
			<input class="submit" type="submit" value="Confirm &raquo;" />
			
			
			<div class="clear"></div>
        </form>
		
    </body>

</html>





