// 'use strict';
// let dt = new Date();


// function renderDate() {
//     let dateString = new Date();

//     dt.setDate(1);
//     let day = dt.getDay();

//     let endDate = new Date(
//         dt.getFullYear(),
//         dt.getMonth() + 1,
//         0
//     ).getDate();

//     let prevDate = new Date(
//         dt.getFullYear(),
//         dt.getMonth(),
//         0
//     ).getDate();

//     let today = new Date();

//     let months = [
//         "Janeiro",
//         "Fevereiro",
//         "Março",
//         "Abril",
//         "Maio",
//         "Junho",
//         "Julho",
//         "Agosto",
//         "Setembro",
//         "Outubro",
//         "Novembro",
//         "Dezembro"
//     ];

//     document.getElementById("icalendarMonth").innerHTML = months[dt.getMonth()] ;
//     // document.getElementById("icalendarDateStr").innerHTML = dateString.toDateString();

//     let cells = "";
//     let countDate = 0;

//     for (let x = day; x > 0; x--) {
//         cells += "<div class='icalendar__prev-date'>" + (prevDate - x + 1) + "</div>";
//     }

//     for (let i = 1; i <= endDate; i++) {
//         if (i === today.getDate() && dt.getMonth() === today.getMonth() && dt.getFullYear() === today.getFullYear()) {
//             cells += "<a class='icalendar__today'>" + i + "</a>";
//         } else {
//             cells += "<a href='' class='a-date'>" + i + "</a>";
//             // document.getElementsByClassName('cell').setAttribute("onclick", "click()");

//         }

//         countDate = i;
//     }

//     let reservedDateCells = countDate + day + 1;
//     for (let j1 = reservedDateCells, j2 = 1; j1 <= 42; j1++, j2++) {
//         cells += "<div class='icalendar__next-date'>" + j2 + "</div>";
//     }

//     document.getElementsByClassName("icalendar__days")[0].innerHTML = cells;
    
// }

// renderDate();


// function moveDate(param) {
//     if (param === 'prev') {
//         dt.setMonth(dt.getMonth() - 1);
//     } else if (param === 'next') {
//         dt.setMonth(dt.getMonth() + 1);
//     }

//     renderDate();
// }
// const click=()=>{
//     console.log('as')
// }









mobiscroll.settings = {
    theme: 'ios',
    themeVariant: 'light'
};

mobiscroll.calendar('#demo-bubble-two', {
    display: 'bubble',
    months: 2,
    yearChange: false
});

mobiscroll.calendar('#demo-bubble-three', {
    display: 'bubble',
    months: 3,
    yearChange: false
});

mobiscroll.calendar('#demo-bubble-four', {
    display: 'bubble',
    months: 4,
    yearChange: false
});

mobiscroll.calendar('#demo-bubble', {
    display: 'bubble',
    months: 'auto',
    yearChange: false
});

mobiscroll.calendar('#demo-two', {
    display: 'center',
    months: 2,
    yearChange: false
});

mobiscroll.calendar('#demo-three', {
    display: 'center',
    months: 3,
    yearChange: false
});

mobiscroll.calendar('#demo-four', {
    display: 'center',
    months: 4,
    yearChange: false
});

mobiscroll.calendar('#demo-center', {
    display: 'center',
    months: 'auto',
    yearChange: false
});