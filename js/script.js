/**
 * Projet Name : Dynamic Form Processing with PHP
 * URL: http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Tech Stream
 * http://techstream.org
 */



function addterm(tableID) {
   
   
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
					var counting = rowCount;
					counting++;
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		var newcell = row.insertCell(0);
		newcell.innerHTML = rowCount + 1;
		//for(var i=1; i<(colCount-2); i++) {
			var newcell = row.insertCell(1);
			newcell.innerHTML = table.rows[0].cells[1].innerHTML;
        	
        	var stra = '<fieldset><legend>page and location</legend><input type="button" value="Add Location" onClick="addRow(\'dataTable';
        	var strb = counting;
        	var strc = '\')"/><input type="button" value="Remove Location" onClick="deleteRow(\'dataTable';
        	var strd = '\')"/><p>(All actions apply only to entries with check marked check boxes only.)</p></fieldset>';
        	var strg = stra.concat(strb,strc,strb,strd)
        	var newcell = row.insertCell(2);
			newcell.innerHTML = strg;
        	
        	
        	var str1 = '<fieldset><table id="dataTable';
        	var str2 = counting;
        	var str3 = '" class="form" border="1"><tbody><tr><td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td><td><label>Start Page</label><input type="text" required="required" name="BX_startpg[]"/></td><td><label for="BX_startloc">Start Paragraph</label><input type="text" required="required" name="BX_startloc[]"/></td><td><label for="BX_endpg">End Page</label><input id="BX_endpg" name="BX_endpg[]" required="required" type="text"></input></td><td><label for="BX_endloc">End Paragraph</label><input id="BX_endloc" name="BX_endloc[]" required="required" type="text"></input></td></tr></tbody></table></fieldset>';
        	var all= str1.concat(str2,str3);
        	var newcell = row.insertCell(3);
        	newcell.innerHTML = all; 
        	//newcell.innerHTML = '<fieldset><table id="dataTable'+counting'" class="form" border="1"><tbody><tr><td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td><td><label>Start Page</label><input type="text" required="required" name="BX_startpg[]"/></td><td><label for="BX_startloc">Start Paragraph</label><input type="text" required="required" name="BX_startloc[]"/></td><td><label for="BX_endpg">End Page</label><input id="BX_endpg" name="BX_endpg[]" required="required" type="text"></input></td><td><label for="BX_endloc">End Paragraph</label><input id="BX_endloc" name="BX_endloc[]" required="required" type="text"></input></td></tr></tbody></table></fieldset>';
	}
			   
	
	 	
function removeTerm(tableID) {
var table = document.getElementById(tableID);
var rowCount = table.rows.length;
var entry = 0;
var entry = prompt("which entry?");
if (entry != 0 && entry<=rowCount) {
    var i = entry - 1;
    table.deleteRow(i);
}else{
    alert ("Not a valid entry");
}

		}

function addRow(tableID) {

	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 50){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum Passenger per ticket is 50.");
			   
	}
}


function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) { 						// limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}








