@extends('layouts.app')

@section('content')

<div class="container-fluid">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>                    
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">

        <h3 class="text-orange font-weight-bold"><i class="fa fa-edit"></i> Add New Post</h3>

    </div>
    <hr>



    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">

            
            <div class="card border-0 shadow-sm">

                <div class="card-body">
                    <form action="{{route('create.post')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Adding select for categories-->

                        
                        <div class="form-group">
                            <label for="inputState">Category</label>

                            <select id="inputState" name="category_id" class="form-control">
                              <option selected>Choose a category:</option>

                              @foreach ($categories as $category)

                              <option value="{{$category->id}}">{{$category->name}}</option>

                                  
                              @endforeach

                            </select>
                          </div>

                        <!-- End select for categories-->

      
                        <div class="form-group">
                    
                            <label>Title:</label>
                            <input type="text" name="title" value="{{request()->old('title')}}" class="form-control" placeholder="Write your title"/>

                            @error('title')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label>Featured Image:</label>
                            <input type="file" name="image" class="form-control" placeholder="Write your comment"/>    
                        </div>

                        <div class="form-group">
                    
                            <label>Post:</label>
                            <textarea type="text" name="post" class="form-control" style="height: 300px" placeholder="What are you thinking?">{{old('post')}}</textarea>
                        </div>








                        <button type="submit" class="btn btn-orange mt-5 w-50">Submit</button>






                    </form>
                </div>
            </div>

        </div>
    </div>

</div>



@endsection