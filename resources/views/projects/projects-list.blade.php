@extends('layouts.master')

@section('title', "My Projects")

@section('content')

<div class="container">

        <!--Row with list of categories-->
        <div class="row my-3 justify-content-center">
            <a href="{{route('show.project.list', ['platform' => 'Web Development: PHP'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Web Development: PHP</a>
            <a href="{{route('show.project.list', ['platform' => 'Web Development: Python'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Web Development: Python</a>
            <a href="{{route('show.project.list', ['platform' => 'Android Development: Java'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Mobile Development: Java</a>
            <a href="{{route('show.project.list', ['platform' => 'Web Design: HTML&CSS'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Mobile Develoment: Swift</a>

        </div>
        <!--End Row with list of categories-->

    <div class="row justify-content-center">

        @foreach ($projects as $project )

            <div class="col-lg-10 col-md-10 col-sm-12 my-5">
                @include('layouts.project-brief')
            </div>
        
        @endforeach

    </div>

</div>

@endsection