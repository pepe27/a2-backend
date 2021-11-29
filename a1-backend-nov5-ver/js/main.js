//main.js
console.log("connected main.js");

//readingAssistance
// Consider background colours and font colors.
// Add more padding around elements and increase the line height and letter spacing.


let toggle = document.querySelectorAll("#toggle")[0];

toggle.addEventListener("click",readAssist);

function readAssist() {
    console.log("readAssist function");
    let form = document.querySelectorAll("form");

    //section.setAttribute("style",backgroundColor="white");
    //form.style.backgroundColor = "red";
    form.setAttribute("style", "background-color: red;");
    //document.getElementById("section").style.backgroundColor="white";

    

// This works for all css styles. However, hyphenated css properties like background-color will need to be converted to backgroundColor.
// It's an easy to remember pattern: Remove the hyphen and camel-case the property name.
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
let cookies = document.querySelector("#cookies");
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
        footer[0].setAttribute("style","display:none");
        footer[1].setAttribute("style","display:inline-block");
        e.target.innerHTML = "Accept Cookies"
    }
}





//old thing that never worked
// cookiesAccept.addEventListener("click",revertCookies); //not work

// function revertCookies(event){
//     console.log("revertCookies Function");

// }

