@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $group->name }}
                    </div>

                    <div class="card-body">
                       <form action="" method="POST">
                           <input type="hidden" value="{{$group->id}}" name="group_id">
                           <select name="student_id">
                                @foreach($students as $student)
                                    <option value="{{$student->id}}">
                                        {{$student->full_name}}
                                    </option>
                                @endforeach
                           </select>
                           <input type="submit" value="Priskirti">
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
