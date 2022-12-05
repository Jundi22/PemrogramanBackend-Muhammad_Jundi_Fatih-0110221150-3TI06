// Producing callback
function showDownload(result){
    console.log("Download Selesai");
    console.log("Hasil Download: " + result);
}

function Download(callshowDownload){
    setTimeout( function() {
        const result = "windows-10.exe";
        callshowDownload(result); 
    }, 3000);
    
}

// Consuming callabck
Download(showDownload);