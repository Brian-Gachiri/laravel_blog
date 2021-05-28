@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row mt-5">

        <div class="col-lg-3 col-md-3 col-sm-12">
            <a href="{{route('categories')}}">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fa fa-th-large fa-3x mb-3 text-dark"></i>
                        <h5 class="text-dark">Total Categories</h5>
                        <h4 class="text-dark">{{$categories->count()}}</h4>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-12">
            <a href="{{route('posts')}}">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fa fa-th-large fa-3x mb-3 text-info"></i>
                        <h5 class="text-info">Total Posts</h5>
                        <h4 class="text-dark">{{$posts->count()}}</h4>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
            <a href="{{route('projects')}}">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-th-list fa-3x mb-3 text-success"></i>
                        <h5 class="text-success">Total Projects</h5>
                        <h4 class="text-dark">{{$projects->count()}}</h4>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-12">
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
                                <tr id="project_id_{{ $project->id }}">

                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($project->description, 10)}}</td>
                                        <td>{{$project->platform}}</td>
                                        <td>{{$project->created_at}}</td>
                                        <td>
                                            <a href="{{route('edit.project', $project->id)}}" class="btn btn-orange btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" 
                                            class="btn btn-danger btn-sm delete-project"
                                            data-id="{{$project->id}}">
                                            <i class="fa fa-trash project_icon_{{ $project->id }}"></i></a>
    
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

                                    <tr id="post_id_{{ $post->id }}">
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($post->post, 10)}}</td>
                                        <td>{{$post->category_id}}</td>
                                        <td>{{$post->created_at}}</td>
                                        <td>
                                            <a href="{{route('edit.post',$post->id)}}" class="btn btn-orange btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" 
                                            class="btn btn-danger btn-sm delete-post"
                                            data-id="{{$post->id}}">
                                            <i class="fa fa-trash post_icon_{{ $post->id }}"></i></a>
    
    
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

@section('scripts')

<script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('body').on('click', '.delete-project', function () {

            var id = $(this).data("id");
            confirm("Are you sure you want to delete");
            
            $('.project_icon_'+id).removeClass('fa-trash');
            $('.project_icon_'+id).addClass('fa-spinner fa-spin')


            $.ajax({
                type: "POST",
                url: "{{route('delete.project')}}",
                data: {
                    'id': id
                },
                success: function (data) {
                    $('.project_icon_'+id).addClass('fa-trash');
                    $('.project_icon_'+id).removeClass('fa-spinner fa-spin');
                    $("#project_id_"+id).remove();
                },
                error: function (data) {
                    
                    console.log('Error:', data);

                    Swal.fire({
                        title: 'Sorry!',
                        text: 'Something went wrong.',
                        icon: 'error',
                        confirmButtonText: 'Ni sawa'
                    })
                }
            });
        })


        $('body').on('click', '.delete-post', function () {

            var id = $(this).data("id");
            confirm("Are you sure you want to delete");

            $('.post_icon_'+id).removeClass('fa-trash');
            $('.post_icon_'+id).addClass('fa-spinner fa-spin')


            $.ajax({
                type: "POST",
                url: "{{route('delete.post')}}",
                data: {
                    'id': id
                },
                success: function (data) {
                    $('.post_icon_'+id).addClass('fa-trash');
                    $('.post_icon_'+id).removeClass('fa-spinner fa-spin');
                    $("#post_id_"+id).remove();
                },
                error: function (data) {
                    
                    console.log('Error:', data);

                    Swal.fire({
                        title: 'Sorry!',
                        text: 'Something went wrong.',
                        icon: 'error',
                        confirmButtonText: 'Ni sawa'
                    })
                }
            });
})



    });
        
</script>

@endsection
