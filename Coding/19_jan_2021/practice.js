//This method is call when the button click event occure on the practise_8 page
function call(){ 
    var fname=document.getElementById("txt_FirstName").value;
    var mail=document.getElementById("txt_Email").value;
    var pwd=document.getElementById("txt_Password").value;
    var num=document.getElementById("txt_Phone").value;
    var item={
        'fnm':fname,
        'mail':mail,
        'pwd':pwd,
        'no':num
    }
    localStorage.setItem('fnm',item.fnm)
    localStorage.setItem('mail',item.mail)
    localStorage.setItem('pwd',item.pwd)
    localStorage.setItem('num',item.no)
}  

//This function is call when the onload event call on the information page.
function display(){
    var fnm=localStorage.getItem('fnm')
    var mail=localStorage.getItem('mail')
    var pwd=localStorage.getItem('pwd')
    var num=localStorage.getItem('num')

    document.getElementById("fname").value=fnm;
    document.getElementById("mail").value=mail;
    document.getElementById("pwd").value=pwd;
    document.getElementById("phn").value=num;
}