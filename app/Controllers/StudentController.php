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
            'email' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('name'),
            'image' => $imageName,
            'status' => $this->request->getPost('name'),
        ];
        
        $studentmodel->insert($data);
        return redirect('student');
    }

    public function updateStudent(){
        return view('student/update_student');
    }

}