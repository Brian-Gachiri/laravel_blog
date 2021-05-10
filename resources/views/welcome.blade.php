@extends('layouts.master')

@section('title', "Welcome Home")

@section('content')

<div class="container-fluid bg-black">

    <div class="row justify-content-center pt-5">

        <div class="col-lg-6 col-md-6 col-sm-12 my-auto my-center">

            <h1 class="text-orange ml-lg-5">A Happier World.</h1>
            <h5 class="ml-lg-5 text-white">Like a mug of hot chocolate on a cold rainy day.
                Put a smile on a stranger's face. 
                Make the world a better place. 
            </h4>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-3">

            <img src="{{ asset('images/well.svg')}}" class="img-fluid mx-auto my-auto " style="height:500px;"
                alt="Landing page image">
            
        </div>
    </div>
</div>




<!--Second Content-->

<div class="container-fluid ">


<h2 class="text-center text-orange pt-4">What I specialize in</h3>

<div class="row justify-content-center ">

    <div class="col-lg-4 col-md-4 col-sm-12  text-center">

        <div class="card h-100">
            <div class="card-body">

                <i class="fa fa-globe fa-4x mt-3 text-orange"></i>
                <h4>Web Development</h4>
                <p class="mb-5 text-black">I help you make a mark online
                    by developing web sytems and stuff. Admin dashboards, awesome landing pages.</p>
            </div>
        </div>


    </div>

    <div class="col-lg-4 col-md-4 col-sm-12  text-center">

        <div class="card h-100">
            <div class="card-body">
                <i class="fa fa-mobile fa-4x mt-3 text-orange"></i>
                <h4>Mobile Development</h4>
                <p class="mb-5 text-black">Steal people's personal information
                    by having them download your app 
                    and sell it their data to facebook.
                </p>

            </div>
        </div>


        
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12  text-center">

        <div class="card h-100">
            <div class="card-body">
                <i class="fa fa-picture-o fa-4x mt-3 text-orange"></i>
                <h4>Graphic Design</h4>
                <p class="mb-5 text-black">Pictures pictures and more pictures.
                    Stuff stuff and more stuff. We get you living through the pixels we keep giving. </p>
            </div>
        </div>
      
        
    </div>
</div>

<!--Assignment: Add an anchor tag here to link to contact.html
and style it to look like a button.-->

</div>

<!--End Second Content-->


<!--Blog Posts Content-->
<div class="container-fluid">
    <div class="row justify-content-center mt-5">

        @foreach ($posts as $post )

            <div class="col-lg-4 col-md-6 col-sm-12">
                @include('layouts.blog-post')
            </div>
            
        @endforeach
    </div>

</div>

<!--End Blog Post Content-->

<!--Projects Content-->
<div class="container-fluid">
    <div class="row justify-content-center mt-5">

        @foreach ($projects as $project )

            <div class="col-lg-4 col-md-6 col-sm-12">
                @include('layouts.project-brief')
            </div>
            
        @endforeach
    </div>

</div>

<!--End Projects Content-->

<!-- Third Content-->

<div class="container-fluid ">


<h2 class="text-center text-orange pt-5">Testimonials</h3>

<div class="row justify-content-center my-5">

    <div class="col-lg-4 col-md-4 col-sm-12 px-3 text-center margin-top-small">

        <div class="card border-0 shadow-sm h-100 testimonial-card">

            <div class="card-body">

                <i class="fa fa-user fa-4x mt-5 text-orange"></i><br>
                <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star"></span>
                
                <h4 class="mt-2 text-black">Random Person</h4>

                <p>Your burgers were juicy and
                     tasty but too small for the price.
                     I loved the service and reception.
                      I give you 4 stars.</p>

                

            </div>


        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 px-3 text-center margin-top-small">

        <div class="card border-0 shadow h-100 testimonial-card">

            <div class="card-body">

                <i class="fa fa-user fa-4x mt-5 text-orange"></i><br>
                <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                <h4 class="mt-2 text-black">Mean Hooman</h4>
                
                <p>I hated it, I hated everything.
                    Your burgers were dry.
                    Your milkshake had no milk and it wasn't even shaken.
                    One star because your interior decor is decent.
                </p>

                

            </div>


        </div>
        
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 px-3 text-center  margin-top-small">
     
        <div class="card border-0 shadow-sm h-100 testimonial-card">

            <div class="card-body">

                <i class="fa fa-user fa-4x mt-5 text-orange"></i><br>
                <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star text-orange"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                <h4 class="mt-3 text-black">Nervous Eater</h4>
                <p>I liked the fries,
                    but there was a mirror near so I didn't enjoy them.
                Plus the waiters kept staring at me. 3 stars.</p>

                

            </div>


        </div>
    </div>
</div>
</div>


<!--End Third Content-->



@endsection