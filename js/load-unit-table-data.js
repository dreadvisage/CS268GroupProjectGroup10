function loadUnitTableData() {
    var httpRequest = new XMLHttpRequest();
    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    httpRequest.onreadystatechange = function() {
        if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
            let unitTableData = JSON.parse(this.responseText);

            document.getElementById("total-points").innerHTML = "Total Points: " + unitTableData[1];

            // Table will exist in the html. We clear it because the user removing a row, requires us to 
            // reload the table
            let table = document.getElementById("unit-table");
            table.innerHTML = '';

            if (Array.isArray(unitTableData[0]) && unitTableData[0].length != 0) {

                // Assemble header values
                let tr = document.createElement("tr");
                let tdFaction = document.createElement("td");
                tdFaction.append(document.createTextNode("Faction:"));
                let tdUnitName = document.createElement("td");
                tdUnitName.append(document.createTextNode("Unit Name:"));
                let tdNumModels = document.createElement("td");
                tdNumModels.append(document.createTextNode("Num Models:"));
                let tdUnitPoints = document.createElement("td");
                tdUnitPoints.append(document.createTextNode("Unit Points:"));
                tr.append(tdFaction, tdUnitName, tdNumModels, tdUnitPoints);

                table.append(tr);

                // Assemble values from database
                for (let i = 0; i < unitTableData[0].length; ++i) {
                    let tr = document.createElement("tr");
    
                    let tdFaction = document.createElement("td");
                    tdFaction.append(document.createTextNode(unitTableData[0][i][1]));
        
        
                    let tdUnitName = document.createElement("td");
                    tdUnitName.append(document.createTextNode(unitTableData[0][i][2]));
        
        
                    let tdNumModels = document.createElement("td");
                    tdNumModels.append(document.createTextNode(unitTableData[0][i][3]));
        
        
                    let tdUnitPoints = document.createElement("td");
                    tdUnitPoints.append(document.createTextNode(unitTableData[0][i][4]));

                    let tdRemoveBtn = document.createElement("td");
                    let removeModelBtn = document.createElement("button");
                    tdRemoveBtn.append(removeModelBtn);
                    removeModelBtn.innerText = "➖";
                    removeModelBtn.addEventListener("click", () => {
                        // unitTableData[0][i][0] is the `UnitTableID` that indicates a unique row
                        requestDeleteUnitTableRowAndReload(unitTableData[0][i][0]);
                    });
    
                    
                    tr.append(tdFaction, tdUnitName, tdNumModels, tdUnitPoints, tdRemoveBtn);
                    table.append(tr);
                }
            }
        }
    }

    httpRequest.open("POST", "db/load-unit-table-data.php");
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );
    httpRequest.send();
}

function requestDeleteUnitTableRowAndReload(rowIndex) {
    var httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    // What to do when the ready state changes.
    // We use it specifically when the XMLHttpRequest is DONE
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                loadUnitTableData();
                // location.reload();
                // alert("Successfully added to unit table");
            } else {
                alert("There was a problem with the request.");
            }
        }
    };
    // Always send by POST. 
    httpRequest.open("POST", "db/remove-unit-table-row.php");
    // Needed to send url parameters
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );

    // Backticks mean it will attempt to execute the contents as a shell command.
    // Use of the backtick operator is identical to shell_exec().
    // You can separate multiple data values by inserting an ampersand (&) in between each value
    httpRequest.send(`rowindex=${encodeURIComponent(rowIndex)}`);
}

