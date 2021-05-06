@extends('layouts.app')

@section('content')

<div class="container">

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-warning" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="row justify-content-center">


        <h3 class="text-orange font-weight-bold"><i class="fa fa-edit"></i> Your Categories</h3>

    </div>
    <hr>


    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">

            
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <div class="row">
                        <h5 class="card-title my-auto ml-3">All Categories</h5>
                        <a href="{{route('create.category')}}" class="btn btn-orange ml-auto mr-3">
                            <i class="fa fa-plus mr-2"></i>
                            Add Category</a>                    
                    </div>
                 
                </div>

                <div class="card-body">

                    <table id="datatable" class="table table-bordered table-hover table-striped">

                        <thead class="bg-black text-white">
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Created_at</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{route('show.project',$category->id)}}" class="btn btn-orange btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('edit.category', $category->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('delete.category',$category->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                                </td> 
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>



@endsection


@section('scripts')

<script>

$(document).ready(function() {
    $('#datatable').DataTable();
} );


</script>

@endsection