@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $group->name }}
                        <a class="btn btn-dark" href="{{route('group.assign',$group->id)}}">
                            +
                        </a>
                    </div>

                    <div class="card-body">
                        <ul>
                        @foreach($group->relationships as $element)
                            <li>{{$element->name}}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
