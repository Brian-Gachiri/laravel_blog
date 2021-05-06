@extends('layouts.app')

@section('content')

<div class="container">

    <!--First Content: Name, ID and Action buttons-->

    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-7 col-sm-12">

            <h3 class="text-center font-weight-bold">Post {{$post->id}}: {{$post->title}}</h3>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 ml-auto">

            <div class="row justify-content-end">
                <a href="{{route('posts')}}" class="btn btn-outline-orange border-0 mx-1">Back</a>
                <a href="{{route('edit.post',$post->id)}}" class="btn btn-outline-orange mx-1">Edit</a>
                <a href="#" class="btn btn-orange mx-1">Share</a>
            </div>
        </div>
    </div>

    <hr>
    <!--End of first content-->

    <!--Second Content: Description, Date, Platform, Related and Redirect button-->

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card h-100">

                <div class="card-header bg-white">
                    <div class="row mx-1">
                        <h5 class="my-auto">Post:</h5>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{$post->post}}</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="row mx-2">
                        <p>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
                        <p class="ml-auto">{{$post->category_id}} : Random Name</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="card">

                <div class="card-header bg-white">
                    <h5>Related Post</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">

                        <tr>
                            <th>Html/Css</th>
                            <td>25</td>
                        </tr>
                        
                        <tr>
                            <th>PHP</th>
                            <td>56</td>
                        </tr>
                        
                        <tr>
                            <th>Javascript</th>
                            <td>5</td>
                        </tr>
                        
                        <tr>
                            <th>SQL</th>
                            <td>7</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--End Second content-->


    <!--Third Content: Project Images Carousel-->

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10 col-md-12 col-sm-12">
            <h3 class=" font-weight-bold">Post Images</h3>
            <div class="card">
                <div id="carouselExampleIndicators" class="carousel slide card-img-top" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/landing.svg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/cool.svg')}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/well.svg')}}" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
    <!--End Third Content-->


</div>

@endsection