@extends('layouts.master')

@section('title', 'Check me out')

@section('content')

<!--Page Content-->

<div class="container-fluid bg-gradient-black">
        <div class="row justify-content-center">

            <h1 class="my-5 py-5 text-white">About Me</h1>
        </div>
    </div>


    <div class="container">

        <div class="row justify-content-start">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="mt-5 mb-3 text-orange"> A Little about me</h4>
                <h5 class="mb-5">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever
                      since the 1500s, when an unknown printer took a galley of type
                       and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h6>
          
            </div>

        </div>
    </div>

    

    <div class="container-fluid">

        <div class="row justify-content-center bg-black mt-5 py-5">

            <div class="col-lg-5 col-md-4 col-sm-12 my-auto py-5 mr-lg-3">

                <h4 class="text-orange"> A Little about me</h5>
                <h5 class="mt-2 text-white">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever
                      since the 1500s, when an unknown printer took a galley of type
                
            </div>

            <div class="col-lg-5 col-md-8 col-sm-12 my-auto">

                <img src="{{asset('images/travel.svg')}}" alt="Landing Page Image" class="img-fluid my-auto">


            </div>

            

        </div>
    </div>


    <div class="container">

        <div class="row justify-content-center py-5">

            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">

                <img src="{{asset('images/cool.svg')}}" alt="Landing Page Image" class="img-fluid">


            </div>

            
            <div class="col-lg-6 col-md-6 col-sm-12 my-auto">

                <h4 class=" text-orange"> A Little about me</h5>
                <h5 class="mt-2">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever
                      since the 1500s, when an unknown printer took a galley of type
                       and scrambled it to make a type specimen book.
                
            </div>
        </div>
    </div>








    @endsection
