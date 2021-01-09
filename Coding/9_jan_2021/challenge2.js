// Here I am taking the score of three matches of mark.
var MarkMatch1 = prompt("Entered score of match 1 of Mark:");
var MarkMatch2 = prompt("Entered score of match 2 of Mark:");
var MarkMatch3 = prompt("Entered score of match 2 of Mark:");

// Here I am taking the score of three matches of john.
var JohnMatch1 = prompt("Entered score of match 1 of John:");
var JohnMatch2 = prompt("Entered score of match 2 of John:");
var JohnMatch3 = prompt("Entered score of match 3 of John:");

// Here I am taking the score of three matches of marry.
var MarryMatch1 = prompt("Entered score of match 1 of Marry:");
var MarryMatch2 = prompt("Entered score of match 2 of Marry:");
var MarryMatch3 = prompt("Entered score of match 3 of Marry:");


var MarkAvg = parseInt(MarkMatch1) + parseInt(MarkMatch2) + parseInt(MarkMatch3) / 3; // average score of mark.
var MarryAvg = parseInt(MarryMatch1) + parseInt(MarryMatch2) + parseInt(MarryMatch3) / 3; // average score of Marry.
var JohnAvg = parseInt(JohnMatch1) + parseInt(JohnMatch2) + parseInt(JohnMatch3) / 3; // average score of John.

// In this condition we compare the avg score of mark is higher or not with other two player.
if (MarkAvg > JohnAvg && MarkAvg > MarryAvg) {
    console.log("Marks average score is " + MarkAvg + " and he is WINNER.");
}
// In this condition we compare the avg score of john is higher or not with other two player.
else if (JohnAvg > MarkAvg && JohnAvg > MarryAvg) {
    console.log("John average score is " + JohnAvg + " and he is WINNER.");
}
// In this condition we compare the avg score of marry is higher or not with other two player.
else if (MarryAvg > MarkAvg && MarryAvg > JohnAvg) {
    console.log("Marry average score is " + MarryAvg + " and she is WINNER.");
}
//when the match was draw at that this conditon will work.
else {
    console.log("Match was Draw.");
}

