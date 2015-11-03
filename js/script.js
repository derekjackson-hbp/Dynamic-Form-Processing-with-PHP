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
		
		var str10 = '</label></p>entry No.<br /><input name="row[]" required="required" value="'+counting+'" style="width:14px"/>';
		var newcell = row.insertCell(0);
		newcell.innerHTML = str10;
		
			
        var astr = '<p><label>Index Term</label></p><input name="term';
		var	bstr = counting; 
		var cstr ='" required="required" type="text"/><p id="rowC"></p>';
		var gstr = astr.concat(bstr,cstr);
		var newcell = row.insertCell(1);
			newcell.innerHTML = gstr; 
        	
        	var stra = '<fieldset><legend>page and location</legend><input type="button" value="Add Location" onClick="addRow(\'dataTable';
        	var strb = counting;
        	var strc = '\')"/><input type="button" value="Remove Location" onClick="deleteRow(\'dataTable';
        	var strd = '\')"/><p>(All actions apply only to entries with check marked check boxes only.)</p></fieldset>';
        	var strg = stra.concat(strb,strc,strb,strd);
        	var newcell = row.insertCell(2);
			newcell.innerHTML = strg;
        	
        	
        	var str1 = '<fieldset><table id="dataTable';
        	var str2 = counting;
        	var str3 = '" class="form" border="1"><tbody><tr><td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td><td><label>Start Page</label><input type="text" required="required" name="BX_startpg'+counting+'[]"/></td><td><label for="BX_startloc'+counting+'">Start Paragraph</label><input type="text" required="required" name="BX_startloc'+counting+'[]"/></td><td><label for="BX_endpg'+counting+'">End Page</label><input id="BX_endpg'+counting+'" name="BX_endpg'+counting+'[]" required="required" type="text"></input></td><td><label for="BX_endloc'+counting+'">End Paragraph</label><input id="BX_endloc'+counting+'" name="BX_endloc'+counting+'[]" required="required" type="text"></input></td></tr></tbody></table></fieldset>';
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
								
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	
}

	/*
	 * OLD CODE
	 var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
					var i = rowCount;
					i++;
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
							
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		var aa = '<input type="checkbox" required="required" name="chk[]" checked="checked" />'
		var newcell = row.insertCell(0);
		
		newcell.innerHTML = aa
		
		var a1 = '<label>Start Page</label><input type="text" required="required" name="'
		var a2 = i;
		var a3 = 'BX_startpg[]"/>';
		var a4 = a1.concat(a2,a3);
		var newcell = row.insertCell(1);
		newcell.innerHTML = a4;
		
		var b1 = '<label for="';
		var b2 = 'BX_startloc">Start Paragraph</label><input type="text" required="required" name="';
		var b3 = 'BX_startloc[]"/>';
		var b4 = b1.concat(a2,b2,a2,b3);
		var newcell = row.insertCell(2);
		newcell.innerHTML = b4;
		
		var c1 = '<label for="';
		var c2 = 'BX_endpg">End Page</label><input id="';
		var c3 = 'BX_endpg" name="';
		var c4 = 'BX_gender[]" required="required" type="text"></input>';
		var c5 = c1.concat(a2,c2,a2,c3,a2,c4);
		var newcell = row.insertCell(3);
		newcell.innerHTML = c5;
		
		var d1 = '<label for="';
		var d2 = 'BX_endloc">End Paragraph</label><input id="';
		var d3 = 'BX_endloc" name="';
		var d4 = 'BX_endloc[]" required="required" type="text"></input>';
		var d5 = d1.concat(a2,d2,a2,d3,a2,d4);
		var newcell = row.insertCell(4);
		newcell.innerHTML = d5;

			   
	*/



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








