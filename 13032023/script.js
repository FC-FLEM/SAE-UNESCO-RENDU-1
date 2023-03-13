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


//Carrousel
var allCarrousel = [];
var allShown = [];

function calculShown(){
    allShown = []
    allCarrousel.forEach(function(item, index, array) {
        var actuelShown = item[0].children[item[4]];
        allShown.push(actuelShown)
    })
    return allShown;
};

function defIntervale(change){
    let timer = setInterval(() => {
        change[0].children[change[3]].classList.remove('before');
        change[0].children[change[4]].classList.remove('shown');
        change[0].children[change[5]].classList.remove('after');

        change[4] += 1

        if (change[4] < 0) {
            change[4] += change[1]
        } else if (change[4] >= change[1]){
            change[4] -= change[1]
        }

        change[3] = change[4]-1
        change[5] = change[4]+1

        if (change[3] < 0){
            change[3] += change[1]
        }
        if (change[5] >= change[1]) {
            change[5] -= change[1]
        }

        // Une fois la transition finie
        setTimeout(() => {
            change[0].children[change[3]].classList.add('before');
            change[0].children[change[4]].classList.add('shown');
            change[0].children[change[5]].classList.add('after');
            var allShown = calculShown();
            //Waiting(allShown);
            }, 200);
        }, change[6] * 1000);
    return timer;
}

function Waiting(allShown) {
    for(let shown of allShown){

        shown.addEventListener('mouseover', () => {
            console.log('On')
    
            let parentOf = shown.parentNode;
            let section = parentOf.dataset.carrousel
    
            allCarrousel.forEach(function(item, index, array) {
                if (item[2] == section){
                    let change = item;
                    clearInterval(change[7]);
                    console.log('on arrete tout', change[7]);
                }
            })
        })
    
        shown.addEventListener('mouseleave', () => {
            console.log('Off')
    
            let parentOf = shown.parentNode;
            let section = parentOf.dataset.carrousel
    
            allCarrousel.forEach(function(item, index, array) {
                if (item[2] == section){
                    let change = item;
                    change[7] = defIntervale(change)
                    console.log('on relance tout !', change[7]);
                }
            })
        })
    }
}

for (let carrousel of document.querySelectorAll('[data-carrousel]'))
    {
        let section = carrousel.dataset.carrousel;
        let nombre = carrousel.children.length;
        let index = 0
        let before = index - 1
        let after = index + 1
        let tps = carrousel.dataset.time

        if (before < 0){
            before += nombre
        }
        if (after >= nombre) {
            after -= nombre
        }

        let newCarrousel = [carrousel, nombre, section, before, index, after, tps]
        let timer  = defIntervale(newCarrousel)
        newCarrousel.push(timer)
        allCarrousel.push(newCarrousel)

        carrousel.children[before].classList.add('before');
        carrousel.children[index].classList.add('shown');
        carrousel.children[after].classList.add('after');

        var allShown = calculShown();
        //Waiting(allShown);
    }

var groupesBoutons = document.querySelectorAll('[data-boutons]');
for (let bouton of groupesBoutons) {

    bouton.addEventListener('click', () => {

            allCarrousel.forEach(function(item, index, array) {
                if (item[2] == bouton.dataset.sections) {
                    let change = item;

                    change[0].children[change[3]].classList.remove('before');
                    change[0].children[change[4]].classList.remove('shown');
                    change[0].children[change[5]].classList.remove('after');

                    let nom = bouton.dataset.boutons;

                    if (nom == "gauche") {
                        change[4] -= 1;
                    } else {
                        change[4] += 1;
                    }

                    if (change[4] < 0) {
                        change[4] += change[1];
                    } else if (change[4] >= change[1]){
                        change[4] -= change[1];
                    }

                    change[3] = change[4]-1;
                    change[5] = change[4]+1;

                    if (change[3] < 0){
                        change[3] += change[1];
                    }
                    if (change[5] >= change[1]) {
                        change[5] -= change[1];
                    }

                    change[0].children[change[3]].classList.add('before');
                    change[0].children[change[4]].classList.add('shown');
                    change[0].children[change[5]].classList.add('after');

                    var allShown = calculShown();
                    //Waiting(allShown);
                }
        })
    })
}

/*
- - - - - HTML - - - - -

<div class="diaporama" data-diaporama="4">
<>
</div>

- - - - - CSS - - - - -

.diaporama {
   width: 100%;
   height: 300px;
   border: solid var(--secondary-color);
   border-radius: 10px;
}

.diaporama {
   width : 30%;
}

.diaporama > img {
   width: 100%; 
 }

[data-diaporama] {
   position: relative;
   width: 100%;
}

[data-diaporama] > img {
   position: absolute;
   inset: 0;
   width: 100%;
   height: 100%;
   opacity: 0;
   transition: opacity 0.2s linear;
   object-fit: contain;
}

[data-diaporama] > img.shown {
   opacity: 1;
}
*/