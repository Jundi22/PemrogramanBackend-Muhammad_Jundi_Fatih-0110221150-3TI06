const persiapan = ()=> {
    console.log("persiapan :");     
}

const rebusAir = ()=> {
    console.log("rebus air :");
}

const masak = ()=> {
    console.log("memasak mie");
    console.log("SELESAI");
}

const main = () => {
    setTimeout(()=> {
        persiapan();
        setTimeout(()=> {
            rebusAir();
            setTimeout(()=> {
                masak();
            }, 5000);
        }, 7000);
    }, 3000);
};

main();