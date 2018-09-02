@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="card w-100">
            <div class="card-header bg-danger">
                <h2>{{$slug->name}}</h2>
                <span class="text-center text-white">{{$slug->description}}</span>
                <div class="float-right">
                    <a href="{{ route('library') }}" class="btn btn-light btn-sm float-right" data-toggle="tooltip"
                       data-placement="left" title="back to library">
                        <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                        back to library
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex flex-column">
                    @foreach($tutorials as $tutorial)

                        <div class="d-flex flex-row">
                            <div class="card flex-row flex-fill">
                                <img width="250" height="160" src="{{$tutorial->img_url}}">
                            </div>
                            <div class="card w-100">
                                <div class="card-header d-flex flex-row align-items-baseline">
                                    <a href="/library/{{$tutorial->slug}}"><h2>{{$tutorial->name}}</h2></a>
                                    <div class="ml-auto">
                                        @if ($tutorial->level == 'easy')
                                            <span class="badge badge-pill badge-success normal">Difficulty: {{$tutorial->level}}</span>
                                        @elseif ($tutorial->level == 'normal')
                                            <span class="badge badge-pill badge-primary normal">Difficulty: {{$tutorial->level}}</span>
                                        @elseif ($tutorial->level == 'hard')
                                            <span class="badge badge-pill badge-warning normal">Difficulty: {{$tutorial->level}}</span>
                                        @elseif ($tutorial->level == 'insane')
                                            <span class="badge badge-pill badge-danger normal">Difficulty: {{$tutorial->level}}</span>
                                        @endif
                                        <span class="badge badge-pill badge-light normal">Reward: {{$tutorial->reward}}</span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    {{ $tutorial->description }}
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
    </div>



@endsection