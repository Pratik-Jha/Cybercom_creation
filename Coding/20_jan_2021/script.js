var arr = localStorage.getItem('arr');
var items = JSON.parse(arr);

arr = items;

document.write('<table border = "1" id = "table1">');
document.write('<tr>');
document.write('<th>Name</th> <th>Email</th> <th>Date Of Birth</th> </tr> <tr>');

if (arr === null) {
    alert("Records not found!");
    document.getElementById("table1").style.display = "none";
    window.location.href = "information.html";
}
else {
    for (var k = 0; k < arr.length; k++) {
        document.write('<td>' + arr[k].name + '</td>');
        document.write('<td>' + arr[k].email + '</td>');
        document.write('<td>' + arr[k].birthdate + '</td>');
        document.write('</tr>');
    }
}
document.write('</table>');	