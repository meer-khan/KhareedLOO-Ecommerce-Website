 
$(document).ready(function () {
    var fn = document.querySelector(".form_first_name");
    var error_fn = document.getElementById("error_first_name");
    var ln = document.querySelector(".form_last_name");
    var error_ln = document.getElementById("error_last_name");
    var ph_no = document.querySelector(".form_phone_no");
    var error_ph_no = document.getElementById("error_phone_no");
    var alternate_ph_no = document.querySelector(".form_alternate_mobile");
    var error_alternate_ph_no = document.getElementById("error_alternate_ph_no")
    var form_password = document.querySelector(".form_password")
    var error_password = document.querySelector("#error_password")
    // Validation for First Name
    $(fn).focusout(function () {
        if (fn.value.length <= 2) {
            fn.value = "";
            error_fn.textContent = "*Please Enter Full Name";
            error_fn.style.color = "red";
        }
        else {
            error_fn.textContent = "ok";
            error_fn.style.color = "white";
        }

    });
    // Validation For Last Name
    $(ln).focusout(function () {
        if (ln.value.length <= 2) {
            ln.value = "";
            error_ln.textContent = "*Please Enter Full Name";
            error_ln.style.color = "red";
        }
        else {
            error_ln.textContent = "ok";
            error_ln.style.color = "white";
        }

    });
    
    // Validation for Phone No 
    $(ph_no).focusout(function () {
        var getChar = ph_no.value[0];
        console.log(ph_no.value[1]);
        if (getChar != "+") {
            ph_no.value = "";
            error_ph_no.textContent = "Phone no Must Start from \"+\"";
            error_ph_no.style.color = "red";
        }
        else if (ph_no.value[1] != 9 || ph_no.value[2] != 2) {
            ph_no.value = "";
            error_ph_no.textContent = "Number must Start from \"+92\"";
            error_ph_no.style.color = "red";
        }
        else if (ph_no.value.length !== 13) {
            error_ph_no.textContent = "Number is Invalid";
            error_ph_no.style.color = "red";
        }
        else {
            error_ph_no.textContent = "ok";
            error_ph_no.style.color = "white";
        }
        
    });

    // Validation for Alternate Number

    $(alternate_ph_no).focusout(function () {
        var getChar = alternate_ph_no.value[0];
        getChar = getChar.toString();
        console.log(alternate_ph_no.value[1]);
        if (getChar != "+") {
            alternate_ph_no.value = "";
            error_alternate_ph_no.textContent = "Phone no Must Start from \"+\"";
            error_alternate_ph_no.style.color = "red";
        }
        else if (alternate_ph_no.value[1] != 9 || alternate_ph_no.value[2] != 2) {
            alternate_ph_no.value = "";
            error_alternate_ph_no.textContent = "Number must Start from \"+92\"";
            error_alternate_ph_no.style.color = "red";
        }
        else if (alternate_ph_no.value.length != 13) {
            error_alternate_ph_no.textContent = "Number is Invalid";
            error_alternate_ph_no.style.color = "red";

        }
        else {
            error_alternate_ph_no.textContent = "ok";
            error_alternate_ph_no.style.color = "white";
        }
        
    });
    
    // validation password 
    $(form_password).focusout(function () { 
        var pass_length = form_password.length;
        // alert("pressed");
        if (pass_length <= 4) {
            error_password.textContent = "*Weak Password";
            error_password.style.color = "red";
        }
        else if (pass_length <= 8) {
            error_password.textContent = "*Medium Password";
            error_password.style.color = "red";
        }
        else if (pass_length >= 9) {
            error_password.textContent = "*Strong Password";
            error_password.style.color = "red";
        }
    });

    });
         
    







  