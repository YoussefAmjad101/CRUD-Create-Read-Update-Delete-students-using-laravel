<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentFormRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    public function create(){
        return view('student.create');
    }
    public function store(StudentFormRequest $request){

        $data = $request->validated();

        $student = Student::create($data);

        return redirect('')->with('message','Student created successfuly');

    }
    public function edit($student_id){
        $student = Student::find($student_id);
        return view('student.edit',compact('student'));
    }
    public function update(StudentFormRequest $request,$student_id){
        $data = $request->validated();
        $student = Student::where('id',$student_id)->update([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'phone' => $data['phone'],
        ]);
        return redirect('/students')->with('message', 'Student Updated successfuly');
    }
    public function destroy($student_id) {
        $student = Student::find($student_id)->delete();
        return redirect('')->route('students')->with('message', 'Student Deleted successfuly');

    }
}
