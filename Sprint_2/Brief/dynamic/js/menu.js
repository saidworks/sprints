const panels = document.querySelectorAll(".products-panel");


function stretch() {
    this.classList.toggle("stretch");
}

function appear() {
    this.classList.toggle("appear")
}

function backToNormal() {
    this.classList.remove("stretch");
    this.classList.remove("appear");
}

panels.forEach(
    function(panel) {
        panel.addEventListener('mouseenter', stretch);
        panel.addEventListener('mouseenter', stretch);
    }
)
panels.forEach(
    function(panel) {
        panel.addEventListener('mouseout', backToNormal);
    }
)