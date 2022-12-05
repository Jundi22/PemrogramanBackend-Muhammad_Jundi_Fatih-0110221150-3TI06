// Producing menggunakan Promise
const persiapan = ()=>{
    return new Promise((resolve)=> {
        setTimeout(()=> {
            resolve("Persiapan :");
        }, 3000);
    });
}

const rebusAir = ()=>{
    return new Promise((resolve)=> {
        setTimeout(()=> {
            resolve("Rebus Air :");
        }, 7000);
    });
}

const masak = ()=>{
    return new Promise((resolve)=> {
        setTimeout(()=> {
            resolve("Masak :");
        }, 5000);
    });
}

// Consuming menggunakan promise
// const main = () =>{
//     persiapan().then((res)=> {
//         console.log(res);
//         return rebusAir();
//     })
//     .then((res)=> {
//         console.log(res);
//         return masak();
//     })
//     .then((res)=> {
//         console.log(res);
//     });
// };

// Consuming menggunakan async await
const main = async () =>{
    console.log(await persiapan());
    console.log(await rebusAir());
    console.log(await masak());
}

main();