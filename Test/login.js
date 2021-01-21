function login(){
    var data = JSON.parse(localStorage.getItem('admin'));
    var uname,pwd;
    var aunm=document.getElementById("inputEmail").value;
    var apsd=document.getElementById("inputPassword").value;
    data.forEach(function(obj) {
        uname=obj.Aemail;
        pwd=obj.Apsd;
      });
    if(apsd===pwd && aunm===uname){
        window.location = "Dashboard.html"
    }
    else{
        alert("Wrong Username and Password.")
    }
}