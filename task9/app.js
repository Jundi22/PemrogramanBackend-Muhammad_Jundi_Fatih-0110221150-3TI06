// Memanggil file fruitControler
const {index, store, update, destroy} = require("./fruitController.js");

// Memaggil method fruitcontroller
const main = ()=>{
    console.log("Berikut adalah data index Fruits :");
    index();

    console.log("Berikut adalah data store Fruits :");
    store("Melon");

    console.log("Berikut adalah data update Fruits :");
    update(2,"Alpukat")

    console.log("Berikut adalah data destroy Fruits :");
    destroy(3);
};
main();