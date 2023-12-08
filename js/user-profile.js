function registerLeftPanelListener() {
    // set initial margin left
    let leftPanel = document.getElementsByClassName("left-panel")[0]
    let mainContent = document.getElementsByClassName("main-content")[0];
    mainContent.style.marginLeft = leftPanel.clientWidth + "px";

    window.addEventListener("resize", () => {
        let leftPanel = document.getElementsByClassName("left-panel")[0]
        let mainContent = document.getElementsByClassName("main-content")[0];
        mainContent.style.marginLeft = leftPanel.clientWidth + "px";;
    });
}

