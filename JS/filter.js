//add funtion to the filter section
function filterPrice(){
    let all = document.querySelector("#all");
    let above = document.querySelector("#highprice");
    let medium = document.querySelector("#midprice");
    let under = document.querySelector("#lowprice");

    if(all.selected){
        showAll();
    }else if(above.selected){
        highShow();
    }else if(medium.selected){
        midShow();
    }else if(under.selected){
        underShow();
    }
}

// create ShowAll function to show all items
function showAll(){
    let hprice = document.querySelectorAll(".highp");
    for(let i = 0;i < hprice.length;i++){
        hprice[i].style.display = "";
    }
    let lprice = document.querySelectorAll(".lowp");
    for(let i = 0;i < lprice.length;i++){
        lprice[i].style.display = "";
    }
    let mprice = document.querySelectorAll(".midp");
    for(let i = 0;i < mprice.length;i++){
        mprice[i].style.display = "";
    }
}

//create highShow function to show all high price items
function highShow(){
    let hprice = document.querySelectorAll(".highp");
    for(let i = 0;i < hprice.length;i++){
        hprice[i].style.display = "";
    }
    let lprice = document.querySelectorAll(".lowp");
    for(let i = 0;i < lprice.length;i++){
        lprice[i].style.display = 'none';
    }

    let mprice = document.querySelectorAll(".midp");
    for(let i = 0;i < mprice.length;i++){
        mprice[i].style.display = 'none';
    }
}

//create midShow function to show all medium price items
function midShow(){
    let mprice = document.querySelectorAll(".midp");
    for(let i = 0;i < mprice.length;i++){
        mprice[i].style.display = "";
    }
    let lprice = document.querySelectorAll(".lowp");
    for(let i = 0;i < lprice.length;i++){
        lprice[i].style.display = 'none';
    }

    let hprice = document.querySelectorAll(".highp");
    for(let i = 0;i < hprice.length;i++){
        hprice[i].style.display = 'none';
    }
}

//create underShow function to show all high price items
function underShow(){
    let lprice = document.querySelectorAll(".lowp");
    for(let i = 0;i < lprice.length;i++){
        lprice[i].style.display = "";
    }
    let mprice = document.querySelectorAll(".midp");
    for(let i = 0;i < mprice.length;i++){
        mprice[i].style.display = 'none';
    }
    let hprice = document.querySelectorAll(".highp");
    for(let i = 0;i < hprice.length;i++){
        hprice[i].style.display = 'none';
    }
}
