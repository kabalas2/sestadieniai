@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Project') }}</div>

                    <div class="card-body">
                        <form action="{{route('students.store')}}" method="POST">
                            @csrf
                            <input name="full_name" type="text" placeholder="Project Name">
                            <input name="create" type="submit" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
