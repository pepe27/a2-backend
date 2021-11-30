//contact-ajax.js
console.log("contact-ajax.js connected");

//copied from SLATE
var xhr = new XMLHttpRequest(); 
xhr.onreadystatechange = function(e){     
	console.log(xhr.readyState);     
	if(xhr.readyState === 4){        
		console.log(xhr.responseText);// modify or populate html elements based on response.
	        //DOM Manipulation
            var response = JSON.parse(xhr.responseText);  //parsing the xhr request
            console.log(response);
       } 
};


xhr.open("POST","process-contactNEW.php",true); //true means it is asynchronous // Send variables through the url
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
xhr.send("fname=Henry&lname=Ford");

//The parameter to the send() method can be any data you want to send to the server if POST-ing the request. Form data should be sent in a format that the server can parse, like a query string:

/////////////////////////////////////////
let submit = document.querySelectorAll("#submit")[0];
let form = document.querySelectorAll("#form")[0];

submit.addEventListener("submit",doSomething);
//NOTE:the submit button is not a click event, it is the submit event on the form
//to stop a form from submiting, use event.preventDefault();

function doSomething(e){
	console.log("doSomething Fn");
	//e.preventDefault();
	//e.target.innerHTML = "CHANGED";
}


