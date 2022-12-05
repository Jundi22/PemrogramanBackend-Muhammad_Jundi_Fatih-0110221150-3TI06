// Membuat method uppercase untuk mencetak string menjadi huruf kapital

// function formatName(name) {
//     const result = name.toUpperCase();
//     return result;
// }

// function getName(name, callformatName) {
//     const result = callformatName(name);
//     console.log(result);
// }

const formatName = (name) => name.toUpperCase()

const getName = (name, callformatName) => console.log(callformatName(name));

getName("Jundi", formatName);