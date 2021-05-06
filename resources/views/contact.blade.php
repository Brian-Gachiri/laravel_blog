@extends('layouts.master')

@section('title', 'Call me')

@section('content')


    <div class="container-fluid bg-gradient-black">
        <div class="row justify-content-center">

            <h1 class="my-5 py-5 text-white text-center">Call me maybe?</h1>
        </div>
    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                <div class="card h-100 bg-black">

                    <div class="card-body text-center">
                        <i class="fa fa-phone fa-3x mb-3 text-orange"></i>
                        <h5 class="text-white">0707320000</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                <div class="card bg-black h-100">

                    <div class="card-body text-center">
                        <i class="fa fa-envelope fa-3x mb-3 text-orange"></i>
                        <h5 class="text-white">{{$user->email}}</h5>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                <div class="card bg-black">

                    <div class="card-body text-center">
                        <i class="fa fa-address-card fa-3x mb-3 text-orange"></i>
                        <h5 class="text-white">Somewhere in Nairobi, Kenya.</h5>
                    </div>
                </div>
            </div>


        </div>


        <div class="row justify-content-center my-5">
            <div class="col-lg-6 col-md-8 col-sm-12">

                <div class="card border-0 shadow-lg">

                    <div class="card-body">

                        <h4 class="text-orange">Leave us a message</h5>


                        <form>

            
                            <div class="form-group">
                        
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="Write your name"/>
                            </div>

                            <div class="form-group">
                                <label>Comment:</label>
                                <input type="text" class="form-control" placeholder="Write your comment"/>    
                            </div>

                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Write your Email"/>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"/>
                                <label>Do you want to recieve newsletters.</label>
                            </div>


                            <button type="submit" class="btn btn-orange w-50">Submit</button>

  




                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection