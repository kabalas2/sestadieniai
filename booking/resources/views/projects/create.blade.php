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
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
