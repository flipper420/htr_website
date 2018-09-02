@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h2>Library Categories</h2>
                        <div class="float-right">
                            <a href="{{ route('public.home') }}" class="btn btn-light btn-sm float-right"
                               data-toggle="tooltip" data-placement="left" title="back to home">
                                <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                                back to home
                            </a>
                        </div>
                    </div>

                    <div class="card-body">

                        @foreach($categories as $category)

                            <div class="card ">
                                <div class="card-header"><a href="/library/{{$category->slug}}">
                                        <h2>{{$category->name}}</h2></a></div>

                                <div class="card-body">
                                    {{ $category->description }}
                                </div>
                            </div>


                        @endforeach

                        <form action="{{ route('library.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            Book title:
                            <br/>
                            <input type="text" name="title"/>
                            <br/><br/>
                            Logo:
                            <br/>
                            <input type="file" name="logo"/>
                            <br/><br/>
                            <input type="submit" value=" Save "/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>



@endsection