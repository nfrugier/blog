document.addEventListener("DOMContentLoaded", () => {

    var textarea = document.querySelectorAll("textarea");
    textarea[0].addEventListener("keypress", () => {
        if(textarea[0].scrollTop != 0){
            textarea[0].style.height = textarea[0].scrollHeight + "px";
        }
    }, false)
}, false);