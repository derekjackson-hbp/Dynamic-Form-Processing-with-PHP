<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
		<script type="text/javascript" src="js/script.js"></script> 
    </head>
    <body>    
        <form action="process.php" class="register" method="POST">
            <h1>Index</h1>
			<fieldset class="row1">
                <legend>Index Group A</legend>
			    <select name="group">
			        <option selected="selected">A</option>
			    </select>
			</fieldset>
        	<table id="terms" class="form">
        		
        		
        			<tbody>
        				<tr>
        					<td><p id="rowC">
        					</label></p>entry No.<br />
        		<input name="entry1" required="required" value="1" style="width:14px"/>
        					</p></td>
        					<td>
        	<fieldset class="row1">
        		
        		<p><label>Index Term
        		</label></p>
        		<input name="term1" required="required" type="text"/>
        		<p id="rowC"></p>
        		
                <p>
					
                    
					<label>Does this term have a sub group?</label>
                    <label>no</label>
                    <input name="hasSubGroup" id="no" type="radio"></input>
                    <label>yes</label>
                    <input name="hasSubGroup" id="yes" type="radio"></input>
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
       		<table id="dataTable" class="form" border="1"><tbody><tr><td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td><td><label>Start Page</label><input type="text" required="required" name="BX_startpg[]"/></td><td><label for="BX_startloc">Start Paragraph</label><input type="text" required="required" name="BX_startloc[]"/></td><td><label for="BX_endpg">End Page</label><input id="BX_endpg" name="BX_gender[]" required="required" type="text"></input></td><td><label for="BX_endloc">End Paragraph</label><input id="BX_endloc" name="BX_endloc[]" required="required" type="text"></input></td></tr></tbody></table>
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





