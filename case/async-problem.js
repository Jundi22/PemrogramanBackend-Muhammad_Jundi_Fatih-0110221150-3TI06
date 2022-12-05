const persiapan = ()=> {
    setTimeout(function() {  
        console.log("persiapan :");     
    }, 3000);
}

const rebusAir = ()=> {
    setTimeout(function(){
        console.log("rebus air :");
    }, 7000);
}

const masak = ()=> {
    setTimeout(function(){
        console.log("memasak mie");
        console.log("SELESAI");
    }), 5000;
}

const main = ()=>{
    persiapan();
    rebusAir();
    masak();
}

main();