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
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];

        #menggunakan student untuk insert data
        $student = Student::create($input);

        $data = [
            'message' => 'Data student sukses dibuat',
            'data' => $student,
        ];

        #mengembalikan berupa data json yang status code nya 201
        return response()->json($data, 201);
    }
    
    //function update atau put
    public function update(Request $request, $id){
        $input=[
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
       ];

       Student::find($id)->update($input);
       $student=Student::find($id);

       $data=[
        'message' => 'Student berhasil diupdate',
        'data' => $student,
       ];

       return response()->json($data,200);
    }

    //function destroy atau delete
    public function destroy($id){
        $student = Student::FindorFail($id);
        if($student->delete()){
            return response(["Berhasil Menghapus data"]);
        }else{
            return response(["Berhasil Menghapus data"]);
        }
    }
}
