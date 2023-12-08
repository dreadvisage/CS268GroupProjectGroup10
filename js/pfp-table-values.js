PFP_PATHS = [
    "images/pfp/pfp1.jpg",
    "images/pfp/pfp2.jpg",
    "images/pfp/pfp3.jpg",
    "images/pfp/pfp4.jpg",
    "images/pfp/pfp5.jpg",
    "images/pfp/pfp6.jpg",
    "images/pfp/pfp7.jpg",
    "images/pfp/pfp8.jpg",
    "images/pfp/pfp9.jpg",
];

function loadPfpTableValues(numCols, numDirsUp) {
    // Number of links per row 
    let numPerRow = Math.ceil(PFP_PATHS.length / numCols);

    let counter = 0;
    const table = document.getElementsByClassName("image-table")[0];
    for (var i = 0; i < numPerRow; ++i) { 
        const row = document.createElement("tr");
        table.appendChild(row);

        for (var j = 0; j < numCols; ++j) {
            // Tests if `PFP_PATHS[counter]` exists. If it doesn't exist, then we skip it. 
            // This should only happen if the final column isn't completely fill out.
            if (typeof PFP_PATHS[counter] === 'undefined') {
                continue;
            }

            const col = document.createElement("td");
            row.appendChild(col);

            const imageInput = document.createElement("input");
            imageInput.type = "image";
            imageInput.src = getDirsUp(numDirsUp) + PFP_PATHS[counter];

            // This needs to be defined outside so that the function can capture the value
            // at runtime
            const path = PFP_PATHS[counter];
            imageInput.addEventListener("click", () => {
                requestSetPfp(path);
            });
            col.appendChild(imageInput);


            ++counter;
        }
    }
}

function getDirsUp(numDirsUp) {
    var dirs_up = "";
    for (var i = 0; i < numDirsUp; ++i) {
        dirs_up += "../";
    }
    return dirs_up;
}

/*************************************
 *         ALL BELOW IS AJAX         *
 *************************************/

let httpRequest;
function requestSetPfp(path) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    // What to do when the ready state changes.
    // We use it specifically when the XMLHttpRequest is DONE
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                // If everything is good, we reload the page
                // to update the pfp
                location.reload();
            } else {
                alert("There was a problem with the request.");
            }
        }
    };
    // Always send by POST. 
    httpRequest.open("POST", "db/update-pfp.php");
    // Needed to send url parameters
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );
    // Backticks mean it will attempt to execute the contents as a shell command.
    // Use of the backtick operator is identical to shell_exec()
    httpRequest.send(`path=${encodeURIComponent(path)}`);
}

