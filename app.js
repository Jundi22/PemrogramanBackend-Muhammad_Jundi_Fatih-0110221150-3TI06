// Import dahulu express dan alamat routernya
const express = require("express") 
const router = require("./routes/api.js")

const app = express() //buat object express di const app

// use untuk memakai
// Pakai middleware
app.use(express.json())
app.use(express.urlencoded())

// Pakai routernya
app.use(router)

//lalu memanggil port 3000 dengan listen
app.listen(3000)