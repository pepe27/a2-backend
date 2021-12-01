//contact-ajax.js
console.log("contact-ajax.js connected");

// //from main-ajax.js
// var xhr = new XMLHttpRequest(); 
// xhr.onreadystatechange = function(e){     
// 	console.log(xhr.readyState);     
// 	if(xhr.readyState === 4){        
// 		console.log(xhr.responseText);// modify or populate html elements based on response.
// 	        //DOM Manipulation
// 	        var response = JSON.parse(xhr.responseText);
// 	        console.log(response);

//        } 
// };

// xhr.open("POST","process-contactNEW.php",true); 
// xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
// xhr.send("fname=Henry&lname=Ford"); // Form data should be sent in a format that the server can parse, like a query string:

/////////////////////////////////////////
let submit = document.querySelectorAll("#submit")[0];
let myForm = document.querySelectorAll("#form")[0];
let message = document.querySelectorAll("#message")[0];
let data = new FormData();

submit.addEventListener("submit",doSomething);

//NOTE:the submit button is not a click event, it is the submit event on the form
//to stop a form from submiting, use event.preventDefault();

function doSomething(e){
	console.log("doSomething Fn");
	e.preventDefault();
	
	//from main-ajax.js
	var xhr = new XMLHttpRequest(); 
	xhr.onreadystatechange = function(e){     
		console.log(xhr.readyState);     
		if(xhr.readyState === 4){        
			console.log(xhr.responseText);// modify or populate html elements based on response.
				//DOM Manipulation
				var response = JSON.parse(xhr.responseText);
				console.log(response);

		} 
	};

	xhr.open("POST","process-contactNEW.php",true); 
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	xhr.send(data); // Form data should be sent in a format that the server can parse, like a query string:

	myForm.setAttribute("style","display:none");
	message.innerHTML = "Thank you for your submission!"


}

//name=STUDY+%2B+ASSIGNMENT&email=mimixuan27%40gmail.com&career=career&role=writer&submit=Submit
//name=pepepe&email=pepepep7%40gmail.com&industry=industry&technical=technical&career=career&role=writer&submit=Submit