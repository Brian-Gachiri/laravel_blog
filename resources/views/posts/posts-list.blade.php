@extends('layouts.master')

@section('title', "My Posts")

@section('content')

<div class="container">

        <!--Row with list of categories-->
        <div class="row my-3 justify-content-center">

            @foreach ($categories as $category )
                <a href="{{route('show.post.list', ['category' => $category->id])}}" class="btn @if(request('category') == $category->id) btn-secondary @else btn-outline-secondary @endif rounded-pill mx-1">{{$category->name}}</a>
            @endforeach
        </div>
        <!--End Row with list of categories-->

    <div class="row justify-content-center">

        @foreach ($posts as $post )

            <div class="col-lg-10 col-md-10 col-sm-12 my-5">
                @include('layouts.blog-post')
            </div>
        
        @endforeach

    </div>

</div>

@endsection