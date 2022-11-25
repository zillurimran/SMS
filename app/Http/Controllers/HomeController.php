<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public $students, $image, $imageName, $directory, $imgUrl, $departments;
    public function index(){
        return view('crud.add-student',[
            'departments'=>Department::all()
        ]);
    }

    public function save(Request $request){
        $this->students = new StudentInfo();
        $this->students->s_name= $request->s_name;
        $this->students->phone= $request->phone;
        $this->students->email= $request->email;
        $this->students->dept_name= $request->dept_name;

        if($request->file('image')){
            
            $this->students->image  =$this->saveImage($request);
        }

        $this->students->address= $request->address;

        $this->students->save();
        return redirect(route('manage.student'));
    }

    public function saveImage(Request $request){
        $this->image=$request->file('image');
        $this->imageName=rand().".".$this->image->getClientOriginalExtension();
        $this->directory ='asset/image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }

    public function manage(){
        $this->students= DB::table('student_infos')
            ->join('departments','student_infos.dept_name','=','departments.id')
            ->select('student_infos.*','departments.*')
            ->get();

//        $this->students = StudentInfo::all();

        return view('crud.manageStudent',[
            'students'=>$this->students
        ]);
    }

    public function addDept(){
        return view('crud.add-dept');
    }

    public function saveDept(Request $request){

        $this->departments= new Department();
        $this->departments->dept_name = $request->dept_name;
        $this->departments->dept_code = $request->dept_code;
        $this->departments->save();

        return redirect(route('all.dept'));



    }



    public function allDept(){
        $this->departments = Department::all();

        return view('crud.manage-dept',[
            'departments'=> $this->departments
        ]);
    }



    public function edit($id){
        $this->students = StudentInfo::find($id);
        return view('crud.edit-Student',[
            'student'=>$this->students
        ]);
    }

    public function updateStudent(Request $request){
        $this->students = StudentInfo::find($request->student_id);
        $this->students->s_name = $request->s_name;
        $this->students->phone= $request->phone;
        $this->students->email= $request->email;
        $this->students->dept_name= $request->dept_name;

        if($request->file('image')){
            $this->students->image  =$this->saveImage($request);
        }

        $this->students->address= $request->address;

        $this->students->save();
        return redirect(route('manage.student'));

    }

    public function editDept($id){
        $this->departments = Department::find($id);

        return view('crud.edit-dept',[
            'department'=>$this->departments
        ]);

    }


    public function updateDept(Request $request){
       $this->departments= Department::find($request->dept_id);
        $this->departments->dept_name = $request->dept_name;
        $this->departments->dept_code = $request->dept_code;
        $this->departments->save();

        return redirect(route('all.dept'));
    }


    public function deleteStudent(Request $request){
        $this->students=StudentInfo::find($request->student_id);

        if($this->students->image !== null){
            unlink($this->students->image );
        }
        
        $this->students->delete();

        return redirect(route('manage.student'));
    }

    public function deleteDept(Request $request){
       $this->departments = Department::find($request->dept_id);
       $this->departments->delete();

       return redirect(route('all.dept'));
    }

    public function showStudents(){

    }
}
