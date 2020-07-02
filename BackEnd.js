function signUp(){
    if(document.SignUpForm.Firstname.value==""){
        alert("Please provide First Name!");
        document.SignUpForm.Firstname.focus();
        return false;
        }
    if(document.SignUpForm.Lastname.value==""){
            alert("Please provide Last Name!");
            document.SignUpForm.LastName.focus();
            return false;
            }
    if(document.SignUpForm.MobileNumber.value=="" || document.SignUpForm.MobileNumber.value.length != 10){
        alert("Please provide Mobile Number!");
        document.SignUpForm.MobileNumber.focus();
        return false;
    }        
    if(document.SignUpForm.Email.value==""){
        alert("Please provide Email address!");
        document.SignUpForm.Email.focus();
        return false;
        }
    validEmail();
    function validEmail(){
        var vEmail = document.SignUpForm.Email.value;
        at = vEmail.indexOf("@");
        dot = vEmail.lastIndexOf(".");
        if(at < 1 || (dot - at < 2)){
            alert("Enter Valid Email!")
            document.SignUpForm.Email.focus();
            return false;
        }    
        return true
    }
    if(document.SignUpForm.Password.value=="" || document.SignUpForm.Password.value.length < 8){
        alert("Enter Valid Password!");
        document.SignUpForm.Password.focus();
        return false;
        }
    if(document.SignUpForm.ConfirmPassword.value != document.SignUpForm.Password.value){
        alert("Passwords Dont Match!");
        document.SignUpForm.Password.focus();
        return false;
    }
    if(document.SignUpForm.Location.value=="-1"){
        alert("Select Your Location!");
        document.SignUpForm.Location.focus();
        return false;
    }
   
    return true;
};
function tracks(){
    var trackId = prompt("Enter Tracking ID");
    function input(){
        
        if (trackId.length != 8){
            alert("ENTER 8-DIGIT TRACKING ID");
            tracks();
        }
    }
    input();  
};
function pricing(){
    var distance = document.pricingForm.locationSelect.value;
    if(distance == 1 /*Accra*/ ){
        alert("DELIVERY TO YOUR LOCATION IS 25 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
      if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 2 /*CapeCoast*/){
        alert("DELIVERY TO YOUR LOCATION IS 20 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 3 /*Takoradi*/){
        alert("DELIVERY TO YOUR LOCATION IS 30 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 4 /*Ho*/){
        alert("DELIVERY TO YOUR LOCATION IS 25 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 5 /*Koforidua*/){
        alert("DELIVERY TO YOUR LOCATION IS 20 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
else if(distance == 6 /*Kumasi*/){
        alert("DELIVERY TO YOUR LOCATION IS 10 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 7 /*Sunyani*/){
        alert("DELIVERY TO YOUR LOCATION IS 20 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 8 /*Tamale*/){
        alert("DELIVERY TO YOUR LOCATION IS 35 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 9 /*Bolgatanga*/){
        alert("DELIVERY TO YOUR LOCATION IS 40 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
    else if(distance == 10 /*Wa*/){
        alert("DELIVERY TO YOUR LOCATION IS 40 CEDIS");
        var feedback = confirm("PAYMENTS THROUGH MOBILE MONEY?");
        if(feedback == true){
        }
      if(feedback == false){
        alert("THANKS FOR CHOOSING GLITCH DELIVERY SERVICE!");
    }
}
};
function home(){
    window.history.go(-1)
};
function settings(){
    // declares variable for the buttons
    var buttonOne,buttonTwo,buttonThree,buttonFour,addTo;
    var p1, p2, p3, p4;

    // creates a paragraph function and stores it in the variables created
    p1 = document.createElement("p");
    p2 = document.createElement("p");
    p3 = document.createElement("p");
    p4 = document.createElement("p");

    // creates a button function and stores it in the variables created
    buttonOne = document.createElement("button");
    buttonTwo = document.createElement("button");
    buttonThree = document.createElement("button");
    buttonFour = document.createElement("button");

    // Adds texts to the buttons
    buttonOne.textContent="";
    buttonTwo.textContent="MY ACCOUNT";
    buttonThree.textContent="";
    buttonFour.textContent="HOME";

    // Adds click functions to the buttons
    //Payment Methods
        var pricingAnchor
        pricingAnchor = document.createElement("a");
        pricingAnchor.textContent = "PAYMENT METHOD";
        pricingAnchor.href = "pricingPage.html";
        buttonOne.appendChild(pricingAnchor);
    
    //Account details
    buttonTwo.onclick = function(){};
    
    //Tracking
        var anchor,anchorText;
        trackingAnchor = document.createElement("a");
        anchorText = document.createTextNode("TRACKING");
        trackingAnchor.appendChild(anchorText);
        trackingAnchor.href = "trackingPage.html";
        buttonThree.appendChild(trackingAnchor);
      
    //Homepage
    buttonFour.onclick = function(){
        window.history.back();
    };
    
    // Adds buttons to paragraphs
    p1.appendChild(buttonOne);
    p2.appendChild(buttonTwo);
    p3.appendChild(buttonThree);
    p4.appendChild(buttonFour);


    // Adds paragraphs the HTML DOM page (settingsPage.html)
    addTo = document.getElementsByTagName("div")[0];
    addTo.appendChild(p1);
    addTo.appendChild(p2);
    addTo.appendChild(p3);
    addTo.appendChild(p4);
};