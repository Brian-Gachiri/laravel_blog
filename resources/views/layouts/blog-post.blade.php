<div class="card h-100 border-0 shadow-sm">

    <a href="{{route('show.post.details', $post->id)}}"><img src="{{asset('images/blog.jpg')}}" class="img-fluid card-img-top" alt="Blog Post Image"/>
    </a>


    <div class="card-body">
        <h5>{{$post->title}}</h5>
        <p>{{\Illuminate\Support\Str::limit($post->post, 150)}}</p>
    </div>
    <div class="card-footer bg-white">  
        <div class="row mx-2">
            <p>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
            <a href="{{route('show.post.details', $post->id)}}" class="ml-auto btn btn-orange">Read More</a>
        </div>
    </div>
</div>