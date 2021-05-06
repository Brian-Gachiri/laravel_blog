@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <h3 class="text-orange font-weight-bold"><i class="fa fa-edit"></i> Edit Post</h3>

    </div>
    <hr>



    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">

            
            <div class="card border-0 shadow-sm">

                <div class="card-body">
                    <form action="{{route('update.post', $post->id)}}" method="post">
                        @csrf
                        @method('POST')
      
                        <div class="form-group">
                    
                            <label>Title:</label>
                            <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Write your title"/>
                        </div>

                        
                        <div class="form-group">
                            <label>Featured Image:</label>
                            <input type="file" name="image" value="{{$post->featured_image_url}}" class="form-control" placeholder="Write your comment"/>    
                        </div>

                        <div class="form-group">
                    
                            <label>Post:</label>
                            <textarea type="text" name="post" class="form-control" style="height: 300px" placeholder="What are you thinking?">{{$post->post}}</textarea>
                        </div>








                        <button type="submit" class="btn btn-orange mt-5 w-50">Update Post</button>






                    </form>
                </div>
            </div>

        </div>
    </div>

</div>



@endsection