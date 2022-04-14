var em = /^\w+([._-]?\w+)*@[a-z]*\.[a-z]{2,3}/; 
var p = /^[A-Z][a-z]+\d/;

var emailmessage = document.getElementById("emailMsg");
var passwordmessage= document.getElementById("pwmsg");

var submitbtn = document.getElementById("submiti");

submitbtn.addEventListener("click", function (event) {
    var emaili = document.getElementById("email").value;
    var passwordi = document.getElementById("password").value;
  



    if (emaili === "") {
        emailmessage.innerText = "Type your email";
        event.preventDefault();
    }
    else {
        if (em.test(emaili)) {
           
        }
        else {
            emailmessage.innerText = "Type a valid email address";
            event.preventDefault();
        }

    }
    if (passwordi == "") {
        passwordmessage.innerText = "Enter password"
        event.preventDefault();
    }
    else {
        if (p.test(passwordi)) {

        }
        else {
            passwordmessage.innerText = "Password must start with uppercase and have a number in it"
            event.preventDefault();
        }
    }

    
})