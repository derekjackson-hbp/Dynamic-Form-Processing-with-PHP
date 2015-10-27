
$r=0


<script>
function addterm(tableID) {
   
    var r= r + 1;
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
								
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		document.getElementById("rowC").innerHTML = i;
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
</script>