//When the mouse is on the text at that time this function work.
function changeText(text) {
    //By using this we get to know that what value is written
    var display = document.getElementById('msg');
    display.textContent = "Welcome to my Webpage!!!";
}

//Note: If you want to see the above msg for permanent than remove the below function.
// Whne the mouse is move away from the text at that time this function is work.
function defaultText(text) {

    var display = document.getElementById('msg');
    display.textContent = "Welcome!!";
}

