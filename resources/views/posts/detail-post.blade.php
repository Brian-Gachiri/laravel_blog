@extends('layouts.master')

@section('title', $post->name)

@section('content')

<div class="container-fluid">

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>

        <script>launchModal();</script>
    @endif

    <!--Row with list of categories-->
    <div class="row my-3">

        @foreach ($categories as $category )
            <a href="#" class="btn btn-outline-secondary rounded-pill mx-1">{{$category->name}}</a>
        @endforeach
    </div>
    <!--End Row with list of categories-->

    <!--Main Content-->

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12" >
            <img src="{{asset('images/landing.svg')}}" class="img-fluid"
            style="max-height:200px"> 
        </div>
    </div>

    <div class="row justify-content-center">
        <h3>{{$post->title}}</h3>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <p>{{$post->post}}</p>

            <div class="card mt-4">
                <div class="card-body">
                    <h5>Add a comment</h5>

                    <form action="{{route('store.comment')}}" method="POST">
                        @csrf
                        @method('post')

                        <input type="hidden" value="{{$post->id}}" name="post_id"/>

                        <div class="form-group">
                            <label>Your Comment:</label>
                            <textarea maxlength="100" class="form-control" name="comment"></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-orange" type="submit">Hit me up</button>
                        </div>
                    </form>
                </div>
            </div>

            <h5 class="mt-4 ml-4">Recent Comments</h5>

            @foreach ($comments as $comment)

            @include('posts.comment')
            <hr>
                
            @endforeach
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <!--Hopefully an assignment: Add a card to subscribe to newsletter-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Launch demo modal
              </button>

              <button type="button" class="btn btn-orange" onclick="launchSweetAlert()">Launch Sweet Alert</button>
        </div>
    </div>
    <!-- End Main Content-->


</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <img src="{{asset('images/comment.svg')}}" style="max-height:3  00px;" alt="You did good"/>
            <p>Your comment has been added successfully. Thank you for your contribution.
        </div>
        <div class="modal-footer row justify-content-center">
          <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('scripts')

<script>

    function launchModal()
    {
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    }

    function launchSweetAlert()
    {
                Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
        });
    }

</script>
@endsection