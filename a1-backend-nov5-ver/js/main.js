//main.js
console.log("connected main.js");

//Dynamic site visitor data
let visitors = [
    {
        month: "Month",
        number: "Number of Site Visitors"
    },{
        month: "Jan",
        number: 111
    },{
        month: "Feb",
        number: 222
    },{
        month: "Mar",
        number: 333
    },{
        month: "Apr",
        number: 444
    },{
        month: "May",
        number: 555
    },{
        month: "June",
        number: 666
    }
    
];

let table = document.querySelectorAll("#siteVisitors")[0];

for (let i=0; i<visitors.length; i++) {
    let tableTr = document.createElement("tr");

    let monthTh = document.createElement("th");
    let numberTh = document.createElement("th");

    monthTh.innerHTML = visitors[i].month;
    numberTh.innerHTML = visitors[i].number;

    table.appendChild(tableTr);
    table.appendChild(monthTh);
    table.appendChild(numberTh);

}

////////////////////////////////////
//GDPR
let cookies = document.querySelectorAll("#cookies")[0];
let footer = document.querySelectorAll("footer p");
//let pFooter = document.querySelectorAll("#pFooter")[0];


cookies.setAttribute("style","color:green;");
//footer.setAttribute("style","color:red;");

// When the user clicks "Accept Cookies", change the content on the banner to display new content 

cookies.addEventListener("click", acceptCookies);

function acceptCookies (e) {
    console.log("cookie click funciton");

    if (e.target.innerHTML === "Accept Cookies") {
        //footer.innerHTML = "Cookies were accepted. Would you like to revoke?" + "<a id='cookiesAccept' href='#'>Revoke Cookies</a>"; 
        footer[0].setAttribute("style","display:none");
        footer[1].setAttribute("style","display:inline-block");
        e.target.innerHTML = "Revoke Cookies"
    }
    else {
        footer[0].setAttribute("style","display:inline-block");
        footer[1].setAttribute("style","display:none");
        e.target.innerHTML = "Accept Cookies"
    }
}

////////////////////////////////////////////////
//readingAssistance
// Consider background colours and font colors.
// Add more padding around elements and increase the line height and letter spacing.


let toggle = document.querySelectorAll("#toggle")[0];
let body = document.querySelector("body");
let p = document.querySelectorAll("p");
let a = document.querySelectorAll("a");
let form = document.querySelectorAll("form");
let input = document.querySelectorAll("input");

toggle.addEventListener("click",readAssist);

let flag =true;
function readAssist(e) {
    if (flag) {
        body.classList.add('high-contrast-body');
        for (let i=0;i<p.length;i++) {
            p[i].classList.add('high-contrast-p');
        }
        for (let i=0;i<a.length;i++) {
            a[i].classList.add('high-contrast-p');
        }
        for (let i=0;i<form.length;i++) {
            form[i].classList.add('high-contrast-p');
        }
        for (let i=0;i<input.length;i++) {
            input[i].classList.add('high-contrast-p');
        }
    } else {
        body.classList.remove('high-contrast-body');
        for (let i=0;i<p.length;i++) {
            p[i].classList.remove('high-contrast-p');
        }
        for (let i=0;i<a.length;i++) {
            a[i].classList.remove('high-contrast-p');
        }
        for (let i=0;i<form.length;i++) {
            form[i].classList.remove('high-contrast-p');
        }
        for (let i=0;i<input.length;i++) {
            input[i].classList.remove('high-contrast-p');
        }


    }
    flag = !flag; //this is important. flag == false, once the function runs
}

/*
//my version
// let count = 0;
function readAssist(e) {
    //console.log("readAssist function");
    // count++;
    // console.log(count);

    let form = document.querySelectorAll("form");
    for (let i=0;i<form.length;i++) {
    form[i].setAttribute("style", "background-color: red;");
    }

    let body = document.querySelector("body");
    body.setAttribute("style", ["background-color: white; padding: 20em 2em 10em;"]);

    let p = document.querySelectorAll("p");
    for (let i=0;i<p.length;i++) {
    p[i].setAttribute("style", ["font-weight:bolder; line-height: 1.5em; font-size: larger;  letter-spacing: 2px; padding: 1em 2em 1em;"]);

    //Cannot set them individually, it will only take the last one. Checked with Developer Tools
    // p[i].setAttribute("style", "font-size: larger;");
    // p[i].setAttribute("style", "letter-spacing: 2px;");
    // p[i].setAttribute("style", "line-height: 1.5em;");
    }

    let a = document.querySelectorAll("a");
    for (let i=0;i<p.length;i++) { 
        a[i].setAttribute("style", ["font-size: larger; font-weight:bolder; background-color: yellow;"]);
    }

    let input = document.querySelectorAll("input");
    for (let i=0;i<p.length;i++) { 
        input[i].setAttribute("style", ["font-size: larger; font-weight:bolder;"]);
    
    }

}
*/

//Add a keyboard shortcut "Ctrl + A" that would toggle Reading Assistance on/off

document.addEventListener('keydown', function(event) {
    if (event.code == 'KeyA' && (event.ctrlKey || event.metaKey)) {
        console.log("undo");
    
        event.preventDefault(); //?
        readAssist(event);
        
        
      

    }
  });

//my old version, only toggles on, no off
/*
document.addEventListener('keydown', function(event) {
    if (event.code == 'KeyA' && (event.ctrlKey || event.metaKey)) {
        console.log('readingAssistance');

        if (count == 0) {
            event.preventDefault(); //?
            readAssist(event);
        } 
        else {
            console.log("undo");
            //readAssist.remove(); //not work
            //event.target.remove(); //this removes everything...
           

        }

    }
  });
*/
