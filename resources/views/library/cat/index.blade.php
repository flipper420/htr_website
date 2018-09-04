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
                    @switch(strtolower($slug->name))
                        @case('articles')
                        <span> `E-mail` input is empty!</span>
                        @break

                        @case('ebooks')
                        <span>`Password` input is empty!</span>
                        @break

                        @case('articles')
                        <span> `E-mail` input is empty!</span>
                        @break

                        @case('ebooks')
                        <span>`Password` input is empty!</span>
                        @break

                        @case('articles')
                        <span> `E-mail` input is empty!</span>
                        @break

                        @case('ebooks')
                        <span>`Password` input is empty!</span>
                        @break

                        @default
                        <span>Something went wrong, please try again</span>
                    @endswitch

                    @foreach($slug->articles as $article)

                        <div class="d-flex flex-row">
                            <div class="card flex-row flex-fill">
                                <img width="250" height="160" src="{{$article->img_url}}">
                            </div>
                            <div class="card w-100">
                                <div class="card-header d-flex flex-row align-items-baseline">
                                    <a href="/library/articles/{{$article->title}}"><h2>{{$article->title}}</h2></a>
                                    <div class="ml-auto">
                                        <span class="badge badge-pill badge-light normal">Published: {{$article->published}}</span>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h4>Content</h4>
                                    {{ $article->content }}
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