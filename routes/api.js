// Import Student Controller
const StudentController = require("../controller/studentController");

// Import dahulu express dan routernya
const express = require("express");
const router = express.Router();

//router default
router.get("/", (req, res) => {
  res.send("Hello Express");
});

// Mengatur router method nya
router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.destroy);

// Export router
module.exports = router;