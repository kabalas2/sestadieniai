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
                                    @foreach($group->relationships as $element)
                                        <li>
                                            {{$element->student->full_name}}
                                            <form action="{{route('group.dismiss')}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{$element->id}}" name="relationship_id">
                                                <input class="btn btn-danger" type="submit" value="-">
                                            </form>
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
