@extends('fontend.master')
@section('body')
    <section class="py-2 bg-secondary">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center text-light py-2">Post Details</h1>
            </div>

        </div>
    </section>

    <div class="container my-3">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card card-body rounded-0">
                    <img src="{{ asset($details->image) }}" style="height: 350px" alt=" Image Not Found">
                    <h4 class="pt-4">
                        {{ $details->title }}
                    </h4>
                    <p class="py-1 my-0"> <i class="fa-solid fa-user" style="color: #d20303"></i> &nbsp;By {{ $details->name  }}</p>
                    <p class="py-0 my-0"> <i class="fa fa-calendar"> </i> &nbsp;{{ $details->date  }}</p>

                    <p>
                        {!! $details->description !!}
                    </p>

                </div>
            </div>

            <div class="col-md-3">
                <h4>Featured Images</h4>
                <hr>
                @foreach($images as $link)
                <div class="row mt-2">
                    <img src="{{ asset($link) }}" style="height: 150px; width: 200px" alt="">
                </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
