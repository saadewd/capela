'use strict';
let dt = new Date();


function renderDate() {
    let currentDate=''
    let currentDate2=''
    // For Production
    if(document.location.pathname.slice(41).length == 5){
         currentDate=document.location.pathname.slice(41).slice(0,1)
    }
    if(document.location.pathname.slice(41).length == 6){
       currentDate=document.location.pathname.slice(41).slice(0,2)
    }
    // For Development
    // if(document.location.pathname.slice(48).length == 5){
    //      currentDate=document.location.pathname.slice(48).slice(0,1)
    // }
    // if(document.location.pathname.slice(48).length == 6){
    //    currentDate=document.location.pathname.slice(48).slice(0,2)
    // }
    // if(document.location.pathname.slice(48).length == 6){
    //     currentDate2 = document.location.pathname.slice(48).slice(0,2)
    // }
       
    let dateString = new Date();

    dt.setDate(1);
    let day = dt.getDay();

    let endDate = new Date(
        dt.getFullYear(),
        dt.getMonth() + 1,
        0
    ).getDate();

    let prevDate = new Date(
        dt.getFullYear(),
        dt.getMonth(),
        0
    ).getDate();

    let today = new Date();

    let months = [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho", 
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    ];

    document.getElementById("icalendarMonth").innerHTML = months[dt.getMonth()] ;
    // document.getElementById("icalendarDateStr").innerHTML = dateString.toDateString();

    let cells = "";
    let countDate = 0;

    for (let x = day; x > 0; x--) {
        cells += "<div class='icalendar__prev-date'>" + (prevDate - x + 1) + "</div>";
    }
    for (let i = 1; i <= endDate; i++) {   
        let i2 = i+"a"
        if (i == currentDate && months[dt.getMonth()] == 'Setembro' || i2 == currentDate2 ) {
            cells += "<a class='icalendar__today'>" + i + "</a>";
        } else {
            if(months[dt.getMonth()] == 'Agosto'){
                console.log(months[dt.getMonth()] )
                cells += `<a class='a-date' href="./oracoes-missionarias-august/capela-virtual-oracoes-missionarias-`+i+`.html">`+i+`</a>`;
                // document.getElementsByClassName('a-date').setAttribute('href',`../Leitura-Orante/leitura-orante-`+i+`.html`)
            }
            else if(months[dt.getMonth()] == "Setembro" ){
                console.log(months[dt.getMonth()] )
                cells += `<a class='a-date' href="./oracoes-missionarias-august/capela-virtual-oracoes-missionarias-`+i+`.html">`+i+`</a>`;
            }
            // else if(months[dt.getMonth()] == "Outubro" ){
            //     console.log(months[dt.getMonth()] )
            //     cells += `<a class='a-date' href="leitura-orante-`+i+`.html">`+i+`</a>`;
            // }
       
            else{
                cells += `<a class='a-date'>`+i+`</a>`;
            }
            
            

        }

        countDate = i;
    }

    let reservedDateCells = countDate + day + 1;
    for (let j1 = reservedDateCells, j2 = 1; j1 <= 42; j1++, j2++) {
        cells += "<div class='icalendar__next-date'>" + j2 + "</div>";
    }

    document.getElementsByClassName("icalendar__days")[0].innerHTML = cells;
    
}

renderDate();


function moveDate(param) {
    if (param === 'prev') {
        dt.setMonth(dt.getMonth() - 1);
    } else if (param === 'next') {
        dt.setMonth(dt.getMonth() + 1);
    }

    renderDate();
}
const click=()=>{
    console.log('as')
}
