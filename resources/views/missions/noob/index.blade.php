@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$slug->name}}</div>

                    <div class="card-body">
                        {{ $slug->description }}
                    </div>
                </div>
            </div>
        </div>

        @foreach($slug->mission as $mission)
            <div class="row justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{$mission->name}}</div>

                        <div class="card-body">
                            {{ $mission->description }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
  </div>
</div>
</div>



@endsection