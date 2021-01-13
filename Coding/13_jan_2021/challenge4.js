// here we decalre the object for john 
var john = {
    fullName: 'John smith',
    mass: 62,
    height: 2,
    //here is the method for calulating john BMI
    calulateBMI: function () {
        var BMIres = this.mass / (this.height * this.height)
        return BMIres
    }
}

// here we decalre the object for mark 
var mark = {
    fullName: 'Mark smith',
    mass: 60,
    height: 1,
    //here is the method for calulating mark BMI
    calulateBMI: function () {
        var BMIres = this.mass / (this.height * this.height)
        return BMIres
    }
}
//here store the value in the variable johnBMIres and markBMIres which is return from the method.
var johnBMIres = john.calulateBMI();
var markBMIres = mark.calulateBMI();

// when john BMI is greater then mark BMI this condition excute.
if (johnBMIres > markBMIres) {
    console.log(john.fullName + " is highest BMI and the value is " + johnBMIres)
}
// when mark BMI is greater then john BMI this condition excute.
else if (markBMIres > johnBMIres) {
    console.log(mark.fullName + " is highest BMI and the value is " + markBMIres)
}
// when both BMI value is same at that this condition excute.
else {
    console.log("Both have same BMI.")
}

