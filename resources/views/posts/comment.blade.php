<div class="row mx-3">
    <div class="col-lg-10 col-md-10 col-sm-12">
        <div class="row justify-content-start">
            <i class="fa fa-user fa-2x m-2 text-orange"></i>
            <h6 class="m-2 my-auto">Random User</h6>
        </div>
        <p>{{$comment->comment}}</p>
        <div class="row">
            <p class="mr-auto"></p>
            <p class="ml-auto">{{$comment->created_at}}</p>
        </div>
    </div>
</div>
