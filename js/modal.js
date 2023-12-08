
function registerModelListeners() {
    var container = document.getElementById("pfp-frame-id");

    var modal = document.getElementById("model-pfp");
    
    var modalContent = document.getElementById("modal-pfp-content");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    container.addEventListener("click", function() {
        modal.style.display = "flex";
    });
    
    span.addEventListener("click", function() {
        modal.style.display = "none";
    });
    
    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener("click", event => {
        if (event.target == modal || event.target == modalContent) {
            modal.style.display = "none";
        }
    });
}
