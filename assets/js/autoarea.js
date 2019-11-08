document.addEventListener("DOMContentLoaded", () => {

    var textarea = document.querySelectorAll("textarea");
    for (var i=0; i < textarea.length ;i++){
        textarea[i].addEventListener("keypress", () => {
            if(textarea[i].scrollTop != 0){
                textarea[i].style.height = textarea[i].scrollHeight + "px";
            }
        }, false)
    }
}, false);