var userArr = [];

function addUser() {
    var Name = document.getElementById('txt_name').value;
    var email = document.getElementById('txt_mail').value;
    var dob = document.getElementById('txt_dob').value;
    var psd = document.getElementById('txt_psd').value;
    var userData = {
        uname: Name,
        uemail: email,
        udob: dob,
        upwd: psd
    };

    if(Name=="" || email=="" || dob=="" || psd==""){
        alert("Please fill all the field.")
    }
    else{
        if (localStorage.getItem('user')) {
            userArr = JSON.parse(localStorage.getItem('user'));
        }
    
        userArr.push(userData);
        console.log(userArr);
        localStorage.setItem("user", JSON.stringify(userArr));
    }
   
}

function fetchUserData() {
    var userArr = localStorage.getItem('user');
    var items = JSON.parse(userArr);
    userArr = items;

    document.write('<table border = "1" id = "table1">');
    document.write('<tr>');
    document.write('<th>Name</th> <th>Email</th> <th>Date Of Birth</th> <th>Password</th></tr> <tr>');
    for (var k = 0; k < userArr.length; k++) {
        document.write('<td>' + userArr[k].uname + '</td>');
        document.write('<td>' + userArr[k].uemail + '</td>');
        document.write('<td>' + userArr[k].udob + '</td>');
        document.write('<td>' + userArr[k].upwd + '</td>');
        document.write('<td><button type="button" onclick="updateUser()" value="'+userArr[k].uname+'" class="btn btn-link"> Update </button></td>')
        document.write('</tr>');
    }
    document.write('</table>');
}
document.getElementById("userTable").innerHTML = fetchUserData()

function updateUser() {
    var useData = JSON.parse(localStorage.getItem('user'));
    useData.forEach(function (obj) {
        document.getElementById('txt_name').value=obj.uname
        document.getElementById('txt_mail').value=obj.uemail
        document.getElementById('txt_dob').value=obj.udob
        document.getElementById('txt_psd').value=obj.upwd
        document.getElementById('btn_submit').innerHTML="Update Record"
    });
}
