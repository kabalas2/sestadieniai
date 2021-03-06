@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('All Students') }}
                        <a class="btn btn-primary" href="{{route('students.create')}}">
                            +
                        </a>
                    </div>

                    <div class="card-body">
                        <ul>
                        @foreach($students as $student)
                            <li>{{$student->full_name}}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
