// Memanggil data.js dengan require
const fruits = require("./data.js");
const fruit = require("./data.js");

//membuat Method Index
const index = ()=>{
    for (const fruit of fruits){
        console.log(fruit);
    }
}

//membuat Method Store
const store = (name)=>{
    fruits.push(name);
    index();
}


//export method dan index
module.exports = {index, store};