/*
 *******************************************************
 * Unit Builder For Creating Units on the Points Pages *
 *******************************************************
*/

class UnitBuilder {
    static id = "";
    static faction = "";
    static counter = 0;

    // idk if there is a better way to do this.
    static optionalModelsBelongTo = "";
    static optionalModelsPending = [];

    // corresponding cancel btns and their notify texts for optional units
    static cancelBtnAndNotifyTextIds = [];

    constructor(unitName) {
        this.unitName = unitName;
        this.li = document.createElement("li");
        this.li.append(document.createTextNode(this.unitName));
        this.ul = document.createElement("ul");
        this.ul.className = "unit-type-list";
    }

    static setParentId(id) {
        UnitBuilder.id = id;
    }

    static setFaction(faction) {
        UnitBuilder.faction = faction;
    }

    static new(name) {
        return new UnitBuilder(name);
    }

    static addUnit(unitName, models, padding, points) {
        let li = document.createElement("li");
        li.append(document.createTextNode(unitName));
        let ul = document.createElement("ul");
        ul.className = "unit-type-list";

        let liContent = document.createElement("li");
        ul.append(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts ");
        liContent.append(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        let num = UnitBuilder.counter;
        let faction = UnitBuilder.faction;
        liButton.addEventListener("click", () => {
            clearIfNotBelongsTo(unitName);
            hideAllCancelBtnsAndClearNotifyTexts();
            requestInsertUnitIntoDatabase(faction, unitName, models, points);
            notifyTextMonitor("notifytext" + num);
        });
        liContent.append(liButton);

        let liNotifyText = document.createElement("p");
        liNotifyText.className = "notify-text";
        liNotifyText.id = "notifytext" + UnitBuilder.counter;
        ++UnitBuilder.counter;
        liContent.append(liNotifyText);

        var target = document.getElementById(UnitBuilder.id);
        target.append(li);
        target.append(ul);
    }

    model(models, padding, points) {
        let liContent = document.createElement("li");
        this.ul.append(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + " models" + createPadding(padding) + points + " pts ");
        liContent.append(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        let num = UnitBuilder.counter;
        let faction = UnitBuilder.faction;
        let unitName = this.unitName;
        liButton.addEventListener("click", () => {
            clearIfNotBelongsTo(unitName);
            hideAllCancelBtnsAndClearNotifyTexts();
            requestInsertUnitIntoDatabase(faction, unitName, models, points);
            notifyTextMonitor("notifytext" + num);
        });
        liContent.append(liButton);

        let liNotifyText = document.createElement("p");
        liNotifyText.className = "notify-text";
        liNotifyText.id = "notifytext" + UnitBuilder.counter;
        ++UnitBuilder.counter;
        liContent.append(liNotifyText);

        return this;
    }

    modelCustom(models, padding, points, isOptionalUnit) {
        let liContent = document.createElement("li");
        this.ul.append(liContent);

        const createPadding = function(padding) {
            let paddingStr = "";
            for (var i = 0; i < padding; ++i) {
                paddingStr += '.';
            }
            return paddingStr;
        };
        let liText = document.createTextNode(models + createPadding(padding) + points + " pts ");
        liContent.append(liText);

        let liButton = document.createElement("button");
        liButton.type = "submit";
        liButton.innerText = "➕";
        let num = UnitBuilder.counter;
        let faction = UnitBuilder.faction;
        let counter = UnitBuilder.counter;
        let unitName = this.unitName;
        if (isOptionalUnit) {
            // only for optional units
            liButton.addEventListener("click", () => {
                clearIfNotBelongsTo(unitName);
                UnitBuilder.optionalModelsBelongTo = unitName;
                UnitBuilder.optionalModelsPending.push([faction, unitName, models, points]);
                document.getElementById("cancelBtn" + counter).style.display = "inline";

                let count = countModelsFromPending(models);
                document.getElementById("notifytext" + num).innerText = "x" + count + " pending optional units";
            });
        } else {
            liButton.addEventListener("click", () => {
                clearIfNotBelongsTo(unitName);
                hideAllCancelBtnsAndClearNotifyTexts();
                requestInsertUnitIntoDatabase(faction, unitName, models, points);
                notifyTextMonitor("notifytext" + num);
            });
        }
        liContent.append(liButton);

        if (isOptionalUnit) {
            let liCancelButton = document.createElement("button");
            liCancelButton.className = "cancelBtn";
            liCancelButton.id = "cancelBtn" + UnitBuilder.counter;
            liCancelButton.type = "submit";
            liCancelButton.innerText = "➖";
            liCancelButton.addEventListener("click", () => {
                removeSingleModelFromPending(models);
                let count = countModelsFromPending(models);
                if (count == 0) {
                    document.getElementById("cancelBtn" + counter).style.display = "none";
                    document.getElementById("notifytext" + num).innerText = '';
                } else {
                    document.getElementById("notifytext" + num).innerText = "x" + count + " pending optional units";
                }
            });

            UnitBuilder.cancelBtnAndNotifyTextIds.push(["cancelBtn" + UnitBuilder.counter, "notifytext" + num]);

            liContent.append(liCancelButton);
        }
        

        let liNotifyText = document.createElement("p");
        liNotifyText.className = "notify-text";
        liNotifyText.id = "notifytext" + UnitBuilder.counter;
        ++UnitBuilder.counter;
        liContent.append(liNotifyText);

        return this;
    }

    add() {
        var target = document.getElementById(UnitBuilder.id);
        target.append(this.li);
        target.append(this.ul);
    }
}

function clearIfNotBelongsTo(unitName) {
    /* if not empty and if the current pending units no don't belong in the same model group
    (from what we currently have on the website, we don't have optional units that belong to 
    different model groups as part of the same faction, so we can't pend different optional units 
    from different models groups) */
    if (UnitBuilder.optionalModelsPending.length && UnitBuilder.optionalModelsBelongTo != unitName) {
        UnitBuilder.optionalModelsPending = [];
    }
}

function hideAllCancelBtnsAndClearNotifyTexts() {
    for (let i = 0; i < UnitBuilder.cancelBtnAndNotifyTextIds.length; ++i) {
        document.getElementById(UnitBuilder.cancelBtnAndNotifyTextIds[i][0]).style.display = "none";
        document.getElementById(UnitBuilder.cancelBtnAndNotifyTextIds[i][1]).innerText = '';
    }
}

function removeSingleModelFromPending(models) {
    let firstIndex = -1;
    for (let i = 0; i < UnitBuilder.optionalModelsPending.length; ++i) {
        let pending = UnitBuilder.optionalModelsPending[i][2];
        if (pending == models) {
            firstIndex = i;
            break;
        }
    }

    if (firstIndex == -1) {
        throw new Error("Failed to find the first index of model from pending");
    } 

    UnitBuilder.optionalModelsPending.splice(firstIndex, 1);
}

function countModelsFromPending(models) {
    let count = 0;
    for (let i = 0; i < UnitBuilder.optionalModelsPending.length; ++i) {
        let pending = UnitBuilder.optionalModelsPending[i][2];
        if (pending == models) {
            ++count;
        }
    }

    return count;
}


/* Insert raw html values when executing scripts. Because scripts are executed after
 * the regular HTML is loaded, if you want to insert something in between other dynamically
 * generated HTML elements, you need to do it through Javascript when executing a script. */
function insertRawHtml(id, html) {
    /* We need to create a template here because certain HTML tags get stripped
    when appending to innerHTML with certain elements. By creating a template,
    we can force the tags to be a part of something, even if they may or may
    not belong there. Basically, in my testing, this without templates, it 
    failed to add any event listeners before this was added. Then everything worked
    fine after. Weird. See the following link:
    https://codingshower.com/add-html-string-to-dom-nodes/
    */
    const template = document.createElement("template");
    template.innerHTML += html;
    document.getElementById(id).append(template.content);
}



/*
 ************************************************************
 *               Points Click Counter Section               *
 ************************************************************
 This section controls the little popup when you 
 click a button on the points page
 */

/* Stores a the timeout monitor that will execute
 * a function if/when the timeout ends */
var notifyTextTimeout;
// Stores the previous notify text that was clicked
var prevNotifyText;
// Stores the current notify text that was clicked
var currentNotifyText;
// Always start the count of a button press at one
var notifyCounter = 1;
function notifyTextMonitor(id) {
    if (currentNotifyText == null) {
        currentNotifyText = document.getElementById(id);
    } else {
        // Set the prev text to the "last" current text
        prevNotifyText = currentNotifyText;
        // Set the current text to the notify text associated with the element that was triggered
        currentNotifyText = document.getElementById(id);
        // Successive clicks are incremented by one
        ++notifyCounter;
        /* If the prev button press was not the same as this button press,
         * then clear the previous notify text and reset the counter */
        if (prevNotifyText != currentNotifyText) {
            prevNotifyText.innerHTML = '';
            notifyCounter = 1;
        }
    }
    // Set the current notify text to be the relevant values
    currentNotifyText.innerText = "Added Unit x" + notifyCounter;

    /* Regardless of the element that was clicked, cancel the function that was to be 
     * executed after the timeout we had set before. Meaning that we cancel timeout, 
     * and reset the timeout timer to do the same thing, but with a brand new timer of 
     * 2 seconds. */
    clearTimeout(notifyTextTimeout);
    // Timer of 2000ms or 2 seconds
    notifyTextTimeout = setTimeout(function() {
        resetNotifyTexts()
    }, 2000);
}

// Resets all relevant notify texts
function resetNotifyTexts() {
    if (prevNotifyText != null)
        prevNotifyText.innerHTML = '';
    prevNotifyText = null;
    if (currentNotifyText != null)
        currentNotifyText.innerHTML = '';
    currentNotifyText = null;
    notifyCounter = 1;
}



/**********************************************************
 *   AJAX PHP Execution For A Points Page Button Press    *
 **********************************************************/

let httpRequest;
function requestInsertUnitIntoDatabase(faction, name, models, points) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
        alert("Cannot create an XMLHTTP instance");
        return false;
    }

    // What to do when the ready state changes.
    // We use it specifically when the XMLHttpRequest is DONE
    httpRequest.onreadystatechange = promptAlert;
    // Always send by POST. 
    httpRequest.open("POST", "db/insert-into-unit-table.php");
    // Needed to send url parameters
    httpRequest.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded",
    );

    // Backticks mean it will attempt to execute the contents as a shell command.
    // Use of the backtick operator is identical to shell_exec().
    // You can separate multiple data values by inserting an ampersand (&) in between each value
    httpRequest.send(`\
    faction=${encodeURIComponent(faction)}&\
    name=${encodeURIComponent(name)}&\
    models=${encodeURIComponent(models)}&\
    points=${encodeURIComponent(points)}&\
    optionalmodels=${encodeURIComponent(JSON.stringify(UnitBuilder.optionalModelsPending))}\
    `);

    UnitBuilder.optionalModelsPending = [];

    
}

function promptAlert() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
            // alert("Successfully added to unit table");
        } else {
            alert("There was a problem with the request.");
        }
    }
}
