@extends('layouts.master')

@section('title', $project->name)

@section('content')

<div class="container-fluid">

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>

        <script>launchModal();</script>
    @endif

    <!--Row with list of categories-->
    <div class="row justify-content-center my-3">
        <a href="{{route('show.project.list', ['platform' => 'Web Development: PHP'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Web Development: PHP</a>
        <a href="{{route('show.project.list', ['platform' => 'Web Development: Python'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Web Development: Python</a>
        <a href="{{route('show.project.list', ['platform' => 'Android Development: Java'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Mobile Development: Java</a>
        <a href="{{route('show.project.list', ['platform' => 'Web Design: HTML&CSS'])}}" class="btn btn-outline-secondary rounded-pill mx-1">Mobile Develoment: Swift</a>

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
        <h3>{{$project->name}}</h3>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <p>{{$project->description}}</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <!--Hopefully an assignment: Add a card to subscribe to newsletter-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Launch demo modal
              </button>

              <button type="button" class="btn btn-orange" onclick="launchSweetAlert()">Launch Sweet Alert</button>
        </div>
    </div>

    <h4 class="text-center">Related Projects</h4>
    <div class="row justify-content-center">

        @foreach ($related_projects as $project )

            <div class="col-lg-4 col-md-6 col-sm-12">
                @include('layouts.project-brief')
            </div>
        
        @endforeach

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