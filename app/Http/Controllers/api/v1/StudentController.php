<?php

namespace App\Http\Controllers\api\v1;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; 

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        // return $students;

        if ($students->count()>0) {
            return response()->json([
                    'status'=>200,
                    'students'=>$students
            ], 200);
        } else {
            return response()->json([
                'status'=>404,
                'message'=>'No Record Found'
        ], 404);
        }
        
    }

    public function store(Request $req)
    {
       $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:250',
            'course' => 'required|string|max:250',
            'email' => 'required|string|max:250',
            'phone' => 'required|string|max:15'

       ]);
       if ($validator->fails()) {
        return response()->json([
            'staus' => 420,
            'errors' => 'Null value are not required'
        ], 420);
       } else {
        $students = Student::create([
                'name' => $req->name,
                'course' => $req->course,
                'email' => $req->email,
                'phone' => $req->phone,
        ]);

        if ($students) {
            return response()->json([
                'status' => 200,
                'message' => 'Saved Successfully'
            ],200);
        } else {
            return response()->json([
                'status' => 502,
                'message' => 'Something went wrong'
            ],502);
        }
        
       } 
    }

    public function show($id)
    {
        $student = Student::find($id);
        if ($student) {
            return response()->json([
                'status' => 200,
                'student' => $student
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No such student Found'
            ], 404);
        }
        
    }
    public function edit($id)
    {
       $student =Student::find($id);
       if ($student) {
        return response()->json([
            'status' => 200,
            'student' => $student
        ], 200);
    } else {
        return response()->json([
            'status' => 404,
            'message' => 'No such student Found'
        ], 404);
    }

    }

    public function update(Request $req, int $id)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:250',
            'course' => 'required|string|max:250',
            'email' => 'required|string|max:250',
            'phone' => 'required|string|max:15'

       ]);
       if ($validator->fails()) {
        return response()->json([
            'staus' => 420,
            'errors' => 'Null value are not required'
        ], 420);
       } else {
        $student = Student::find($id);
        if ($student) {

            $student = update([
                'name' => $req->name,
                'course' => $req->course,
                'email' => $req->email,
                'phone' => $req->phone,
        ]);

            return response()->json([
                'status' => 200,
                'message' => 'Updated Successfully'
            ],200);
        } else {
            return response()->json([
                'status' => 502,
                'message' => 'No such student Found'
            ],502);
        }
        
       } 
    }
}
