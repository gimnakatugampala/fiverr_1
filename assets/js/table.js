// function addRow(tableID) {
//     var table = document.getElementById(tableID);
//     var rowCount = table.rows.length;
//     var row = table.insertRow(rowCount);
//     var colCount = table.rows[0].cells.length;



//     console.log(rowCount)
    
//     // for(var i=0; i<colCount; i++) {
//     //     var newRow = row.insertCell(i);
        

//     //     newRow.innerHTML = table.rows[1].cells[i].innerHTML;
//     //     newRow.childNodes[0].value = "";
//     // }
// }

function addRow(tableID) {

    var table = document.getElementById(tableID);

    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);

    console.log(row)
    console.log(rowCount)
    document.getElementById('rows_amount').value = rowCount;
    

    var cell1 = row.insertCell(0);
    var element1 = document.createElement("input");
    element1.type = "text";
    element1.name=`guest_name${rowCount}`;
    cell1.appendChild(element1);

    var cell2 = row.insertCell(1);
    var element2 = document.createElement("input");
    element2.type = "text";
    element2.name=`sign_guest${rowCount}`;
    cell2.appendChild(element2);


    var cell3 = row.insertCell(2);
    var element3 = document.createElement("input");
    element3.type = "text";
    element3.name = `id_guest${rowCount}`;
    cell3.appendChild(element3);

    var cell4 = row.insertCell(3);
    var element4 = document.createElement("input");
    element4.type = "text";
    element4.name = `relation_guest${rowCount}`;
    cell4.appendChild(element4);

    var cell5 = row.insertCell(4);
    var element5 = document.createElement("a");
    element5.type = "button";
    element5.value = "Delete";
    element5.className = "btn btn-danger";
    element5.setAttribute("onclick", "deleteRow(this)");

    var element6 = document.createElement("i");
    element6.className = "fa fa-trash-o fa-fw";
    element6.setAttribute("aria-hidden", true);

    element5.appendChild(element6)

    cell5.appendChild(element5);


}

function deleteRow(row) {
    var table = document.getElementById("data");
    var rowCount = table.rows.length;
    if (rowCount > 1) {
        var rowIndex = row.parentNode.parentNode.rowIndex;
        document.getElementById("data").deleteRow(rowIndex);
    }
    else {
        alert("Please specify at least one value.");
    }
}
