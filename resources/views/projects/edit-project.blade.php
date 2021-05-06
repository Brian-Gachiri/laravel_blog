@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <h3 class="text-orange font-weight-bold"><i class="fa fa-edit"></i> Edit Project</h3>

    </div>
    <hr>



    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">

            
            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h4 class="text-orange">Update Project Details</h5>


                    <form action="{{route('update.project', $project->id)}}" method="post">
                        @csrf
                        @method('POST')

        
                        <div class="form-group">
                    
                            <label>Name:</label>
                            <input type="text" name="name" value="{{$project->name}}" class="form-control" placeholder="Write your name"/>
                        </div>

                        <div class="form-group">
                    
                            <label>Description:</label>
                            <textarea type="text"  name="description" class="form-control" placeholder="Write a description">{{$project->description}}"</textarea>
                        </div>

                        <div class="form-group">
                            <label>Featured Image:</label>
                            <input type="file" value="{{$project->featured_image_url}}" name="featured_image_url" class="form-control" placeholder="Write your comment"/>    
                        </div>

                        <div class="form-group">
                            <label>Source code URL:</label>
                            <input type="text" value="{{$project->code_url}}" name="code_url" class="form-control" placeholder="Enter a link to your code or site"/>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Platform</label>

                            <select id="inputState" value="{{$project->framework}}" name="platform" class="form-control">
                              <option selected>Choose a platform:</option>
                              <option>Web Development: PHP</option>
                              <option>Web Development: Python</option>
                              <option>Android Development: Java</option>
                              <option>Web Design: HTML&CSS</option>

                            </select>
                          </div>




                        <button type="submit" class="btn btn-orange w-50">Update Details</button>






                    </form>
                </div>
            </div>

        </div>
    </div>

</div>



@endsection