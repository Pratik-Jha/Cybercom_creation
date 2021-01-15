function fibonacci() {
    //here we take the value from the user 
    var num = prompt("Enter value till where you want to see fibonaci series")
    var num1 = 0;
    var num2 = 1;
    var sum;
    document.write(num1 + " " + num2)
    //iterarte a loop till the user input value.
    for (i = 1; i < num; ++i) {
        sum = num1 + num2;
        num1 = num2;
        num2 = sum;
        document.write(" " + num2)
    }
}
