let obj={
    Fname:'Pratk',
    age:23,
    birthYear : ()=>{
        year="1988"
    }
}
//defining value externally in the object.
obj.gender='Male'
console.log(Object.getPrototypeOf(obj));

