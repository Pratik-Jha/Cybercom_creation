var adminData = []

function Register() {
    var uname = document.getElementById('username').value;
    var mail = document.getElementById('email').value;
    var pwd = document.getElementById('password').value;
    var cnfpwd = document.getElementById('confirm_password').value;
    var city = document.getElementById('drp_city').value;
    var state = document.getElementById('drp_State').value;


    var Admin = {
        Aname: uname,
        Aemail: mail,
        Apsd: pwd,
        Acnfpsd: cnfpwd,
        Acity: city,
        Astate: state
    };

    //console.log(Admin)
    if (localStorage.getItem('admin')) {
        adminData = JSON.parse(localStorage.getItem('admin'));
    }

    adminData.push(Admin);
    console.log(adminData);
    localStorage.setItem("admin", JSON.stringify(adminData));
    window.location="login.html";
}

function check() {
    var arr = localStorage.getItem('admin');
    var items = JSON.parse(arr);

    arr = items;

    if (arr === null) {
        window.location ="Registration.html"
    }
    else{
        alert("Admin Already Registerd.")
        window.location="login.html"
    }
}