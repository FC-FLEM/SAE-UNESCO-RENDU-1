// Menu header responsive
var menu = document.querySelector(".menu");
var menuButton = document.querySelector(".FCFLEM");
var x = 2
menuButton.addEventListener("click", () => {
    if (x>0){
        menu.classList.add("active");
        x = -1
    }
    else{
        menu.classList.remove("active")
        x=2
    }
    
});

// Scroll bar
const body = document.querySelector('body');
const scrollBar = document.querySelector('.scroll');

window.addEventListener('scroll', () =>{
    let scroll = window.scrollY / (body.clientHeight - window.innerHeight);
    let scrollPercent = Math.round(scroll * 100); 
    scrollBar.style.width = scrollPercent + '%';
})

// Widget météo
!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){
        js=d.createElement(s);
        js.id=id;
        js.src='https://weatherwidget.io/js/widget.min.js';
        fjs.parentNode.insertBefore(js,fjs);
    }
}
(document,'script','weatherwidget-io-js');      

// vue responsive
var menu = document.querySelector(".SanNico");
var menuButton = document.querySelector(".btn3");
var x = 2
menuButton.addEventListener("click", () => {
    if (x>0){
        menu.classList.add("vi");
        x = -1
    }
    else{
        menu.classList.remove("vi")
        x=2
    }
    
});