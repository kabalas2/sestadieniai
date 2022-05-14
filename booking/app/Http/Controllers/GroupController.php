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

    public function place(Request $request)
    {
        $groupId = $request->post('group_id');
        $group = Group::find($groupId);
        $max = $group->project->max_per_group;
        $count = Relationship::where('group_id', $group->id)->count();
        if($count < $max){
            $relationship = new Relationship();
            $relationship->student_id = $request->post('student_id');
            $relationship->group_id = $groupId;
            $relationship->project_id = $group->project->id;
            $relationship->save();
        }else{
            echo 'grupe jau pilna';
        }

    }

    public function dismiss(Request $request)
    {
        $relationship = Relationship::find($request->post('relationship_id'));
        $relationship->delete();
    }
}
