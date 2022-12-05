// Producing menggunakan Promise
const showDownload = ()=>{
    return new Promise((resolve)=> {
    setTimeout(()=> {
        resolve("Download Selesai");
        }, 3000);
    });
}
const result = "Windows-10.exe";
const Download = ()=>{
    return new Promise((resolve)=> {
        setTimeout(()=> {
        resolve("Hasil Download :" + result);
        }, 2000);
    });
}

// Consuming menggunakan Async Await
const main = async () => {
    console.log(await showDownload());
    console.log(await Download());
}

main();