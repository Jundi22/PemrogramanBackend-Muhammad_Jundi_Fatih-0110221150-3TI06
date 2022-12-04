//import dari controller sekaligus melakukan destruction object
const {index, store} = require("./fruitController.js");

const main = () => {
    index();
    store("Melon")
};

main();

