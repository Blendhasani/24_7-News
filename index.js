
var e = /^[A-Z][a-z]*/;
var m = /^[A-Z][a-z]*/;
var a = /[0-9]*/;
var em = /^\w+([._-]?\w+)*@[a-z]*\.[a-z]{2,3}/; 
var p = /^[A-Z][a-z]+\d/;



var submitbtn = document.getElementById("submiti");

var fnamemessage = document.getElementById("fnamemsg");
var lnamemessage = document.getElementById("lnamemsg");
var agemessage = document.getElementById("agemsg");
var emailmessage = document.getElementById("emailMsg");
var passwordmessage= document.getElementById("pwmsg");
var confirmpasswordmessage= document.getElementById("cpmsg");


submitbtn.addEventListener("click", function (event) {
    var emri = document.getElementById("fname").value;
    var mbiemri = document.getElementById("lname").value;
    var mosha = document.getElementById("age").value;
    var emaili = document.getElementById("email").value;
    var passwordi = document.getElementById("password").value;
    var konfirmimi = document.getElementById("confirmpass").value;

    if (emri == "") {
        fnamemessage.innerText = "Enter a name"
        event.preventDefault();
    }
    else {
        if (e.test(emri)) {

        }
        else {
            fnamemessage.innerText = "Name needs to: Start with uppercase and contain only text"
            event.preventDefault();
        }
    }
    if (mbiemri == "") {
        lnamemessage.innerText = "Enter a surname"
        event.preventDefault();
    }
    else {
        if (m.test(mbiemri)) {

        }
        else {
            lnamemessage.innerText = "Surname needs to: Start with uppercase and contain only text"
            event.preventDefault();
        }
    }

    if (mosha == "") {
        agemessage.innerText = "Enter an age"
        event.preventDefault();
    }
    else {
        if (a.test(mosha)) {

        }
        else {
            agemessage.innerText = "Surname needs to start with uppercase and contain only text"
            event.preventDefault();
        }
    }


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

    if (konfirmimi == "") {
        confirmpasswordmessage.innerText = "Confirm password"
        event.preventDefault();
    }
    else {
        if (konfirmimi != passwordi) {
            confirmpasswordmessage.innerText = "Password does not match"
            event.preventDefault();
        }
    }
    
})