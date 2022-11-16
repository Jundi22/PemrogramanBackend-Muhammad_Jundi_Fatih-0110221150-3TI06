<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        #menggunakan model student untuk select data
        $students= Student::all();

        $data = [
            'message' => 'Get All Resource',
            'data' => $students,
        ];
        #menggunakan response json laravel
        #otomatis sert header content type



        return response()->json($data, 200);
    }

    public function store(Request $request){
        #menangkap request 
            // $input = [
            //     'nama' => $request->nama,
            //     'nim' => $request->nim,
            //     'email' => $request->email,
            //     'jurusan' => $request->jurusan,
            // ];
        #menggunakan student model untuk insert data
        //$student = Student::create($input);

        #membuat validate untuk validasi data
            $validateData =$request->validate([
            // buar rules untuk ketentuan data yang diinput dan tidak perlu memakai request
                'nama' => 'required', #required artinya harus diisi tidak boleh kosong
                'nim' => 'numeric|required',
                'email' => 'email|required',
                'jurusan' => 'required',
            ]);
        #menggunakan student model untuk insert data
        $student = Student::create($validateData);

            $data = [
                'message' => 'Data student sukses dibuat',
                'data' => $student,
            ];

        #mengembalikan berupa data json yang status code nya 201
        return response()->json($data, 201);
    }
    
    //function update atau put
    public function update(Request $request, $id){
        //cari data server yg mau diupdate
        $student=Student::find($id);
        if ($student) {
        $input=[
            'nama' => $request->nama??$student->nama,
            'nim' => $request->nim??$student->nim,
            'email' => $request->email??$student->email,
            'jurusan' => $request->jurusan??$student->jurusan,
       ];

       $student->update($input);
       $data=[
        'message' => 'Student berhasil diupdate',
        'data' => $student,
       ];

       return response()->json($data,200);
       }else{
        $data=[
            'message' => 'Student not found'
           ];
        return response()->json($data,404);
       }
    }

    

    //function destroy atau delete
    public function destroy($id){
        $student = Student::Find($id);
        if($student){
            $student->delete();
            return response(["Berhasil Menghapus data"]);
        }else{
            return response(["Not Found"]);
        }
    }

    //function show untuk detail resource student
    public function show($id){
        //cari data student
        $student=Student::find($id);
        //kondisi apabila data kosong
        if($student){
            $data = [
                'message'=>'Get detail student',
                'data'=>$student,
            ];
            //mengirim data bentuk json
            return response()->json($data,200);
        }else{
            $data = [
                'message'=>'Student not found'
            ];
            //mengirim data bentuk json
            return response()->json($data,404);
        }     
    }
    
}
