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

toggle.addEventListener("click",readAssist);

function readAssist(e) {
    console.log("readAssist function");

    let form = document.querySelectorAll("form");
    for (let i=0;i<form.length;i++) {
    form[i].setAttribute("style", "background-color: red;");
    }

    let body = document.querySelector("body");
    let p = document.querySelectorAll("p");
    body.setAttribute("style", "background-color: white;");
    //body.h1.setAttribute("style", "font-weight:bolder;");

    for (let i=0;i<p.length;i++) {
    p[i].setAttribute("style", ["font-weight:bolder; line-height: 1.5em; font-size: larger;  letter-spacing: 2px;"]);

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
    //doens't work
    // toggle.removeEventListener("dblclick",removeAssist);
    // function removeAssist(e){
    //     console.log("removeAssist function")
    // }


//Add a keyboard shortcut "Ctrl + A" that would toggle Reading Assistance on/off
document.addEventListener('keydown', function(event) {
    if (event.code == 'KeyA' && (event.ctrlKey || event.metaKey)) {
      alert('readingAssistance')
    }
  });
