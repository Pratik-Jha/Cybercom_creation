var arr = [];

function addElement() {
    var sname = document.getElementById('txt_name').value;
    var semail = document.getElementById('txt_mail').value;
    var bdate = document.getElementById('txt_dob').value;
    var person = {
        name: sname,
        email: semail,
        birthdate: bdate
    };

    if (localStorage.getItem('arr')) {
        arr = JSON.parse(localStorage.getItem('arr'));
    }

    arr.push(person);
    console.log(arr);
    localStorage.setItem("arr", JSON.stringify(arr));
};