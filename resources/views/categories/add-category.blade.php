@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <h3 class="text-orange font-weight-bold"><i class="fa fa-edit"></i> Add New Category</h3>

    </div>
    <hr>



    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">

            
            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h4 class="text-orange">Enter Category Details</h5>


                    <form action="{{route('store.category')}}" method="post">
                        @csrf
                        @method('POST')

        
                        <div class="form-group">
                    
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Write your name"/>
                        </div>



                        <button type="submit" class="btn btn-orange w-50">Submit</button>






                    </form>
                </div>
            </div>

        </div>
    </div>

</div>



@endsection