function formValidation(){
    var userName = document.forms["myForm"]["title"].value;
    if (userName == "") {
    alert("Title must be filled out");
    return false;
    }
    
    var userName = document.forms["myForm"]["mtitle"].value;
    if (userName == "") {
    alert("Meta Title must be filled out");
    return false;
    }
    
    
    var userAddress = document.forms["myForm"]["content"].value;
    if (userAddress == "") {
    alert("Content must be filled out");
    return false;
    }
    
    
    var userAge = document.forms["myForm"]["pcat"].value;
    if (userAge === "Select pcat") {
    alert("Category must be filled out.");
    return false;
    }
    
    }