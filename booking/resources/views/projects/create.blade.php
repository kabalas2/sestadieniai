@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Project') }}</div>

                    <div class="card-body">
                       <form action="{{route('projects.store')}}" method="POST">
                           @csrf
                           <input name="name" type="text" placeholder="Project Name">
                           <input name="groups_count" type="number" placeholder="How many groups will be?">
                           <input name="max_per_group" type="number" placeholder="Max per Group"><br>
                           <input name="create" type="submit" value="Create">
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
