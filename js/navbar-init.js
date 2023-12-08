
/*********************************************************
 *   Should only use this function from navbar-init.js   *
 *********************************************************/
function initNavbarTools(numDirsUp) {
    // Append @media rules for the navbar width breakpoints
    var style = document.createElement('style');
    style.id = "head-style";
    document.head.append(style);
    setWidthBreakpoints();
    appendNavbarAndArticleSectionMediaRulesStylesheet();

    // Sets the init behaviors without any resizing involved. Such as on page load.
    setInitWidthBreakpoint1Behaviors();

    // Register event listeners for the three-line-menu (when width less than widthBreakpoint2) and 
    // event listeners for all others (when width greater than widthBreakpoint2)
    registerThreeLineMenuListeners();
    registerSearchListeners("search-suggestions", numDirsUp);
}

/*******************************
 *   Three Line Menu Section   *
 *******************************/
function toggleThreeLineMenu() {
    var dropdown = document.getElementById("three-line-dropdown");
    if (dropdown.style.display == '' || dropdown.style.display == "none") {
        dropdown.style.display = "flex";
    } else {
        dropdown.style.display = "none";
    }
}

function closeThreeLineMenu() {
    document.getElementById("three-line-dropdown").style.display = "none";
}

function registerThreeLineMenuListeners() {
    window.addEventListener("click", event => {
        let dropdown = document.getElementsByClassName("alt-dropdown")[0];
        if (event.target !== dropdown && !dropdown.contains(event.target)) {
            closeThreeLineMenu();
        } else {
            toggleThreeLineMenu();
        }
    });
    window.addEventListener("resize", closeThreeLineMenu);
}

/******************************************
 *   Search Bar/Btn/Suggestions Section   *
 ******************************************/
function registerSearchListeners(searchSuggestionsId, numDirsUp) {
    let searchBar = document.getElementById("search-bar");
    // Input because we want to do action anytime the value changes
    searchBar.addEventListener("input", () => {
        // Requires live-search.js to be imported in the html
        getLiveSearchResults(searchSuggestionsId, numDirsUp, searchBar.value);
    });
    searchBar.addEventListener("focus", () => {
        // Requires live-search.js to be imported in the html
        getLiveSearchResults(searchSuggestionsId, numDirsUp, searchBar.value);
    });
    window.addEventListener("click", event => {
        let searchBar = document.getElementById("search-bar");
        let searchSuggestions = document.getElementById("search-suggestions");
        let searchBtn = document.getElementById("alt-search-btn");
        // If not the search bar/btn/suggestions, then hide the searchbar and suggestions
        if (event.target !== searchBar && !searchBar.contains(event.target) && 
        event.target !== searchSuggestions && !searchSuggestions.contains(event.target) &&
        event.target !== searchBtn && !searchBtn.contains(event.target)) 
        {
            // hide only if the window width less than widthBreakpoint1
            if (window.innerWidth <= widthBreakpoint1) {
                searchBar.style.display = "none";
            }
            searchSuggestions.style.display = "none";
        }
    });
    window.addEventListener("resize", () => {
        document.getElementById(searchSuggestionsId).style.display = "none";
        let searchBtn = document.getElementById("alt-search-btn");
        let searchBar = document.getElementById("search-bar");
        if (window.innerWidth <= widthBreakpoint1) {
            searchBtn.onclick = toggleSearchBar;
            searchBar.style.display = "none";
        } else {
            searchBtn.onclick = null;
            searchBar.style.display = "flex";
        }
    });
}

function setInitWidthBreakpoint1Behaviors() {
    if (window.innerWidth <= widthBreakpoint1) {
        document.getElementById("alt-search-btn").onclick = toggleSearchBar;
        document.getElementById("search-bar").style.display = "none";
    }
}

function toggleSearchBar() {
    let searchBar = document.getElementById("search-bar");
    if (searchBar.style.display == '' || searchBar.style.display == "none") {
        // if display is none
        searchBar.style.display = "flex";
    } else {
        // if display is set
        searchBar.style.display = "none";
    }
}

/****************************************************
 *   Navbar Media Rule Resizing Behaviors Section   *
 ****************************************************/
var widthBreakpoint1;
var widthBreakpoint2;
function setWidthBreakpoints() {
    var liList = document.getElementById("link-list").getElementsByTagName("li");
    var liListLen = liList.length;
    // Hardcoded values for navbar @media rules
    widthBreakpoint1 = liListLen == 6 ? 1200 : 1070;
    widthBreakpoint2 = liListLen == 6 ? 950 : 820;
}

function appendNavbarAndArticleSectionMediaRulesStylesheet() {
    // width3 needs to be less than widthBreakpoint2 because we can't apply different styles
    // to the same id/class and expect defined behavior
    let width3 = widthBreakpoint2 - 1;
    var css = `
        @media (max-width: ${widthBreakpoint1}px) {
            #search-bar {
                position: absolute;
                top: 4.6em;
                left: calc(50% - (245px/2));
            }
            .search-dropdown-content {
                top: 6.9em;
                left: calc(50% - (245px/2));
            }
            #alt-search-btn {
                cursor: pointer;
            }
        }
        
        @media (max-width: ${width3}px) {
            .alt-dropdown {
                display: flex;
            }
            #warhammer-logo-link{
                display: none;
            }
            #alt-warhammer-logo-link {
                display: flex;
            }
            .inner2 {
                justify-content: space-around;
                /* Equal to the size of the alt warhammer logo for true center */
                margin-left: 60px;
            }
            .inner2 ul {
                display: none;
            }
            /* The article section width*/
            .pad {
                display: none;
            }
            #article {
                width: 100vw;
            }
        }
        
        @media (min-width: ${widthBreakpoint2}px) {
            .alt-dropdown {
                display: none;
            }
            #warhammer-logo-link{
                display: block;
            }
            #alt-warhammer-logo-link {
                display: none;
            }
            .inner2 ul {
                display: flex;
            }
        }
        `;
    
    // Append a new @media rules
    document.getElementById("head-style").append(document.createTextNode(css));
}