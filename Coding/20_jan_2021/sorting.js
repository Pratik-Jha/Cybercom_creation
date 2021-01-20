let data = [
    {
        firstName: 'Pratik',
        lastName: 'Jha',
        age: 23,
    },

    {
        firstName: 'XYZ',
        lastName: 'ZYx',
        age: 25,
    },

    {
        firstName: 'ABc',
        lastName: 'cba',
        age: 30,
    }
];
//sort and array object w.r.t name
sortbyName = () => {
    data.sort((a, b) => {
        let fn = a.firstName.toLowerCase(),
            fn1 = b.firstName.toLowerCase();

        if (fn < fn1) {
            return -1;
        }
        if (fn > fn1) {
            return 1;
        }
        return 0;
    });

    data.forEach((el) => {
        console.log(`${el.firstName} ${el.lastName} ${el.age}`);
    });
}
//sort and array object w.r.t age
sortbyAge = () => {
    data.sort((a, b) => b.age - a.age);

    data.forEach((e) => {
        console.log(`${e.firstName} ${e.lastName} ${e.age}`);
    });
}

