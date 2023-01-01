<?php

namespace App\Controllers;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $studentmodel = new StudentModel();
        $data['student'] = $studentmodel->findAll();
        return view('student/view_student', $data);
    }

    public function addStudent()
    {
        return view('student/add_student');
    }

    
    public function addRecord()
    {
        $studentmodel = new StudentModel();
        $file = $this->request->getFile('image');
        $imageName='';
        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'image' => $imageName,
            'status' => $this->request->getPost('status') == 'on' ? 1 : 0,
        ];
        
        $studentmodel->insert($data);
        return redirect('student');
    }

    public function updateStudent(){
        $studentmodel = new StudentModel();
        $data['student'] = $studentmodel->where('id', 1)->find();
        return view('student/update_student', $data);
    }
    public function deleteStudent($id){
        $studentmodel = new StudentModel();
        $studentmodel->delete($id);
        return redirect('student');
    }
}