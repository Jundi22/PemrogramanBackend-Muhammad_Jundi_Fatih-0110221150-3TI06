// import model student
const Student = require("../models/Student");


// Membuat Class StudentController
class StudentController {
  // menambah keyword async
    async index(req, res) {

    // Memanggil method static all dengan async await
    const students = await Student.all();

    const data = {
        message: "Menampilkan semua students",
        data: students,
        };
        res.json(data);

    };

    async store(req, res) {
      // const {nama} = req.body;

      // Memanggil method static create dengan async await
      const students = await Student.create(req.body);

      const data = {
        message: `Menambahkan data student`,
        data: students,
      };

      res.json(data);
    };

    async update(req, res){
      const{id} = req.params;
      // cari student yang ingin diupdate
      const student = await Stundent.find(id);


    };

    async show(req, res){
      const{id} = req.params;
      // cari id student
      const student = await Student.find(id);
      
      if(student){
        const data ={
          message : "Menampilkan detail students",
          data : student,
        };
        // kembalikan data type json
        res.status(200).json(data);
      }else{
        const data = {
          message : "student not found",
        };
        // kembalikan data type json
        res.status(404).json(data);
      }
    }

    // method delete data
    async destroy(req, res) {
      const { id } = req.params;
      const student = await Student.find(id);

      if(student){
        // melakukan hapus data
        await Student.delete(id);
        const data = {
          message: `Menghapus data students`,
        };
        res.status(200).json(data);
      }
      else{
        const data = {
          message:`Student not found`,
        };
        res.status(404).json(data);
      }
    }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
