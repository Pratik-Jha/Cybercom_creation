var arr = localStorage.getItem('admin');
var items = JSON.parse(arr);
arr=items

function Register(){
    window.location.href = "Registration.html";
    // if (arr === null) {
    //     document.getElementById("table1").style.display = "none";
    //     window.location.href = "Registration.html";
    // }
    // else{
    //     window.location.href = "Login.html";
    // }
}