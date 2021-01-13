var tips = [10, 15, 20];//initialize the array in which i include all the tips value 
var restBill = [124, 15, 200] //initialize the array in which i include all the restaurants bill value 
var finalBill, i = 0;//initialize the variable
// initialize the object in which i store the actual bill and tip which is of array type.
var PaidAmt = {
    bill: [],
    tip: []
}

// create a function to calculate tip.
function calculateTip() {
    //use for loop for store the value of bill and tip in the icremental array order.
    for (k = 0; k < restBill.length; k++) {
        // to iterate the restBill array to check all the value one by one
        while (i < restBill.length) {
            // when the bill amount is less than 50 then it will go in this loop and exit the loop because i use break statement.
            if (restBill[i] < 50) {
                tip = restBill[i] * 0.2;
                PaidAmt.tip[k] = tip
                PaidAmt.bill[k] = restBill[i] + tip
                i++
                break
            }
            // when the bill amount is greater than 50 and less than 200 then it will go in this loop and exit the loop because i use break statement.
            else if (restBill[i] >= 50 && restBill[i] < 200) {
                tip = restBill[i] * 0.15;
                PaidAmt.tip[k] = tip
                PaidAmt.bill[k] = restBill[i] + tip
                i++
                break
            }
            // when the bill amount is greater than 200 or 200 then it will go in this loop and exit the loop because i use break statement.
            else {
                tip = restBill[i] * 0.1;
                PaidAmt.tip[k] = tip
                PaidAmt.bill[k] = restBill[i] + tip
                i++
                break
            }
        }
    }
}
// call the function.
calculateTip()
//print the object in the console which contain the paid amount i.e. bill + tip
console.log(PaidAmt)