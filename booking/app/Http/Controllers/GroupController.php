<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Relationship;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function show($id)
    {
        $data['group'] = Group::find($id);

        return view('group.single', $data);
    }

    public function assign($id)
    {
        $data['group'] = Group::find($id);
        $projectId = $data['group']->project_id;
        $assignedStudentsId = [];
        $relationships = Relationship::where('project_id',$projectId)->get();
        foreach ($relationships as $element){
            $assignedStudentsId[] = $element->student_id;
        }

        $students = Student::all();
        $notAssignedStudents = [];
        foreach ($students as $student){
            if(!in_array($student->id, $assignedStudentsId)){
                $notAssignedStudents[] = $student;
            }
        }
        $data['students'] = $notAssignedStudents;
        return view('group.assign', $data);
    }

    public function
}
