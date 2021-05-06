<div class="card bg-dark text-white h-100 border-0 shadow-sm">

    <a href="{{route('show.project.details', $project->id)}}"><img src="{{asset('images/thinkin.jpg')}}" class="img-fluid card-img-top image-fit" style="max-height:200px;" alt="Blog Post Image"/>
    </a>


    <div class="card-body">
        <h5>{{$project->name}}</h5>
        <p>{{\Illuminate\Support\Str::limit($project->description, 150)}}</p>
    </div>
    <div class="card-footer">
        <div class="row mx-2">
            <p class="my-auto">{{\Carbon\Carbon::parse($project->created_at)->diffForHumans()}}</p>
            <a href="{{route('show.project.details', $project->id)}}" class="ml-auto btn btn-orange">See  Details</a>
        </div>
    </div>
</div>