//main.js
console.log("connected main.js");

//readingAssistance
// Consider background colours and font colors.
// Add more padding around elements and increase the line height and letter spacing.


let toggle = document.querySelectorAll("#toggle")[0];

toggle.addEventListener("click",readAssist);

function readAssist() {

}



















document.addEventListener('keydown', function(event) {
    if (event.code == 'KeyA' && (event.ctrlKey || event.metaKey)) {
      alert('readingAssistance')
    }
  });

/////////////////////
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
let footer = document.querySelectorAll("footer")[0];
let pFooter = document.querySelectorAll("#pFooter")[0];

cookies.setAttribute("style","color:red;");
//footer.setAttribute("style","color:red;");

// When the user clicks "Accept Cookies", change the content on the banner to display new content 

cookies.addEventListener("click", acceptCookies);

function acceptCookies (event) {
    footer.innerHTML = "Cookies were accepted. Would you like to revoke?" + "<a id='cookiesAccept' href='#'>Revoke Cookies</a>"; 
}


// let cookiesAccept = document.querySelectorAll("#cookiesAccept")[0];

// cookiesAccept.addEventListener("click",revertCookies); //not work

// function revertCookies(event){
//     console.log("revertCookies Function");

// }

