@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $project->name }}
                    </div>

                    <div class="card-body">
                        @foreach($project->groups as $group)
                            <h2>
                                <a href="{{route('group.show',$group->id)}}">
                                    {{$group->name}}
                                </a>
                            </h2>
                                <ul>
                                    @foreach($group->relationships as $elemt)
                                        <li>
                                            {{$elemnt->student->full_name}}
                                        </li>
                                    @endforeach
                                </ul>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
