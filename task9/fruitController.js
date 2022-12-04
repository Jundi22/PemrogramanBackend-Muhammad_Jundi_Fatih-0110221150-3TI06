// Memanggil Fruits dari data.js
const fruits = require("./data.js");

// Membuat method index
const index = () => {
    for (const fruit of fruits){
        console.log(fruit);
    }   
}
index()

// Membuat method store
const store = (name) =>{
    fruits.push(name);
    index();
}
console.log("<br></br>");
//store("Kelapa");
// Membuat method update
const update = (position, name) => {
    fruits[position] = name;
    index();
}
// Membuat method destroy
const destroy = (position) => {
    fruits.splice(position,1);
    index();
 }
//destroy(3);
module.exports = {index, store, update, destroy};