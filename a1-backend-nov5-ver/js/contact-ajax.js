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
//formStatus ajaxForm name email industry technical career role
let formStatus = document.querySelectorAll("#formStatus")[0];
let ajaxForm = document.querySelectorAll("#ajaxForm")[0];
let name1 = document.querySelectorAll("#name1")[0];
let email = document.querySelectorAll("#email")[0];
let industry = document.querySelectorAll("#industry")[0];
let technical = document.querySelectorAll("#technical")[0];
let career = document.querySelectorAll("#career")[0];


//the event is on the FORM, not the SUBMIT Button 
ajaxForm.addEventListener("submit",doSomething);

//to stop a form from submiting, use event.preventDefault();

function doSomething(e){
	let role = document.querySelectorAll("[name=role]:checked")[0];
	//get elemeent that has name=role that is checked

	console.log("doSomething Fn");
	e.preventDefault();
	
	//from main-ajax.js
	var xhr = new XMLHttpRequest(); 
	xhr.onreadystatechange = function(e){     
		console.log(xhr.readyState);     
		if(xhr.readyState === 4){        
			console.log(xhr.responseText);// modify or populate html elements based on response.
			//receive {"success":"true"} from PHP file
            var response = JSON.parse(xhr.responseText);  
			//DOM Manipulation
			if(response.success) {
                formStatus.innerHTML = "Thanks for submitting your form";
                ajaxForm.remove(); //can do as well
            }
		} 
	};

	xhr.open("POST","process-contactNEW.php",true); 
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	xhr.send("name1=" + name1.value +"&email=" + email.value +"&role=" + role.value ); // Form data should be sent in a format that the server can parse, like a query string:

	//myForm.setAttribute("style","display:none");
	//message.innerHTML = "Thank you for your submission!"


}

//name=STUDY+%2B+ASSIGNMENT&email=mimixuan27%40gmail.com&career=career&role=writer&submit=Submit
//name=pepepe&email=pepepep7%40gmail.com&industry=industry&technical=technical&career=career&role=writer&submit=Submit