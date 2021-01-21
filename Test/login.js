//By using this method we login the user to user page and admin to the admin page.
function login() {
    var data = JSON.parse(localStorage.getItem('admin'));
    var userdata = JSON.parse(localStorage.getItem('user'));

    var uname, pwd, unm, upsd;
    var aunm = document.getElementById("inputEmail").value;
    var apsd = document.getElementById("inputPassword").value;
    data.forEach(function (obj) {
        uname = obj.Aemail;
        pwd = obj.Apsd;
    });
    userdata.forEach(function (obj) {
        unm = obj.uname;
        upsd = obj.upwd;
    });
    //here i check the admin name and password
    if (apsd === pwd && aunm === uname) {
        window.location = "Dashboard.html"
    }
    //here i check the user name and password
    else if (aunm === unm && apsd === upsd) {
        window.location = "Sub_user.html"
    }
    //this condition excute when both are not correct.
    else {
        alert("Wrong Username and Password.")
    }
}

function logout() {
    var data = JSON.parse(localStorage.getItem('user'));
    var uname;
    data.forEach(function (obj) {
        uname = obj.uname;
    });
}