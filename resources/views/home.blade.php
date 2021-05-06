@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row mt-5">


            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body text-center">
                        <i class="fa fa-th-large fa-3x mb-3 text-info"></i>
                        <h5 class="text-info">Total Posts</h5>
                        <h4>{{$posts->count()}}</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center">
                        <i class="fa fa-th-list fa-3x mb-3 text-success"></i>
                        <h5 class="text-success">Total Projects</h5>
                        <h4>{{$projects->count()}}</h4>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card border-0 shadow-sm">

                    <div class="card-body text-center">
                        <i class="fa fa-comments fa-3x mb-3 text-orange"></i>
                        <h5 class="text-orange">Total Comments</h5>
                        <h4>56</h4>                    
                    </div>
                </div>
            </div>


        </div>


        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 col-md-8 col-sm-12">

                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white">
                        <div class="row">
                            <h5 class="card-title my-auto ml-3">Recent Projects</h5>
                            <a href="{{route('projects')}}" class="btn btn-orange ml-auto mr-3">View Projects</a>
                        </div>
                     
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-hover table-striped table-responsive">

                            <thead class="bg-black text-white">
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Description</td>
                                    <td>Platform</td>
                                    <td>Created_at</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($project->description, 10)}}</td>
                                        <td>{{$project->platform}}</td>
                                        <td>{{$project->created_at}}</td>
                                        <td>
                                            <a href="{{route('edit.project', $project->id)}}" class="btn btn-orange btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    
                                        </td> 
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white">

                        <div class="row">
                            <h5 class="card-title my-auto ml-3">Projects Overview</h5>
                            <a href="{{route('add.project')}}" class="btn btn-orange ml-auto mr-3">
                                <i class="fa fa-plus mr-2"></i>
                                Add Project</a>
                        </div>
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

        <div class="row justify-content-center mt-5">
            <div class="col-lg-7 col-md-7 col-sm-12">

                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white">
                        <div class="row">
                            <h5 class="card-title my-auto ml-3">Recent Posts</h5>
                            <a href="{{route('posts')}}" class="btn btn-orange ml-auto mr-3">View Posts</a>
                        </div>
                     
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered table-hover table-striped">

                            <thead class="bg-black text-white">
                                <tr>
                                    <td>Id</td>
                                    <td>Title</td>
                                    <td>Post</td>
                                    <td>Category</td>
                                    <td>Created_at</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)

                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($post->post, 10)}}</td>
                                        <td>{{$post->category_id}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td>
                                            <a href="{{route('edit.post',$post->id)}}" class="btn btn-orange btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-lg-5 col-md-5 col-sm-12">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white">

                        <div class="row">
                            <h5 class="card-title my-auto ml-3">Posts Reviews Overview</h5>
                            <a href="{{route('add.post')}}" class="btn btn-orange ml-auto mr-3">
                                <i class="fa fa-plus mr-2"></i>
                                Add Post</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">

                            <tr>
                                <th>5 Star
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>

                                </th>
                                <td>25</td>
                            </tr>
                            
                            <tr>
                                <th>4 Star
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star"></span>

                                </th>
                                <td>56</td>
                            </tr>
                            
                            <tr>
                                <th>3 Star
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </th>
                                <td>5</td>
                            </tr>
                            
                            <tr>
                                <th>2 Star
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </th>
                                <td>7</td>
                            </tr>
                            <tr>
                                <th>1 Star
                                    <span class="fa fa-star text-orange"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </th>
                                <td>7</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

        </div>
</div>
@endsection
